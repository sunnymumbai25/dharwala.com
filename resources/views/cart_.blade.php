@extends('layouts.app')

@section('content')
    <div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="category.html">Category</a></li>
                    <li class="active">Cart</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
                <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart
                    </span></h1>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
                <h4 class="caps"><a href="category.html"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="row userInfo">
                    <div class="col-xs-12 col-sm-12">
                        <div class="cartContent w100">
                            <table style="width:100%" class="cartTable table-responsive">
                                <tbody>
                                    <tr class="CartProduct cartTableHeader">
                                        <td style="width:15%"> Product</td>
                                        <td style="width:40%">Details</td>
                                        <td class="delete" style="width:10%">&nbsp;</td>
                                        <td style="width:10%">QNT</td>
                                        <td style="width:10%">Discount</td>
                                        <td style="width:15%">Total</td>
                                    </tr>
                                    <tr class="CartProduct">
                                        <td class="CartProductThumb">
                                            <div><a href="{{ route('product-details') }}"><img alt="img"
                                                        src="{{ asset('images/product/a1.jpg') }}"></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="CartDescription">
                                                <h4><a href="{{ route('product-details') }}">Denim T shirt Black </a></h4>
                                                <span class="size">12 x 1.5 L</span>
                                                <div class="price"><span>$8.80</span></div>
                                            </div>
                                        </td>
                                        <td class="delete"><a title="Delete"> <i
                                                    class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                                        <td>
                                            <div class="input-group bootstrap-touchspin"><span
                                                    class="input-group-btn"><button type="button"
                                                        class="btn btn-link bootstrap-touchspin-down">-</button></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix"></span><input
                                                    type="text" name="quanitySniper" value="2"
                                                    class="quanitySniper form-control"><span
                                                    class="input-group-addon bootstrap-touchspin-postfix"></span><span
                                                    class="input-group-btn"><button type="button"
                                                        class="btn btn-link bootstrap-touchspin-up">+</button></span>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td class="price">$300</td>
                                    </tr>
                                    <tr class="CartProduct">
                                        <td class="CartProductThumb">
                                            <div><a href="{{ route('product-details') }}"><img alt="img"
                                                        src="{{ asset('images/product/a2.jpg') }}"></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="CartDescription">
                                                <h4><a href="{{ route('product-details') }}">Denim T shirt Red </a></h4>
                                                <span class="size">12 x 1.5 L</span>
                                                <div class="price"><span>$30</span></div>
                                            </div>
                                        </td>
                                        <td class="delete"><a title="Delete"> <i
                                                    class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                                        <td>
                                            <div class="input-group bootstrap-touchspin"><span
                                                    class="input-group-btn"><button type="button"
                                                        class="btn btn-link bootstrap-touchspin-down">-</button></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix"></span><input
                                                    type="text" name="quanitySniper" value="2"
                                                    class="quanitySniper form-control"><span
                                                    class="input-group-addon bootstrap-touchspin-postfix"></span><span
                                                    class="input-group-btn"><button type="button"
                                                        class="btn btn-link bootstrap-touchspin-up">+</button></span>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td class="price">$60</td>
                                    </tr>
                                    <tr class="CartProduct">
                                        <td class="CartProductThumb">
                                            <div>
                                                <a href="{{ route('product-details') }}"><img alt="img"
                                                        src="{{ asset('images/product/a5.jpg') }}"></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="CartDescription">
                                                <h4><a href="{{ route('product-details') }}">Denim T shirt Blue </a></h4>
                                                <span class="size">12 x 1.5 L</span>
                                                <div class="price"><span>$8.80</span></div>
                                            </div>
                                        </td>
                                        <td class="delete"><a title="Delete"> <i
                                                    class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                                        <td>
                                            <div class="input-group bootstrap-touchspin"><span
                                                    class="input-group-btn"><button type="button"
                                                        class="btn btn-link bootstrap-touchspin-down">-</button></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix"></span><input
                                                    type="text" name="quanitySniper" value="2"
                                                    class="quanitySniper form-control"><span
                                                    class="input-group-addon bootstrap-touchspin-postfix"></span><span
                                                    class="input-group-btn"><button type="button"
                                                        class="btn btn-link bootstrap-touchspin-up">+</button></span>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td class="price">$60</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cartFooter w100">
                            <div class="box-footer">
                                <div class="pull-left"><a class="btn btn-default" href="{{ route('home') }}"> <i
                                            class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
                                <div class="pull-right">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-undo"></i> &nbsp;
                                        Update
                                        cart
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
                <div class="contentBox">
                    <div class="w100 costDetails">
                        <div id="order-detail-content" class="table-block"><a style="margin-bottom:20px"
                                href="checkout-0.html" title="checkout" class="btn btn-primary btn-lg btn-block ">
                                Proceed to
                                checkout &nbsp; <i class="fa fa-arrow-right"></i> </a>
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
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-append couponForm">
                                                    <input type="text" placeholder="Coupon code"
                                                        id="appendedInputButton" class="col-lg-8">
                                                    <button type="button"
                                                        class="col-lg-4 btn btn-success">Apply!</button>
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

    <div class="modal  fade" id="modal-review" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                    <h3 class="modal-title-site text-center">PRODUCT REVIEW </h3>
                </div>
                <div class="modal-body">
                    <h3 class="reviewtitle uppercase">You're reviewing: Lorem ipsum dolor sit amet</h3>
                    
                    <form>
                        <div class="form-group">
                            <label>
                                How do you rate this product? </label> <br>
                            <div class="rating-here">
                                <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star fa-2x"
                                    data-empty="fa fa-star-o fa-2x" data-fractions="3" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rtext">Name</label>
                            <input type="text" class="form-control" id="rtext" placeholder="Your name" required>
                        </div>
                        <div class="form-group ">
                            <label>Review</label>
                            <textarea class="form-control" rows="3" placeholder="Your Review" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit Review</button>
                    </form>
                </div>
            </div>

        </div>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script src="{{ asset('build/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/assets/assets/js/jquery.cycle2.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/js/jquery.parallax-1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/js/helper-plugins/jquery.mousewheel.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('build/assets/js/jquery.mCustomScrollbar.js') }}"></script>

    <script type="text/javascript" src="{{ asset('build/assets/plugins/icheck-1.x/icheck.min.js') }}"></script>

    <script src="{{ asset('build/assets/js/grids.js') }}"></script>

    <script src="{{ asset('build/assets/js/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('build/assets/js/smoothproducts.min.js') }}"></script>

    <script src="{{ asset('build/assets/js/select2.min.js') }}"></script>

    <script src="{{ asset('build/assets/js/bootstrap.touchspin.js') }}"></script>

    <script src="{{ asset('build/assets/js/script.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/rating/bootstrap-rating.min.js') }}"></script>
    <script>
        $(function () {
            $('.rating-tooltip-manual').rating({
                extendSymbol: function () {
                    var title;
                    $(this).tooltip({
                        container: 'body',
                        placement: 'bottom',
                        trigger: 'manual',
                        title: function () {
                            return title;
                        }
                    });
                    $(this).on('rating.rateenter', function (e, rate) {
                        title = rate;
                        $(this).tooltip('show');
                    })
                        .on('rating.rateleave', function () {
                            $(this).tooltip('hide');
                        });
                }
            });

        });
    </script>


@endsection
