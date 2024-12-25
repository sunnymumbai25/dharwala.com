@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('order.place') }}" method="POST">
@csrf
    <h3>Select a Delivery Address</h3>
    <!-- <form action=" route('checkout.confirm') }}" method="POST">
    @csrf -->
    <div class="card mb-3">
        @foreach($addresses as $address)
        <div class="card-body">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="delivery_address_id"
                    id="address_{{ $address->id }}"
                    value="{{ $address->id }}"
                    required>
                <label class="form-check-label">
                    <strong>{{ $address->name }}</strong><br>
                    {{ $address->address_line_1 }}<br>
                    @if($address->address_line_2)
                    {{ $address->address_line_2 }}<br>
                    @endif
                    {{ $address->city }}, {{ $address->state }}<br>
                    {{ $address->postal_code }}, {{ $address->country }}<br>
                    <strong>Phone:</strong> {{ $address->phone }}
                </label>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
    <!-- <button type="submit" class="btn btn-primary">Confirm Address</button> -->
    <a href="{{ route('add-address') }}" class="btn btn-secondary">Add New Address</a>
    <!-- </form> -->
    <div class="container">
        <h1> Payment</h1>
        <h3>Order Summary</h3></h1>
        @php $cart = session('cart', []); Log::info('Cart contents on cart page:', $cart); @endphp
        @php $cart = session('cart', []); Log::info('Cart contents:', $cart); @endphp
        @if(session('cart') && count(session('cart')) > 0)
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
                    ++$id;
                    $name = $details['name'] ?? 'Unnamed Product';
                    $price = $details['price'] ?? 0.00;
                    $quantity = $details['quantity'] ?? 1;
                    $subtotal = $price * $quantity;
                    $total += $subtotal;
                    @endphp
                    <tr id="cart-item-{{ $details['id'] }}">
                        <td>{{ $name }}</td>
                        <td>${{ number_format($price, 2) }}</td>
                        <td>
                            <!-- @csrf -->
                            <input type="hidden" name="cart_items[{{ $details['id'] }}][id]" value="{{ $id }}">
                            <input type="number" name="cart_items[{{ $details['id'] }}][quantity]" value="{{ $quantity }}" min="1" class="form-control" style="width: 60px;">
                            <input type="hidden" name="cart_items[{{ $details['id'] }}][product_id]" value="{{ $id }}">
                            <input type="hidden" name="cart_items[{{ $details['id'] }}][price]" value="{{ $price }}">
                            <input type="hidden" name="cart_items[{{ $details['id'] }}][name]" value="{{ $name }}">
                        </td>
                        <td>${{ number_format($subtotal, 2) }}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm remove-item" data-id="{{ $details['id'] }}">Remove</button>

                            <!-- <form action="{{ route('cart.remove', $details['id']) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Remove.</button>
                                </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h3>Total: ${{ number_format($total, 2) }}</h3>
        <!-- <div class="mt-3">
            <a href="{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
        </div> -->
        @endif
        <h3>Choose Payment Method</h3>
        <div class="form-group">
            <input type="radio" name="payment_method" value="credit_card" required> Credit Card<br>
            <input type="radio" name="payment_method" value="paypal"> PayPal<br>
            <input type="radio" name="payment_method" value="cod"> Cash on Delivery
        </div>

        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
    </div>
   
</div>
        
        
@endsection