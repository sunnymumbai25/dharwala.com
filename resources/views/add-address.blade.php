@extends('layouts.app')

@section('content')

<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="account.html">My Account</a></li>
                <li class="active"> Add Address</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-map-marker"></i> Add Your addresses </span></h1>
            <div class="row userInfo">
                <div class="col-lg-12 col-xs-12">
                    <h2 class="block-title-2"> To add a new address, please fill out the form below. </h2>
                    <p class="required"><sup>*</sup> Required field</p>
                </div>
                <form action="{{ route('delivery.address.save') }}" method="POST">
                    @csrf
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group required">
                            <label for="name">Full Name <sup>*</sup> </label>
                            <input required type="text" class="form-control" id="InputName" placeholder="First Name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="InputCompany">Company </label>
                            <input type="text" class="form-control" id="InputCompany" placeholder="Company">
                        </div>
                        <div class="form-group required">
                            <label for="address_line_1">Address <sup>*</sup> </label>
                            <input required type="text" class="form-control" id="address_line_1" name="address_line_1" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="address_line_2">Address (Line 2) </label>
                            <input type="text" class="form-control" id="address_line_2" name="address_line_2" placeholder="Address">
                        </div>
                        <div class="form-group required">
                            <label for="InputCity">City <sup>*</sup> </label>
                            <input required type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="form-group required">
                            <label for="state">State <sup>*</sup> </label>
                            <select required aria-required="true" id="state" name="state">
                                <option value="">Choose</option>
                                <option value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option value="3">Arizona</option>
                                <option value="4">Arkansas</option>
                                <option value="5">California</option>
                                <option value="6">Colorado</option>
                                <option value="7">Connecticut</option>
                                <option value="8">Delaware</option>
                                <option value="53">District of Columbia</option>
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
                                <option value="51">Puerto Rico</option>
                                <option value="39">Rhode Island</option>
                                <option value="40">South Carolina</option>
                                <option value="41">South Dakota</option>
                                <option value="42">Tennessee</option>
                                <option value="43">Texas</option>
                                <option value="52">US Virgin Islands</option>
                                <option value="44">Utah</option>
                                <option value="45">Vermont</option>
                                <option value="46">Virginia</option>
                                <option value="47">Washington</option>
                                <option value="48">West Virginia</option>
                                <option value="49">Wisconsin</option>
                                <option value="50">Wyoming</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label for="postal_code">Zip / Postal Code <sup>*</sup> </label>
                            <input required type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Zip / Postal Code">
                        </div>
                        <div class="form-group required">
                            <label for="country">Country <sup>*</sup> </label>
                            <select required class="form-control" id="country" name="country" required>
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
                                <option selected="selected" value="21">United States</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="InputAdditionalInformation">Additional information</label>
                            <textarea rows="3" cols="26" name="InputAdditionalInformation" class="form-control" id="InputAdditionalInformation"></textarea>
                        </div>
                        <div class="form-group required">
                            <label for="phone">Mobile phone <sup>*</sup></label>
                            <input required type="tel" name="phone" id="phone" class="form-control" id="InputMobile">
                        </div>
                        <div class="form-group required">
                            <label for="addressAlias">Please assign an address title for future reference. <sup>*</sup></label>
                            <input required type="text" value="My address" name="addressAlias" class="form-control" id="addressAlias">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 clearfix">
                        <button type="submit" class="btn   btn-primary"><i class="fa fa-map-marker"></i> Save Address</button>
                    </div>

                    <div class="col-lg-12 col-xs-12  clearfix ">
                        <ul class="pager">
                            <li class="previous pull-right"><a href="index.html"> <i class="fa fa-home"></i> Go to Shop</a></li>
                            <li class="next pull-left">
                                <!-- <button type="submit">Save Address</button> -->
                                <!-- <a href="my-address.html">&larr; Back to My Address</a> -->
                            </li>
                        </ul>
                    </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5">
        </div>
    </div>
    <div style="clear:both"></div>
</div>

<div class="gap"></div>
@endsection