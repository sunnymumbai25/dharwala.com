<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller
{
    public function checkoutProcess(Request $request)
    {
        // Validate the request
        $request->validate([
            'delivery_address_id' => 'required|exists:addresses,id',
            'payment_method' => 'required|in:card,cod',
        ]);

        $user = Auth::user();

        // Retrieve the user's cart
        $cart = $user->cart()->with('cartItems')->first();
        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->route('cart.index')->withErrors('Your cart is empty.');
        }

        \DB::beginTransaction();

        try {
            // Create the order
            $order = Order::create([
                'user_id' => $user->id,
                'delivery_address_id' => $request->delivery_address_id,
                'payment_method' => $request->payment_method,
                'total' => $cart->cartItems->sum(fn($item) => $item->quantity * $item->price),
                'status' => 'pending',
            ]);

            // Add items to the order
            foreach ($cart->cartItems as $cartItem) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $cartItem->product_id,
                    'name' => $cartItem->name,
                    'price' => $cartItem->price,
                    'quantity' => $cartItem->quantity,
                    'subtotal' => $cartItem->quantity * $cartItem->price,
                ]);
            }

            // Clear the cart
            $cart->cartItems()->delete();

            \DB::commit();

            return redirect()->route('orders.show', $order->id)->with('success', 'Order placed successfully.');
        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error('Checkout error: ' . $e->getMessage());
            return redirect()->route('cart.index')->withErrors('Something went wrong. Please try again.');
        }
    }
}
