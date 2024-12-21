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
                            <li><a href="{{ route('checkout-1') }}"> <i class="fa fa-map-marker "></i> <span> address</span>
                                </a>
                            </li>
                            <li><a href="{{ route('checkout-2') }}.html"> <i class="fa fa fa-envelope  "></i>
                                    <span> Billing </span></a></li>
                            <li class="active"><a href="{{ route('checkout-3') }}"><i class="fa fa-truck ">
                                    </i><span>Shipping</span> </a></li>
                            <li><a href="{{ route('checkout-4') }}"><i class="fa fa-money  "> </i><span>Payment</span> </a>
                            </li>
                            <li><a href="{{ route('checkout-5') }}"><i class="fa fa-check-square "> </i><span>Order</span></a>
                            </li>
                        </ul>

                    </div>
                    <div class="w100 clearfix">
                        <div class="row userInfo">
                            <div class="col-lg-12">
                                <h2 class="block-title-2"> Choose your delivery method </h2>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="w100 row">
                                    <div class="form-group col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                        <label for="id_country">Country</label>
                                        <select name="id_country" id="id_country" aria-required="true" required=""
                                            class="form-control select2-hidden-accessible" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">Choose</option>
                                            <option value="38">Algeria</option>
                                            <option value="39">American Samoa</option>
                                            <option value="40">Andorra</option>
                                            <option value="41">Angola</option>
                                            <option value="42">Anguilla</option>
                                            <option value="43">Antigua and Barbuda</option>
                                            <option value="44">Argentina</option>
                                            <option value="45">Armenia</option>
                                            <option value="46">Aruba</option>
                                            <option value="24">Australia</option>
                                            <option value="2">Austria</option>
                                            <option value="47">Azerbaijan</option>
                                            <option value="48">Bahamas</option>
                                            <option value="49">Bahrain</option>
                                            <option value="50">Bangladesh</option>
                                            <option value="3">Belgium</option>
                                            <option value="34">Bolivia</option>
                                            <option value="4">Canada</option>
                                            <option value="5">China</option>
                                            <option value="16">Czech Republic</option>
                                            <option value="20">Denmark</option>
                                            <option value="7">Finland</option>
                                            <option value="8">France</option>
                                            <option value="1">Germany</option>
                                            <option value="9">Greece</option>
                                            <option value="22">HongKong</option>
                                            <option value="26">Ireland</option>
                                            <option value="29">Israel</option>
                                            <option value="10">Italy</option>
                                            <option value="32">Ivory Coast</option>
                                            <option value="11">Japan</option>
                                            <option value="12">Luxemburg</option>
                                            <option value="35">Mauritius</option>
                                            <option value="13">Netherlands</option>
                                            <option value="27">New Zealand</option>
                                            <option value="31">Nigeria</option>
                                            <option value="23">Norway</option>
                                            <option value="14">Poland</option>
                                            <option value="15">Portugal</option>
                                            <option value="36">Romania</option>
                                            <option value="25">Singapore</option>
                                            <option value="37">Slovakia</option>
                                            <option value="30">South Africa</option>
                                            <option value="28">South Korea</option>
                                            <option value="6">Spain</option>
                                            <option value="18">Sweden</option>
                                            <option value="19">Switzerland</option>
                                            <option value="33">Togo</option>
                                            <option value="17">United Kingdom</option>
                                            <option value="21" selected="selected">United States</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12" id="states">
                                        <label for="id-state">State</label>
                                        <select name="id-state" id="id-state" aria-required="true" required=""
                                            class="form-control select2-hidden-accessible" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">Choose</option>
                                            <option value="1">Alabama</option>
                                            <option value="2">Alaska</option>
                                            <option value="3">Arizona</option>
                                            <option value="4">Arkansas</option>
                                            <option value="5">California</option>
                                            <option value="6">Colorado</option>
                                            <option value="7">Connecticut</option>
                                            <option value="8">Delaware</option>
                                            <option value="9">Florida</option>
                                            <option value="10">Georgia</option>
                                            <option value="11">Hawaii</option>
                                            <option value="12">Idaho</option>
                                            <option value="13">Illinois</option>
                                            <option value="14">Indiana</option>
                                            <option value="15">Iowa</option>
                                            <option value="16">Kansas</option>
                                            <option value="17">Kentucky</option>
                                            <option value="18">Louisiana</option>
                                            <option value="19">Maine</option>
                                            <option value="20">Maryland</option>
                                            <option value="21">Massachusetts</option>
                                            <option value="22">Michigan</option>
                                            <option value="23">Minnesota</option>
                                            <option value="24">Mississippi</option>
                                            <option value="25">Missouri</option>
                                            <option value="26">Montana</option>
                                            <option value="27">Nebraska</option>
                                            <option value="28">Nevada</option>
                                            <option value="29">New Hampshire</option>
                                            <option value="30">New Jersey</option>
                                            <option value="31">New Mexico</option>
                                            <option value="32">New York</option>
                                            <option value="33">North Carolina</option>
                                            <option value="34">North Dakota</option>
                                            <option value="35">Ohio</option>
                                            <option value="36">Oklahoma</option>
                                            <option value="37">Oregon</option>
                                            <option value="38">Pennsylvania</option>
                                            <option value="39">Rhode Island</option>
                                            <option value="40">South Carolina</option>
                                            <option value="41">South Dakota</option>
                                            <option value="42">Tennessee</option>
                                            <option value="43">Texas</option>
                                            <option value="44">Utah</option>
                                            <option value="45">Vermont</option>
                                            <option value="46">Virginia</option>
                                            <option value="47">Washington</option>
                                            <option value="48">West Virginia</option>
                                            <option value="49">Wisconsin</option>
                                            <option value="50">Wyoming</option>
                                            <option value="51">Puerto Rico</option>
                                            <option value="52">US Virgin Islands</option>
                                            <option value="53">District of Columbia</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                        <label for="zipcode">Zip Code</label>
                                        <input type="text" class="form-control" name="zipcode" id="zipcode">
                                        (Needed for certain carriers.)
                                    </div>
                                    <div class="form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12">
                                        <table class="table-bordered table tablelook2" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td> Carrier</td>
                                                    <td>Method</td>
                                                    <td>Information</td>
                                                    <td>Price!</td>
                                                </tr>
                                                <tr>
                                                    <td><label class="radio">
                                                            <div class="iradio_square-green iChk iCheck-margin checked"
                                                                style="position: relative;"><input type="radio"
                                                                    checked="" value="option1" id="optionsRadios1"
                                                                    name="optionsRadios"
                                                                    style="position: absolute; opacity: 0;"><ins
                                                                    class="iCheck-helper"
                                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                            </div>
                                                            <i class="fa  fa-plane fa-2x"></i>
                                                        </label></td>
                                                    <td> By Road</td>
                                                    <td>Pick up in-store</td>
                                                    <td>Free!</td>
                                                </tr>
                                                <tr>
                                                    <td><label class="radio">
                                                            <div class="iradio_square-green iChk iCheck-margin"
                                                                style="position: relative;"><input type="radio"
                                                                    value="option2" id="optionsRadios2"
                                                                    name="optionsRadios"
                                                                    style="position: absolute; opacity: 0;"><ins
                                                                    class="iCheck-helper"
                                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                            </div>
                                                            <i class="fa fa-truck fa-2x"></i>
                                                        </label></td>
                                                    <td>By Air</td>
                                                    <td>Delivery next day!</td>
                                                    <td>Free!</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="cartFooter w100">
                                    <div class="box-footer">
                                        <div class="pull-left"><a href="{{ route('checkout-2') }}.html" class="btn btn-default"> <i
                                                    class="fa fa-arrow-left"></i> &nbsp; Shipping address </a></div>
                                        <div class="pull-right"><a class="btn btn-primary btn-small "
                                                href="{{ route('checkout-4') }}"> Payment Method
                                                &nbsp; <i class="fa fa-arrow-circle-right"></i> </a></div>
                                    </div>
                                </div>

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