<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function placeOrder(Request $request)
    {
        $user = Auth::user();
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
        $cartItems = $cart->cartItems;

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });

        // Create order
        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $totalPrice,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
            'payment_status' => 'pending', // assuming pending status until payment is processed
        ]);

        // Create order items
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price,
            ]);
        }

        // Clear the cart after the order is placed
        $cart->cartItems()->delete();

        return redirect()->route('order.confirmation', ['order_id' => $order->id]);
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
}
