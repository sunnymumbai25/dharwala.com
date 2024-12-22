@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shopping Cart</h1>
    @php $cart = session('cart', []); Log::info('Cart contents on cart page:', $cart); @endphp
    @php $cart = session('cart', []); Log::info('Cart contents:', $cart); @endphp
    @if(session('cart') && count(session('cart')) > 0)
    <form action="{{ route('cart.update') }}" method="POST">

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
                                @csrf
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
            <button type="submit" class="btn btn-primary">Update Cart</button>
            </form>
        <div class="mt-3">
            <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Remove item from cart using AJAX
        $('.remove-item').on('click', function () {
            var itemId = $(this).data('id'); // Get the item ID from the data attribute

            if (confirm('Are you sure you want to remove this item from your cart?')) {
                $.ajax({
                    url: '{{ route('cart.remove', '') }}/' + itemId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.success) {
                            // Remove the item row from the table
                            //  $('#cart-item-' + itemId).remove();
                            location.reload();
                            alert(response.message); // Show success message
                        } else {
                            alert('Error removing item.');
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            }
        });
    });
</script>
@endsection
