<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display the product details page.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('show', compact('product'));
    }

    /**
     * Add product to cart.
     */
    // public function addToCart(Request $request, $id)
    // {
    //     $product = Product::findOrFail($id);

    //     $cart = Session::get('cart', []);

    //     if (isset($cart[$id])) {
    //         // If product already exists in cart, increase quantity
    //         $cart[$id]['quantity'] += $request->quantity ?? 1;
    //     } else {
    //         // Add product to cart
    //         $cart[$id] = [
    //             'name' => $product->name,
    //             'price' => $product->price,
    //             'quantity' => $request->quantity ?? 1,
    //         ];
    //     }

    //     Session::put('cart', $cart);

    //     return redirect()->route('show', $id)->with('success', 'Product added to cart!');
    // }
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            // If product exists, increment quantity
            $cart[$id]['quantity'] += $request->quantity ?? 1;
        } else {
            // Add new product to cart
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity ?? 1,
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('products.show', $id)->with('success', 'Product added to cart!');
    }
}