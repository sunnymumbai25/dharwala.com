<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class CartController extends Controller
{
    /**
     * Show the user's cart.
     */
    public function index()
    {
        $cart = Cart::with('cartItems.product')->where('user_id', auth()->id())->first();

        if ($cart) {
            // Convert cart items to an array for session
            $cartItems = $cart->cartItems->map(function ($item) {
                return [
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->quantity * $item->product->price,
                ];
            })->toArray();
    
            // Store cart items in session
            session(['cart' => $cartItems]);
        } else {
            // Clear session if no cart exists
            session()->forget('cart');
        }
    
        // return view('cart.index');
        return view('cart');

    }

    /**
     * Add a product to the cart.addToCart(Request $request, $productId)
     */
    public function addProductToCart(Request $request, $productId)
    {

        // $user = Auth::user();
        // $product = Product::findOrFail($productId);
    
        // // Get the current cart from the session, or initialize an empty array
        // $cart = session()->get('cart', []);
    
        // // Check if the product is already in the cart
        // if (isset($cart[$productId])) {
        //     // If the product is already in the cart, update the quantity
        //     $cart[$productId]['quantity'] += $request->input('quantity', 1);
        // } else {
        //     // If the product is not in the cart, add it
        //     $cart[$productId] = [
        //         'name' => $product->name,
        //         'price' => $product->price,
        //         'quantity' => $request->input('quantity', 1),
        //         'subtotal' => $product->price * $request->input('quantity', 1),
        //     ];
        // }
    
        // // Recalculate the subtotal for all products in the cart
        // foreach ($cart as $key => $item) {
        //     $cart[$key]['subtotal'] = $item['price'] * $item['quantity'];
        // }
    
        // // Save the updated cart to the session
        // session()->put('cart', $cart);
    
        // // Redirect back to the cart page with a success message
        // return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
        $user = Auth::user();
        \Log::debug(session('cart'));  // Logs the entire cart content

        $product = Product::findOrFail($productId);
        Log::info('Adding product to cart:', ['user' => $user->id, 'product' => $productId]);
        // Get the current cart from the session, or initialize an empty array
        $cart = session()->get('cart', []);
        Log::info('Cart before adding product:', $cart);
                // Check if the product is already in the cart
        if (isset($cart[$productId])) {
            // If the product is already in the cart, update the quantity
            $cart[$productId]['quantity'] += $request->input('quantity', 1);
        } else {
            // If the product is not in the cart, add it
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->input('quantity', 1),
                'subtotal' => $product->price * $request->input('quantity', 1),
            ];
        }
    
        // Recalculate the subtotal for all products in the cart
        foreach ($cart as $key => $item) {
            $cart[$key]['subtotal'] = $item['price'] * $item['quantity'];
        }
    
        // Save the updated cart to the session
        session()->put('cart', $cart);
    
        Log::info('Product added to cart:', ['cart' => $cart]);
    
        // Redirect back to the cart page with a success message
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }
    

    /**
     * Update cart items.
     */
    public function update(Request $request)
{
    $user = Auth::user();
    
    // Get the user's cart
    $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    
    // Validate that cart_items is an array and that each quantity is an integer
    $request->validate([
        'cart_items' => 'required|array',
        'cart_items.*.quantity' => 'required|integer|min:1',
    ]);
    
    // Check if the request has cart_items and if they are structured as expected
    if ($request->has('cart_items') && is_array($request->cart_items)) {
        
        // Debugging: check the structure of cart_items
      //  \Log::debug('Cart items from request:', $request->cart_items);
        
        foreach ($request->cart_items as $itemId => $data) {
            // Debugging: check what itemId and data contain
           // \Log::debug("Item ID: $itemId", $data);
            
            // Fetch the cart item by its ID (make sure it's the correct ID)
            $cartItem = $cart->cartItems()->find($itemId);
            
            if ($cartItem) {
                // Update the cart item quantity
                $cartItem->quantity = $data['quantity'];
                $cartItem->save();
            } else {
           //     \Log::warning("Cart item not found for ID: $itemId");
            }
        }
    }

    // Update the session cart after the database cart is modified
    $this->updateCartSession();

    // Return with success message
    return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
}

    
    

    /**
     * Remove an item from the cart.
     */
    public function remove($id)
{
    $user = Auth::user();
    $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    $cartItem = $cart->cartItems()->findOrFail($id);
    $cartItem->delete();

    // Update the session after removing the cart item
    $this->updateCartSession();

    return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
}

private function updateCartSession()
{
    $cart = Cart::with('cartItems.product')->where('user_id', auth()->id())->first();

    if ($cart) {
        // Transform cart items into an array for session
        $cartItems = $cart->cartItems->map(function ($item) {
            return [
                'id' => $item->id,  // Use cart item ID here
                'product_id' => $item->product->id,
                'name' => $item->product->name,
                'price' => $item->product->price,
                'quantity' => $item->quantity,
                'subtotal' => $item->quantity * $item->product->price,
            ];
        })->toArray();

        // Store the structured cart items array in the session
        session(['cart' => $cartItems]);
    } else {
        // Clear the session if no cart exists
        session()->forget('cart');
    }
}



}
