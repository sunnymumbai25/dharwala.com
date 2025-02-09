@extends('layouts.app')

@section('content')
@php $cart = session('cart', []); Log::info('Cart contents on cart page:', $cart); @endphp

<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="category.html">MEN COLLECTION</a></li>
                <li><a href="sub-category.html">TSHIRT</a></li>
                <li class="active">Lorem ipsum dolor sit amet</li>
            </ul>
        </div>
    </div>
    <div class="row transitionfx">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="main-image sp-wrap col-lg-12 no-padding">
                <a href="images/product_details/hi-res-croped/1.jpg"><img src="images/product_details/low-res-white/1.jpg" class="img-responsive" alt="img"></a>
                <a href="images/product_details/hi-res-croped/2.jpg"><img src="images/product_details/low-res-white/2.jpg" class="img-responsive" alt="img"></a>
                <a href="images/product_details/hi-res-croped/3.jpg"><img src="images/product_details/low-res-white/3.jpg" class="img-responsive" alt="img"></a>
            </div>
        </div>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-5">
                <h1 class="product-title"> {{ $product->name }}</h2>
                    <h3 class="product-code">Product Code : DEN1098</h3>
                    <div class="rating">
                        <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star-o "></i></span> <span class="ratingInfo"> <span> / </span> <a data-target="#modal-review" data-toggle="modal"> Write a review</a> </span></p>
                    </div>
                    <div class="product-price"><span class="price-sales"> ${{ number_format($product->price, 2) }}</span> <span class="price-standard">$95</span>
                    </div>
                    <div class="details-description">
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="color-details"><span class="selected-color"><strong>COLOR</strong></span>
                        <ul class="swatches Color">
                            <li class="selected"><a style="background-color:#f1f40e"> </a></li>
                            <li><a style="background-color:#adadad"> </a></li>
                            <li><a style="background-color:#4EC67F"> </a></li>
                        </ul>
                    </div>

                    <div class="productFilter productFilterLook2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="filterBox">
                                    <select class="form-control" name="quantity" id="quantity">
                                        <option value="" selected>Quantity</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="filterBox">
                                    <select class="form-control">
                                        <option value="strawberries" selected>Size</option>
                                        <option value="mango">XL</option>
                                        <option value="bananas">XXL</option>
                                        <option value="watermelon">M</option>
                                        <option value="apples">L</option>
                                        <option value="apples">S</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-actions">
                        <div class="addto row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="button btn-block btn-cart cart first" title="Add to Cart" type="button">Add
                                    to Cart
                                </button>
                                <!-- <button type="submit" class="btn btn-primary mt-3">Add to Cart</button> -->

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a class="link-wishlist wishlist btn-block ">Add
                                    to Wishlist</a></div>
                        </div>
                        <div style="clear:both"></div>
                        <h3 class="incaps"><i class="fa fa fa-check-circle-o color-in"></i> In stock</h3>
                        <h3 style="display:none" class="incaps"><i class="fa fa-minus-circle color-out"></i> Out of stock
                        </h3>
                        <h3 class="incaps"><i class="glyphicon glyphicon-lock"></i> Secure online ordering</h3>
                    </div>

                    <div class="clear"></div>
                    <div class="product-tab w100 clearfix">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#size" data-toggle="tab">Size</a></li>
                            <li><a href="#shipping" data-toggle="tab">Shipping</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="details">Sed ut eros felis. Vestibulum rutrum imperdiet nunc a
                                interdum. In scelerisque libero ut elit porttitor commodo. Suspendisse laoreet magna nec
                                urna
                                fringilla viverra.<br>
                                100% Cotton<br>
                            </div>
                            <div class="tab-pane" id="size"> 16" waist<br>
                                34" inseam<br>
                                10.5" front rise<br>
                                8.5" knee<br>
                                7.5" leg opening<br>
                                <br>
                                Measurements taken from size 30<br>
                                Model wears size 31. Model is 6'2 <br>
                                <br>
                            </div>
                            <div class="tab-pane" id="shipping">
                                <table>
                                    <colgroup>
                                        <col style="width:33%">
                                        <col style="width:33%">
                                        <col style="width:33%">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>Standard</td>
                                            <td>1-5 business days</td>
                                            <td>$7.95</td>
                                        </tr>
                                        <tr>
                                            <td>Two Day</td>
                                            <td>2 business days</td>
                                            <td>$15</td>
                                        </tr>
                                        <tr>
                                            <td>Next Day</td>
                                            <td>1 business day</td>
                                            <td>$30</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">* Free on orders of $50 or more</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div style="clear:both"></div>
                    <div class="product-share clearfix">
                        <p> SHARE </p>
                        <div class="socialIcon"><a href="#"> <i class="fa fa-facebook"></i></a> <a href="#"> <i class="fa fa-twitter"></i></a> <a href="#"> <i class="fa fa-google-plus"></i></a> <a href="#">
                                <i class="fa fa-pinterest"></i></a></div>
                    </div>

            </div>
        </form>
    </div>

    <div class="row recommended">
        <h1> YOU MAY ALSO LIKE </h1>
        <div id="SimilarProductSlider">
            @foreach($you_may_also_like as $id => $details)
            <div class="item">
                <div class="product"><a class="product-image"> <img src="images/product/a1.jpg" alt="img"> </a>
                    <div class="description">
                        <h4><a href="san-remo-spaghetti">{{@$details->name}}</a></h4>
                        <div class="price"><span>${{@$details->price}}</span></div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    <div style="clear:both"></div>
</div>
@endsection