@extends('layouts.app')

@section('content')

<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('account') }}">My Account</a></li>
                <li class="active"> Order List</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Order Status </span></h1>
            <div class="row userInfo">
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Your Order Status </h2>
                </div>
                <div class="statusContent">
                    <div class="col-sm-12">
                        <div class=" statusTop">
                            <p><strong>Status:</strong> OnHold</p>
                            <p><strong>Order Date:</strong> Saturday, April 09,2015</p>
                            <p><strong>Order Number:</strong> #6469 </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="order-box">
                            <div class="order-box-header">
                                Billing Address
                            </div>
                            <div class="order-box-content">
                                <div class="address">
                                    <p><strong>TITLE </strong></p>
                                    <p><strong>Ruth F. Burns </strong></p>
                                    <div class="adr">
                                        4894 Burke Street<br>North Billerica, MA 01862
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="order-box">
                            <div class="order-box-header">
                                Shipping Address
                            </div>
                            <div class="order-box-content">
                                <div class="address">
                                    <p><strong>TITLE</strong></p>
                                    <p><strong>Ruth F. Burns </strong></p>
                                    <div class="adr">
                                        4894 Burke Street<br>North Billerica, MA 01862
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                    <div class="col-sm-6">
                        <div class="order-box">
                            <div class="order-box-header">
                                Payment Method
                            </div>
                            <div class="order-box-content">
                                <div class="address">
                                    <p>Payment via Master Card <span style="color: green" class="green">
                                            <strong>(Paid)</strong> </span></p>
                                    <p><strong>Name Of card: </strong> Ruth F. Burns </p>
                                    <p><strong>Card Number: </strong> 00335 251 124 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="order-box">
                            <div class="order-box-header">
                                Shipping Method
                            </div>
                            <div class="order-box-content">
                                <div class="address">
                                    <p> via Post Air Mail <a title="tracking number" href="#">#4502</a></p>
                                    <p><strong>Ruth F. Burns </strong></p>
                                    <div class="adr">
                                        4894 Burke Street<br>North Billerica, MA 01862
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 clearfix">
                        <div class="order-box">
                            <div class="order-box-header">
                                Order Items
                            </div>
                            <div class="order-box-content">
                                <div class="table-responsive">
                                    <table class="order-details-cart">
                                        <tbody>
                                            <tr class="cartProduct">
                                                <td class="cartProductThumb" style="width:20%">
                                                    <div><a href="{{ route('product-details') }}"> <img alt="img"
                                                                src="images/product/3.jpg">
                                                        </a></div>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <h4><a href="{{ route('product-details') }}"> TSHOP Tshirt DO9 </a></h4>
                                                        <span class="size"> 12 x 1.5 L </span>
                                                        <div class="price"><span> $22 </span></div>
                                                    </div>
                                                </td>
                                                <td class="" style="width:10%"><a> X 1 </a></td>
                                                <td class="" style="width:15%"><span> $33 </span></td>
                                            </tr>
                                            <tr class="cartProduct">
                                                <td class="cartProductThumb" style="width:20%">
                                                    <div><a href="{{ route('product-details') }}"> <img alt="img"
                                                                src="images/product/2.jpg">
                                                        </a></div>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <h4><a href="{{ route('product-details') }}"> TShir TSHOP 09 </a></h4>
                                                        <span class="size"> 12 x 1.5 L </span>
                                                        <div class="price"><span> $15 </span></div>
                                                    </div>
                                                </td>
                                                <td class="" style="width:10%"><a> X 1 </a></td>
                                                <td class="" style="width:15%"><span> $120 </span></td>
                                            </tr>
                                            <tr class="cartProduct">
                                                <td class="cartProductThumb" style="width:20%">
                                                    <div><a href="{{ route('product-details') }}"> <img alt="img"
                                                                src="images/product/5.jpg">
                                                        </a></div>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <h4><a href="{{ route('product-details') }}"> Tshir 2014 </a></h4>
                                                        <span class="size"> 12 x 1.5 L </span>
                                                        <div class="price"><span> $30 </span></div>
                                                    </div>
                                                </td>
                                                <td class="" style="width:10%"><a> X 1 </a></td>
                                                <td class="" style="width:15%"><span> $80 </span></td>
                                            </tr>
                                            <tr class="cartProduct">
                                                <td class="cartProductThumb" style="width:20%">
                                                    <div><a href="{{ route('product-details') }}"> <img alt="img"
                                                                src="images/product/3.jpg">
                                                        </a></div>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <h4><a href="{{ route('product-details') }}"> TSHOP T shirt DO20 </a></h4>
                                                        <span class="size"> 12 x 1.5 L </span>
                                                        <div class="price"><span> $15 </span></div>
                                                    </div>
                                                </td>
                                                <td class="miniCartQuantity" style="width:10%"><a> X 1 </a></td>
                                                <td class="miniCartSubtotal" style="width:15%"><span> $55 </span></td>
                                            </tr>
                                            <tr class="cartProduct">
                                                <td class="cartProductThumb" style="width:20%">
                                                    <div><a href="{{ route('product-details') }}"> <img alt="img"
                                                                src="images/product/4.jpg">
                                                        </a></div>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <h4><a href="{{ route('product-details') }}"> T shirt Black </a></h4>
                                                        <span class="size"> 12 x 1.5 L </span>
                                                        <div class="price"><span> $44 </span></div>
                                                    </div>
                                                </td>
                                                <td class="" style="width:10%"><a> X 1 </a></td>
                                                <td class="" style="width:15%"><span> $40 </span></td>
                                            </tr>
                                            <tr class="cartProduct">
                                                <td class="cartProductThumb" style="width:20%">
                                                    <div><a href="{{ route('product-details') }}"> <img alt="img"
                                                                src="images/site/winter.jpg">
                                                        </a></div>
                                                </td>
                                                <td style="width:40%">
                                                    <div class="miniCartDescription">
                                                        <h4><a href="{{ route('product-details') }}"> G Star T shirt </a></h4>
                                                        <span class="size"> 12 x 1.5 L </span>
                                                        <div class="price"><span> $80 </span></div>
                                                    </div>
                                                </td>
                                                <td class="" style="width:10%"><a> X 1 </a></td>
                                                <td class="" style="width:15%"><span> $8.80 </span></td>
                                            </tr>
                                            <tr class="cartTotalTr blank">
                                                <td class="" style="width:20%">
                                                    <div></div>
                                                </td>
                                                <td style="width:40%"></td>
                                                <td class="" style="width:20%"></td>
                                                <td class="" style="width:15%"><span> </span></td>
                                            </tr>
                                            <tr class="cartTotalTr">
                                                <td class="" style="width:20%">
                                                    <div></div>
                                                </td>
                                                <td colspan="2" style="width:40%">Total products</td>
                                                <td class="" style="width:15%"><span> $216.51 </span></td>
                                            </tr>
                                            <tr class="cartTotalTr">
                                                <td class="" style="width:20%">
                                                    <div></div>
                                                </td>
                                                <td colspan="2" style="width:40%">Shipping</td>
                                                <td class="" style="width:15%"><span> $10.51 </span></td>
                                            </tr>
                                            <tr class="cartTotalTr">
                                                <td class="" style="width:20%">
                                                    <div></div>
                                                </td>
                                                <td colspan="2" style="width:40%">Total (tax excl.)</td>
                                                <td class="" style="width:15%"><span> $216.51 </span></td>
                                            </tr>
                                            <tr class="cartTotalTr">
                                                <td class="" style="width:20%">
                                                    <div></div>
                                                </td>
                                                <td style="width:40%"></td>
                                                <td class="" style="width:20%">SubTotal</td>
                                                <td class="" style="width:15%"><span class="price"> $216.51 </span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 clearfix">
                    <ul class="pager">
                        <li class="previous pull-right"><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Go to Shop </a>
                        </li>
                        <li class="next pull-left"><a href="{{ route('account') }}"> ? Back to My Account</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"></div>
    </div>

    <div style="clear:both"></div>
</div>

<div class="gap"></div>
@endsection