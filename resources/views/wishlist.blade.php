{{-- resources/views/wishlist.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Wishlist</h2>

    @if($wishlistItems->isEmpty())
        <p>Your wishlist is empty!</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wishlistItems as $wishlistItem)
                    <tr>
                        <td>{{ $wishlistItem->product->name }}</td>
                        <td>
                            <a href="{{ route('wishlist.remove', $wishlistItem->id) }}" class="btn btn-danger">Remove</a>
                            <a href="{{ route('cart.add', $wishlistItem->product_id) }}" class="btn btn-primary">Add to Cart</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
