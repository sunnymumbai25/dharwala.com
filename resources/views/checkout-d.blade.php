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
                            <li><a href="{{ route('checkout-1') }}"> <i class="fa fa-map-marker "></i> <span> address</span> </a>
                            </li>
                            <li><a href="{{ route('checkout-2') }}.html"> <i class="fa fa fa-envelope  "></i>
                                    <span> Billing </span></a></li>
                            <li><a href="{{ route('checkout-3') }}"><i class="fa fa-truck "> </i><span>Shipping</span> </a></li>
                            <li class="active"><a href="{{ route('checkout-4') }}"><i class="fa fa-money  ">
                                    </i><span>Payment</span> </a></li>
                            <li><a href="{{ route('checkout-5') }}"><i class="fa fa-check-square "> </i><span>Order</span></a>
                            </li>
                        </ul>

                    </div>
                    <div class="w100 clearfix">
                        <div class="row userInfo">
                            <div class="col-lg-12">
                                <h2 class="block-title-2"> Payment method </h2>
                                <p>Please select the preferred shipping method to use on this order.</p>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="paymentBox">
                                    <div id="accordion" class="panel-group paymentMethod">
                                        <div class="panel panel-default">
                                            <div class="panel-heading panel-heading-custom">
                                                <h4 class="panel-title"><a href="#collapseOne" data-parent="#accordion"
                                                        data-toggle="collapse" class="cashOnDelivery">
                                                        <span class="numberCircuil">Option 1</span> <strong> Cash on
                                                            Delivery</strong> </a></h4>
                                            </div>
                                            <div class="panel-collapse collapse in" id="collapseOne">
                                                <div class="panel-body">
                                                    <p>All transactions are secure and encrypted, and we neverstor To
                                                        learn more, please view our privacy policy.</p>
                                                    <br>
                                                    <label for="radios-4" class="radio-inline">
                                                        <div class="iradio_square-green iChk iCheck-margin"
                                                            style="position: relative;"><input type="radio" value="4"
                                                                id="radios-4" name="radios"
                                                                style="position: absolute; opacity: 0;"><ins
                                                                class="iCheck-helper"
                                                                style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                        </div>
                                                        Cash On Delivery
                                                    </label>
                                                    <div class="form-group">
                                                        <label for="CommentsOrder">Add Comments About Your Order</label>
                                                        <textarea rows="3" cols="26" name="CommentsOrder"
                                                            class="form-control" id="CommentsOrder"></textarea>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label for="checkboxes-1" class="checkbox-inline">
                                                            <div class="icheckbox_square-green iCheck-margin"
                                                                style="position: relative;"><input type="checkbox"
                                                                    value="1" id="checkboxes-1" name="checkboxes"
                                                                    style="position: absolute; opacity: 0;"><ins
                                                                    class="iCheck-helper"
                                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                            </div>
                                                            I have read and agree to the <a
                                                                href="terms-conditions.html">Terms &amp; Conditions</a>
                                                        </label>
                                                    </div>
                                                    <div class="pull-right"><a class="btn btn-primary btn-small "
                                                            href="{{ route('checkout-5') }}"> Order
                                                            &nbsp; <i class="fa fa-arrow-circle-right"></i> </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading panel-heading-custom">
                                                <h4 class="panel-title"><a href="#collapseTwo" data-parent="#accordion"
                                                        data-toggle="collapse">
                                                        <span class="numberCircuil">Option 2</span><strong>
                                                            PayPal</strong>
                                                    </a></h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseTwo">
                                                <div class="panel-body">
                                                    <p>All transactions are secure and encrypted, and we neverstor To
                                                        learn more, please view our privacy policy.</p>
                                                    <br>
                                                    <label for="radios-3" class="radio-inline">
                                                        <div class="iradio_square-green iChk iCheck-margin"
                                                            style="position: relative;"><input type="radio" value="4"
                                                                id="radios-3" name="radios"
                                                                style="position: absolute; opacity: 0;"><ins
                                                                class="iCheck-helper"
                                                                style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                        </div>
                                                        <img height="18" alt="paypal"
                                                            src="images/site/payment/paypal-small.png"> Checkout with
                                                        Paypal
                                                    </label>
                                                    <div class="form-group">
                                                        <label for="CommentsOrder2">Add Comments About Your
                                                            Order</label>
                                                        <textarea rows="3" cols="26" name="CommentsOrder2"
                                                            class="form-control" id="CommentsOrder2"></textarea>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label for="checkboxes-0" class="checkbox-inline">
                                                            <div class="icheckbox_square-green iCheck-margin"
                                                                style="position: relative;"><input type="checkbox"
                                                                    value="1" id="checkboxes-0" name="checkboxes"
                                                                    style="position: absolute; opacity: 0;"><ins
                                                                    class="iCheck-helper"
                                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                            </div>
                                                            I have read and agree to the <a
                                                                href="terms-conditions.html">Terms &amp; Conditions</a>
                                                        </label>
                                                    </div>
                                                    <div class="pull-right"><a class="btn btn-primary btn-small "
                                                            href="{{ route('checkout-5') }}"> Order
                                                            &nbsp; <i class="fa fa-arrow-circle-right"></i> </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading panel-heading-custom">
                                                <h4 class="panel-title"><a href="#collapseThree"
                                                        data-parent="#accordion" data-toggle="collapse"
                                                        class="masterCard"> <span class="numberCircuil">Option 3</span>
                                                        <strong>
                                                            MasterCard</strong> </a></h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseThree">
                                                <div class="panel-body">
                                                    <p>All transactions are secure and encrypted, and we neverstor To
                                                        learn more, please view our privacy policy.</p>
                                                    <br>
                                                    <div class="panel open">
                                                        <div class="creditCard">
                                                            <div class="cartBottomInnerRight paymentCard">
                                                            </div>
                                                            <span>Supported</span> <span>Credit Cards</span>
                                                            <div class="paymentInput">
                                                                <label for="CardNumber">Credit Card Number *</label>
                                                                <br>
                                                                <input type="text" name="Number" id="CardNumber">
                                                            </div>

                                                            <div class="paymentInput">
                                                                <label for="CardNumber2">Name on Credit Card *</label>
                                                                <br>
                                                                <input type="text" id="CardNumber2" name="CardNumber2">
                                                            </div>

                                                            <div class="paymentInput">
                                                                <div class="form-group">
                                                                    <label>Expiration date *</label>
                                                                    <br>
                                                                    <div
                                                                        class="col-lg-4 col-md-4 col-sm-4 no-margin-left no-padding">
                                                                        <select name="expire" aria-required="true"
                                                                            required=""
                                                                            class="form-control select2-hidden-accessible"
                                                                            tabindex="-1" aria-hidden="true">
                                                                            <option value="">Month</option>
                                                                            <option value="1">01 - January</option>
                                                                            <option value="2">02 - February</option>
                                                                            <option value="3">03 - March</option>
                                                                            <option value="4">04 - April</option>
                                                                            <option value="5">05 - May</option>
                                                                            <option value="6">06 - June</option>
                                                                            <option value="7">07 - July</option>
                                                                            <option value="8">08 - August</option>
                                                                            <option value="9">09 - September</option>
                                                                            <option value="10">10 - October</option>
                                                                            <option value="11">11 - November</option>
                                                                            <option value="12">12 - December</option>
                                                                        </select><span
                                                                            class="select2 select2-container select2-container--default"
                                                                            dir="ltr" style="width: 100px;"><span
                                                                                class="selection"><span
                                                                                    aria-expanded="false"
                                                                                    aria-haspopup="true"
                                                                                    aria-autocomplete="list"
                                                                                    role="combobox"
                                                                                    class="select2-selection select2-selection--single"
                                                                                    tabindex="0"
                                                                                    aria-labelledby="select2-expire-to-container"><span
                                                                                        class="select2-selection__rendered"
                                                                                        id="select2-expire-to-container"
                                                                                        title="Month">Month</span><span
                                                                                        role="presentation"
                                                                                        class="select2-selection__arrow"><b
                                                                                            role="presentation"></b></span></span></span><span
                                                                                aria-hidden="true"
                                                                                class="dropdown-wrapper"></span></span>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                                        <select name="year" aria-required="true"
                                                                            required=""
                                                                            class="form-control select2-hidden-accessible"
                                                                            tabindex="-1" aria-hidden="true">
                                                                            <option value="">Year</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                        </select><span
                                                                            class="select2 select2-container select2-container--default"
                                                                            dir="ltr" style="width: 100px;"><span
                                                                                class="selection"><span
                                                                                    aria-expanded="false"
                                                                                    aria-haspopup="true"
                                                                                    aria-autocomplete="list"
                                                                                    role="combobox"
                                                                                    class="select2-selection select2-selection--single"
                                                                                    tabindex="0"
                                                                                    aria-labelledby="select2-year-x7-container"><span
                                                                                        class="select2-selection__rendered"
                                                                                        id="select2-year-x7-container"
                                                                                        title="Year">Year</span><span
                                                                                        role="presentation"
                                                                                        class="select2-selection__arrow"><b
                                                                                            role="presentation"></b></span></span></span><span
                                                                                aria-hidden="true"
                                                                                class="dropdown-wrapper"></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div style="clear:both"></div>
                                                            <div class="paymentInput clearfix">
                                                                <label for="VerificationCode">Verification Code
                                                                    *</label>
                                                                <br>
                                                                <input type="text" style="width:90px;"
                                                                    name="VerificationCode" id="VerificationCode">
                                                                <br>
                                                            </div>

                                                            <div>
                                                                <div class="icheckbox_square-green iCheck-margin"
                                                                    style="position: relative;"><input type="checkbox"
                                                                        id="saveInfoid" name="saveInfo"
                                                                        style="position: absolute; opacity: 0;"><ins
                                                                        class="iCheck-helper"
                                                                        style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                                </div>
                                                                <label for="saveInfoid">&nbsp;Save my Card
                                                                    information</label>
                                                            </div>
                                                        </div>

                                                        <div class="pull-right"><a class="btn btn-primary btn-small "
                                                                href="{{ route('checkout-5') }}">
                                                                Order &nbsp; <i class="fa fa-arrow-circle-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-left"><a href="{{ route('checkout-3') }}" class="btn btn-default"> <i
                                        class="fa fa-arrow-left"></i> &nbsp; Billing address </a></div>
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