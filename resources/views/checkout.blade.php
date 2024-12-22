@extends('layouts.app')

@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
              
                <li><a href="category.html">Category</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Checkout </span>
            </h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
            <h4 class="caps"><a href="category.html"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
        </div>
    </div>

    <div class="row">



        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    <div class="w100 clearfix">
                        <ul class="orderStep orderStepLook2">
                            <li><a href="{{ route('checkout-1') }}">
                                    <i class="fa fa-map-marker "></i>
                                    <span> address</span>
                                </a></li>
                            <li><a href="{{ route('checkout-2') }}.html"> <i class="fa fa fa-envelope  "></i>
                                    <span> Billing </span></a></li>
                            <li><a href="{{ route('checkout-3') }}"><i class="fa fa-truck "> </i><span>Shipping</span> </a>
                            </li>
                            <li><a href="{{ route('checkout-4') }}"><i class="fa fa-money  "> </i><span>Payment</span> </a>
                            </li>
                            <li class="active"><a href="{{ route('checkout-5') }}"><i class="fa fa-check-square ">
                                    </i><span>Order</span></a></li>
                        </ul>

                    </div>
                    <div class="w100 clearfix">
                        <div class="row userInfo">
                            <div class="col-lg-12">
                                <h2 class="block-title-2"> Review Order </h2>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="cartContent w100 checkoutReview ">
                                    <table style="width:100%" class="cartTable table-responsive">
                                        <tbody>
                                            <tr class="CartProduct cartTableHeader">
                                                <th style="width:15%"> Product</th>
                                                <th class="checkoutReviewTdDetails">Details</th>
                                                <th style="width:10%">Unit Price</th>
                                                <th style="width:5%" class="hidden-xs">QNT</th>
                                                <th style="width:10%" class="hidden-xs">Discount</th>
                                                <th style="width:15%">Total</th>
                                            </tr>
                                            <tr class="CartProduct">
                                                <td class="CartProductThumb">
                                                    <div><a href="{{ route('product-details') }}"><img
                                                                src="images/product/3.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="CartDescription">
                                                        <h4><a href="{{ route('product-details') }}">Denim T shirt Black </a>
                                                        </h4>
                                                        <span class="size">12 x 1.5 L</span>
                                                    </div>
                                                </td>
                                                <td class="delete">
                                                    <div class="price ">$116.51</div>
                                                </td>
                                                <td class="hidden-xs">1</td>
                                                <td class="hidden-xs">0</td>
                                                <td class="price">$116.51</td>
                                            </tr>
                                            <tr class="CartProduct">
                                                <td class="CartProductThumb">
                                                    <div><a href="{{ route('product-details') }}"><img
                                                                src="images/product/2.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="CartDescription">
                                                        <h4><a href="{{ route('product-details') }}">Denim T shirt </a></h4>
                                                        <span class="size">12 x 1.5 L</span>
                                                    </div>
                                                </td>
                                                <td class="delete">
                                                    <div class="price ">$50</div>
                                                </td>
                                                <td class="hidden-xs">1</td>
                                                <td class="hidden-xs">0</td>
                                                <td class="price">$50</td>
                                            </tr>
                                            <tr class="CartProduct">
                                                <td class="CartProductThumb">
                                                    <div><a href="{{ route('product-details') }}"><img
                                                                src="images/product/5.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="CartDescription">
                                                        <h4><a href="{{ route('product-details') }}">Denim T shirt Red </a>
                                                        </h4>
                                                        <span class="size">12 x 1.5 L</span>
                                                    </div>
                                                </td>
                                                <td class="delete">
                                                    <div class="price ">$50</div>
                                                </td>
                                                <td class="hidden-xs">1</td>
                                                <td class="hidden-xs">0</td>
                                                <td class="price">$50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="w100 costDetails">
                                    <div id="order-detail-content" class="table-block">
                                        <table id="cart-summary" class="std table">
                                            <tbody>
                                                <tr>
                                                    <td>Total products</td>
                                                    <td class="price">$216.51</td>
                                                </tr>
                                                <tr style="">
                                                    <td>Shipping</td>
                                                    <td class="price"><span class="success">Free shipping!</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-total-price ">
                                                    <td>Total (tax excl.)</td>
                                                    <td class="price">$216.51</td>
                                                </tr>
                                                <tr>
                                                    <td>Total tax</td>
                                                    <td class="price" id="total-tax">0.00</td>
                                                </tr>
                                                <tr>
                                                    <td> Total</td>
                                                    <td class="price" id="total-price">$216.51</td>
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

                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-left"><a href="{{ route('checkout-4') }}" class="btn btn-default">
                                    <i class="fa fa-arrow-left"></i> &nbsp; Payment method </a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary btn-small " href="thanks-for-order.html">
                                    Confirm Order &nbsp; <i class="fa fa-check"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <div class="contentBox">
                <div class="w100 costDetails">
                    <div id="order-detail-content" class="table-block">
                        <div class="w100 cartMiniTable">
                            <table class="std table" id="cart-summary">
                                <tbody>
                                    <tr>
                                        <td>Total products</td>
                                        <td class="price">$216.51</td>
                                    </tr>
                                    <tr style="">
                                        <td>Shipping</td>
                                        <td class="price"><span class="success">Free shipping!</span></td>
                                    </tr>
                                    <tr class="cart-total-price ">
                                        <td>Total (tax excl.)</td>
                                        <td class="price">$216.51</td>
                                    </tr>
                                    <tr>
                                        <td>Total tax</td>
                                        <td id="total-tax" class="price">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td> Total</td>
                                        <td id="total-price" class=" site-color">$216.51</td>
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
@endsection