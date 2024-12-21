@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shopping Cart</h1>
    @php $cart = session('cart', []); Log::info('Cart contents on cart page:', $cart); @endphp
    @php $cart = session('cart', []); Log::info('Cart contents:', $cart); @endphp
    @if(session('cart') && count(session('cart')) > 0)
        <form action="{{ route('cart.update') }}" method="POST">
            @csrf
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach(session('cart') as $id => $details)
                        @php
                            $name = $details['name'] ?? 'Unnamed Product';
                            $price = $details['price'] ?? 0.00;
                            $quantity = $details['quantity'] ?? 1;
                            $subtotal = $price * $quantity;
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>{{ $name }}</td>
                            <td>${{ number_format($price, 2) }}</td>
                            <td>
                            <input type="hidden" name="cart_items[{{ $id }}][id]" value="{{ $id }}">
                                <input type="number" name="cart_items[{{ $id }}][quantity]" value="{{ $quantity }}" min="1" class="form-control" style="width: 60px;">
                                <input type="hidden" name="cart_items[{{ $id }}][product_id]" value="{{ $id }}">
                                <input type="hidden" name="cart_items[{{ $id }}][price]" value="{{ $price }}">
                                <input type="hidden" name="cart_items[{{ $id }}][name]" value="{{ $name }}">
                            </td>
                            <td>${{ number_format($subtotal, 2) }}</td>
                            <!-- <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h3>Total: ${{ number_format($total, 2) }}</h3>
            <button type="submit" class="btn btn-primary">Update Cart</button>
        </form>

        <div class="mt-3">
            <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>

@endsection
