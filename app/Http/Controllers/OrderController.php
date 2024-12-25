<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;
use App\Models\DeliveryAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Show the checkout page.
     */
    public function checkout()
    {
        $user = Auth::user();
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
        $cartItems = $cart->cartItems()->with('product')->get();

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });
        return view('checkout', compact('cartItems', 'totalPrice'));
    }

    /**
     * Place an order.
     */
    // public function placeOrder(Request $request)
    // {
    //     $user = Auth::user();
    //     $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    //     $cartItems = $cart->cartItems;

    //     $totalPrice = $cartItems->sum(function ($item) {
    //         return $item->quantity * $item->price;
    //     });

    //     // Create order
    //     $order = Order::create([
    //         'user_id' => $user->id,
    //         'total_price' => $totalPrice,
    //         'shipping_address' => $request->shipping_address,
    //         'billing_address' => $request->billing_address,
    //         'payment_status' => 'pending', // assuming pending status until payment is processed
    //     ]);

    //     // Create order items
    //     foreach ($cartItems as $cartItem) {
    //         OrderItem::create([
    //             'order_id' => $order->id,
    //             'product_id' => $cartItem->product_id,
    //             'quantity' => $cartItem->quantity,
    //             'price' => $cartItem->price,
    //         ]);
    //     }

    //     // Clear the cart after the order is placed
    //     $cart->cartItems()->delete();

    //     return redirect()->route('order.confirmation', ['order_id' => $order->id]);
    // }
    public function placeOrder(Request $request)
    {
        // Step 1: Validate the incoming request
        $validator = Validator::make($request->all(), [
            'delivery_address_id' => 'required|exists:delivery_addresses,id',
            'payment_method'      => 'required|string|in:credit_card,bank_transfer,paypal', // Example payment methods
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Step 2: Start a database transaction
        DB::beginTransaction();
        try {
            // Get user and cart
            $user = auth()->user();
            $cart = $user->cart;

            // Find the selected delivery address
            $address = DeliveryAddress::find($request->delivery_address_id);

            // Calculate the total price of the cart
            $total = $cart->cartItems->sum(function ($item) {
                return $item->price * $item->quantity;
            });

            Log::info('Creating order with address:', [
                'address_id' => $address->id,
                'payment_method' => $request->payment_method,
                'total' => $total,
            ]);

            // Step 3: Create the order
            $order = $user->orders()->create([
                'delivery_address_id' => $address->id,
                'payment_method'      => $request->payment_method,
                'total_price'         => $total,
                'status'              => 'pending',
            ]);

            // Step 4: Store the order items
            foreach ($cart->cartItems as $cartItem) {
                $order->orderItems()->create([
                    'product_id' => $cartItem->product_id,
                    'name'       => $cartItem->product->name,
                    'price'      => $cartItem->product->price,
                    'quantity'   => $cartItem->quantity,
                    'subtotal'   => $cartItem->price * $cartItem->quantity, // Calculate subtotal
                ]);
            }

            // Step 5: Process the payment (e.g., integration with payment gateway)
            // This part depends on how you're integrating the payment gateway.
            // Here's a simple mock for demonstration:
            $paymentDetails = [
                'status' => 'success', // Set payment status based on payment gateway response
                'transaction_id' => 'TXN123456789', // Example transaction ID
                'payment_method' => $request->payment_method,
            ];

            // Assuming you have a Payment model to store payment details:
            $order->payment()->create($paymentDetails);

            // Step 6: Clear the cart and session data
            $cart->cartItems()->delete(); // Clear the cart items
            session()->forget('cart');    // Forget the session cart data

            // Step 7: Commit the transaction
            DB::commit();

            // Step 8: Redirect to the success page with the order ID
            return redirect()->route('order.success', ['order' => $order->id]);
        } catch (\Exception $e) {
            // Rollback the transaction in case of any error
            DB::rollBack();

            Log::error('Order placement failed:', [
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
                'cart_id' => $cart->id,
            ]);

            // Handle the exception (e.g., show an error message to the user)
            return redirect()->route('cart.index')->withErrors('An error occurred while placing your order. Please try again.');
        }
    }

    /**
     * Show the order confirmation.
     */
    public function confirmation($orderId)
    {
        $user = Auth::user();
        $order = $user->orders()->findOrFail($orderId);
        return view('order_confirmation', compact('order'));
    }
    public function success()
    {
        return view('success');  // Adjust to your view
    }
}
