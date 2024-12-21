<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
abstract class Controller
{
  // Show the cart with items
  public function index()
  {
      $user = auth()->user();
      $cart = $user->cart;
      $cartItems = $cart->cartItems;
      $totalPrice = $cartItems->sum(function($item) {
          return $item->price * $item->quantity;
      });

      return view('cart.index', compact('cartItems', 'totalPrice'));
  }

  // Add an item to the cart
  public function add($productId)
  {
      $user = auth()->user();
      $product = Product::findOrFail($productId);
      $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);

      // Check if the product is already in the cart
      $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();
      
      if ($cartItem) {
          $cartItem->quantity++;
          $cartItem->save();
      } else {
          $cart->cartItems()->create([
              'product_id' => $product->id,
              'quantity' => 1,
              'price' => $product->price,
          ]);
      }

      return redirect()->route('cart.index');
  }

  // Remove an item from the cart
  public function remove($cartItemId)
  {
      $cartItem = CartItem::findOrFail($cartItemId);
      $cartItem->delete();

      return redirect()->route('cart.index');
  }

  // Update cart items (quantity change)
  public function update(Request $request)
  {
      $user = auth()->user();
      $cart = $user->cart;

      foreach ($request->cart_items as $cartItemId => $data) {
          $cartItem = CartItem::find($cartItemId);
          $cartItem->update(['quantity' => $data['quantity']]);
      }

      return redirect()->route('cart.index');
  }
}
