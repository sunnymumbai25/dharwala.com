{{-- resources/views/cart.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Cart</h2>

    @if($cartItems->isEmpty())
        <p>Your cart is empty!</p>
    @else
        <form action="{{ route('cart.update') }}" method="POST">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $cartItem)
                        <tr>
                            <td>{{ $cartItem->product->name }}</td>
                            <td>
                                <input type="number" name="cart_items[{{ $cartItem->id }}][quantity]" value="{{ $cartItem->quantity }}" min="1">
                            </td>
                            <td>{{ $cartItem->price }}</td>
                            <td>{{ $cartItem->quantity * $cartItem->price }}</td>
                            <td>
                                <a href="{{ route('cart.remove', $cartItem->id) }}" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Update Cart</button>
        </form>

        <div class="mt-3">
            <strong>Total Price: {{ $totalPrice }}</strong>
        </div>

        <a href="{{ route('checkout') }}" class="btn btn-success mt-3">Proceed to Checkout</a>
    @endif
</div>
@endsection
