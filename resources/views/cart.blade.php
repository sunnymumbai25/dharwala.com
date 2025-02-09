@extends('layouts.app')

@section('content')
<div class="container  main-container headerOffset">

    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="category.html">Category</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart </span></h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
            <h4 class="caps"><a href="category.html"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                <form action="{{ route('cart.update') }}" method="POST">
                    <div class="cartContent w100">
                            @php $cart = session('cart', []); Log::info('Cart contents on cart page:', $cart); @endphp
                            @php $cart = session('cart', []); Log::info('Cart contents:', $cart); @endphp
                            <table style="width:100%" class="cartTable table-responsive">
                                <tbody>
                                    <tr class="CartProduct cartTableHeader">
                                        <td style="width:15%"> Product</td>
                                        <td style="width:40%">Details</td>
                                        <td class="delete" style="width:10%">&nbsp;</td>
                                        <td style="width:10%">QNT</td>
                                        <td style="width:10%"></td>
                                        <!-- <td style="width:10%">Discount</td> -->
                                        <td style="width:15%">Total</td>
                                    </tr>
                                    @if(session('cart') && count(session('cart')) > 0)
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
                                    <tr class="CartProduct" id="cart-item-{{ $details['id'] }}">
                                        <td class="CartProductThumb">
                                            @csrf
                                            <input type="hidden" name="cart_items[{{ $details['id'] }}][id]" value="{{ $id }}">                                            
                                            <input type="hidden" name="cart_items[{{ $details['id'] }}][product_id]" value="{{ $id }}">
                                            <input type="hidden" name="cart_items[{{ $details['id'] }}][price]" value="{{ $price }}">
                                            <input type="hidden" name="cart_items[{{ $details['id'] }}][name]" value="{{ $name }}">
                                            <div><a href="product-details.html"><img alt="img" src="images/product/a1.jpg"></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="CartDescription">
                                                <h4><a href="product-details.html">{{ $name }}</a></h4>
                                                <span class="size">12 x 1.5 L</span>
                                                <div class="price"><span>${{ number_format($price, 2) }}</span></div>
                                            </div>
                                        </td>
                                        <td class="delete">
                                            <a title="Delete">
                                                <i class="glyphicon glyphicon-trash fa-2x"></i>
                                                <button type="button" class=" btn btn-danger btn-sm remove-item" data-id="{{ $details['id'] }}">Remove</button>
                                            </a>
                                        </td>
                                        <td><input type="number" name="cart_items[{{ $details['id'] }}][quantity]" value="{{ $quantity }}" min="1" class="form-control" style="width: 60px;" id="quantity"></td>
                                        <td>
                                            <div class="input-group bootstrap-touchspin">
                                                <span class="input-group-btns">
                                                    <button type="button" class="btn btn-link bootstrap-touchspin-down" id="decrement">-</button>
                                                </span>
                                                <!-- <span class="input-group-addon bootstrap-touchspin-prefix"></span> -->
                                                <input type="text" name="quanitySniper" value="2" class="quanitySniper form-control">
                                                <!-- <span class="input-group-addon bootstrap-touchspin-postfix"></span> -->
                                                <span class="input-group-btns">
                                                    <button type="button" class="btn btn-link bootstrap-touchspin-up" id="increment">+</button>
                                                </span>
                                            </div>
                                        </td>
                                        <!-- <td>0</td> -->
                                        <td class="price">${{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>Your cart is empty.</tr>
                                    @endif
                                </tbody>
                            </table>
                            <!-- <button type="submit" class="btn btn-primary">Update Cart</button> -->
                       
                        <div class="mt-3">
                            <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
                        </div>
                    </div>

                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-left"><a class="btn btn-default" href="index.html"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit"><i class="fa fa-undo"></i> &nbsp; Update
                                    cart
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <div class="contentBox">
                <div class="w100 costDetails">
                    <div id="order-detail-content" class="table-block"><a style="margin-bottom:20px" href="checkout-0.html" title="checkout" class="btn btn-primary btn-lg btn-block "> Proceed to
                            checkout &nbsp; <i class="fa fa-arrow-right"></i> </a>
                        <div class="w100 cartMiniTable">
                            <table class="std table" id="cart-summary">
                                <tbody>
                                    <tr>
                                        <td>Total products</td>
                                        <td class="price">{{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                    <tr style="">
                                        <td>Shipping</td>
                                        <td class="price"><span class="success">Free shipping!</span></td>
                                    </tr>
                                    <tr class="cart-total-price ">
                                        <td>Total (tax excl.)</td>
                                        <td class="price">{{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total tax</td>
                                        <td id="total-tax" class="price">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td> Total</td>
                                        <td id="total-price" class=" site-color">{{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="input-append couponForm">
                                                <input type="text" placeholder="Coupon code" id="appendedInputButton" class="col-lg-8">
                                                <button type="button" class="col-lg-4 btn btn-success">Apply!</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div style="clear:both"></div>
</div>

<div class="gap"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        let stock = 10; // Set stock limit here
        $("#increment").click(function(){
            let currentValue = parseInt($("#quantity").val());
            if (currentValue < stock) {
                $("#quantity").val(currentValue + 1);
            }
        });

        $("#decrement").click(function(){
            let currentValue = parseInt($("#quantity").val());
            if (currentValue > 1) {
                $("#quantity").val(currentValue - 1);
            }
        });

        // Prevent manual input beyond min/max limits
        $("#quantity").on("input", function(){
            let value = parseInt($(this).val());
            if (value < 1) {
                $(this).val(1);
            } else if (value > stock) {
                $(this).val(stock);
            }
        });

        // Remove item from cart using AJAX
        $('.remove-item').on('click', function() {
            var itemId = $(this).data('id'); // Get the item ID from the data attribute
            if (confirm('Are you sure you want to remove this item from your cart?')) {
                $.ajax({
                    url: '{{ route('cart.remove', '') }}/' + itemId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the item row from the table
                            //  $('#cart-item-' + itemId).remove();
                            location.reload();
                            alert(response.message); // Show success message
                        } else {
                            alert('Error removing item.');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            }
        });
    });
</script>
@endsection