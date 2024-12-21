<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;  // Ensure the Product model is imported
use App\Models\Cart;  // Ensure the Product model is imported

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id', 
        'product_id', 
        'quantity', 
        'price', // Price at the time of adding to the cart
    ];

    /**
     * Relationship: A cart item belongs to a cart.
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Relationship: A cart item belongs to a product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
