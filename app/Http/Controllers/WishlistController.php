namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Show the user's wishlist.
     */
    public function index()
    {
        $user = Auth::user();
        $wishlistItems = $user->wishlist()->first()->wishlistItems()->with('product')->get();
        return view('wishlist.index', compact('wishlistItems'));
    }

    /**
     * Add a product to the wishlist.
     */
    public function add($productId)
    {
        $user = Auth::user();
        $product = Product::findOrFail($productId);
        $wishlist = $user->wishlist()->firstOrCreate(['user_id' => $user->id]);

        $wishlist->wishlistItems()->firstOrCreate([
            'product_id' => $product->id,
        ]);

        return redirect()->route('wishlist.index');
    }

    /**
     * Remove a product from the wishlist.
     */
    public function remove($id)
    {
        $user = Auth::user();
        $wishlist = $user->wishlist()->firstOrCreate(['user_id' => $user->id]);
        $wishlistItem = $wishlist->wishlistItems()->findOrFail($id);
        $wishlistItem->delete();

        return redirect()->route('wishlist.index');
    }

    /**
     * Move a product from wishlist to cart.
     */
    public function moveToCart($id)
    {
        $user = Auth::user();
        $wishlist = $user->wishlist()->firstOrCreate(['user_id' => $user->id]);
        $wishlistItem = $wishlist->wishlistItems()->findOrFail($id);
        $product = $wishlistItem->product;

        // Move to cart
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
        $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            $cart->cartItems()->create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price,
            ]);
        }

        // Remove from wishlist
        $wishlistItem->delete();

        return redirect()->route('cart.index');
    }
}
