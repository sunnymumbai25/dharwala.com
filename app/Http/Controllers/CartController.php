<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                    'id' => $item->id, // Include the ID of the cart item
                    'product_id' => $item->product_id,
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
        // $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);

        // $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();

        // if ($cartItem) {
        //     // If the product is already in the cart, update the quantity
        //     $cartItem->quantity += 1;
        //     $cartItem->save();
        // } else {
        //     // If the product is not in the cart, add a new cart item
        //     CartItem::create([
        //         'cart_id' => $cart->id,
        //         'product_id' => $product->id,
        //         'quantity' => 1,
        //         'price' => $product->price,
        //     ]);
        // }

        // return redirect()->route('cart.index');
        // $user = Auth::user();
        // $product = Product::findOrFail($productId);
        // $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
        // // dd($cart);
        // $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();
        // // dd($cartItem);
        // if ($cartItem) {
        //     $cartItem->quantity += 1;
        //     $cartItem->save();
        // } else {
        //     CartItem::create([
        //         'cart_id' => $cart->id,
        //         'product_id' => $product->id,
        //         'quantity' => 1,
        //         'price' => $product->price, // Save the product's price at the time of adding it to the cart
        //     ]);
        // }
        
        $cart = session()->get('cart', []);
   // Debug before updating

        // return redirect()->route('cart.index');
        $user = Auth::user();
        $product = Product::findOrFail($productId);
    
        // Get or create the user's cart
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    
        // Check if the product is already in the cart
        $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();
    
        if ($cartItem) {
            // If the product is already in the cart, update the quantity
            $cartItem->quantity += $request->input('quantity', 1);
            $cartItem->save();
        } else {
            // If the product is not in the cart, add it
            $cart->cartItems()->create([
                'product_id' => $product->id,
                'quantity' => $request->input('quantity', 1),
                'price' => $product->price,
            ]);
        }
        session()->put('cart', $cart);
    //    echo print_r(session('cart')) ;exit;
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    
    }

    /**
     * Update cart items.
     */
    public function update(Request $request)
    {
        
        $user = Auth::user();
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    
        foreach ($request->cart_items as $itemId => $data) {
            // Log the incoming data for debugging
            \Log::debug('Updating cart item with ID:', [$itemId, $data]);
    
            // Try to find the cart item by its ID
            $cartItem = $cart->cartItems()->where('id', $itemId)->first();
    
            if ($cartItem) {
                $cartItem->quantity = $data['quantity'];  // Update quantity
                $cartItem->save();
                \Log::info('Cart item updated:', [$cartItem]);
            } else {
                \Log::error('Cart item not found with ID: ' . $itemId);
            }
        }
        return redirect()->route('cart.index');
    

        $user = Auth::user();
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    dd($request->cart_items);
        // Validate that cart_items is an array and that each quantity is an integer
        $request->validate([
            'cart_items' => 'required|array',
            'cart_items.*.quantity' => 'required|integer|min:1',
        ]);
      
        // Loop through cart items and update their quantities
        foreach ($request->cart_items as $itemId => $data) {
            $cartItem = $cart->cartItems()->find($itemId);
            if ($cartItem) {
                // Update the quantity
                $cartItem->quantity = $data['quantity'];
                $cartItem->save();
            }
        }
    
        // Update session cart after modifying the database
        $this->updateCartSession();
    
        // Redirect back to the cart index
        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }
    
    private function updateCartSession()
    {
        // Ensure the session is up-to-date after cart modification
        $cart = auth()->user()->cart()->with('cartItems.product')->first();
        if ($cart) {
            $cartItems = $cart->cartItems->map(function ($item) {
                return [
                    'id' => $item->product->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->quantity * $item->product->price,
                ];
            })->toArray();
    
            session(['cart' => $cartItems]);
        } else {
            session()->forget('cart');
        }
    }
    
    
    
    // /**
    //  * Remove an item from the cart.
    //  */
    // public function remove($id)
    // {
    //     $user = Auth::user();
    //     $cart = $user->cart()->first();
    //     // \Log::debug("Cart Items: ", $cart->cartItems->toArray());
    //     $user = Auth::user();
    //     $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    
    //     $cartItem = $cart->cartItems()->where('id', $id)->first();
    
    //     if (!$cartItem) {
    //         return redirect()->route('cart.index')->withErrors('Cart item not found.');
    //     }
    
    //     $cartItem->delete();
    
    //     return redirect()->route('cart.index')->with('success', 'Item removed successfully');
    
    // }

    /**
 * Remove an item from the cart.
 */
public function remove($id)
{
    $user = Auth::user();
    $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);

    // Find the cart item to remove
    $cartItem = $cart->cartItems()->where('id', $id)->first();

    if (!$cartItem) {
        // Return error response if item not found
        return response()->json(['success' => false, 'message' => 'Cart item not found.'], 404);
    }

    // Delete the cart item
    $cartItem->delete();

    // Return success response
    return response()->json(['success' => true, 'message' => 'Item removed successfully.']);
}

    
}
