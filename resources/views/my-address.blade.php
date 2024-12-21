@extends('layouts.app')

@section('content')

<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('account') }}">My Account</a></li>
                <li class="active"> My Address</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-map-marker"></i> My addresses </span></h1>
            <p>Please configure your default billing and delivery addresses when placing an order. You may also add
                additional addresses, which can be useful for sending gifts or receiving an order at your office.</p>
            <div class="row userInfo">
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Your addresses are listed below. </h2>
                    <p> Be sure to update your personal information if it has changed.</p>
                </div>
                <div class="w100 clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>My Address</strong></h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li><span class="address-name"> <strong>Tanim Ahmed</strong></span></li>
                                    <li><span class="address-company"> TanimDesign & Development </span></li>
                                    <li><span class="address-line1"> Gulshan 2 , Road 50, House FO12EO </span></li>
                                    <li><span class="address-line2"> Dhaka, Bangladesh </span></li>
                                    <li><span> <strong>Mobile</strong> : 01670531352 </span></li>
                                    <li><span> <strong>Phone</strong> : 020904 - 85882 </span></li>
                                </ul>
                            </div>
                            <div class="panel-footer panel-footer-address"><a href="{{ route('add-address') }}"
                                    class="btn btn-sm btn-success"> <i class="fa fa-edit"> </i> Edit </a> <a
                                    class="btn btn-sm btn-danger"> <i class="fa fa-minus-circle"></i> Delete </a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>My Address 2</strong></h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li><span class="address-name"> <strong>Tanim Ahmed</strong></span></li>
                                    <li><span class="address-company"> TanimDesign & Development </span></li>
                                    <li><span class="address-line1"> Gulshan 2 , Road 50, House FO12EO </span></li>
                                    <li><span class="address-line2"> Dhaka, Bangladesh </span></li>
                                    <li><span> <strong>Mobile</strong> : 01670531352 </span></li>
                                    <li><span> <strong>Phone</strong> : 020904 - 85882 </span></li>
                                </ul>
                            </div>
                            <div class="panel-footer panel-footer-address"><a href="{{ route('add-address') }}"
                                    class="btn btn-sm btn-success"> <i class="fa fa-edit"> </i> Edit </a> <a
                                    class="btn btn-sm btn-danger"> <i class="fa fa-minus-circle"></i> Delete </a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>My Address 3</strong></h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li><span class="address-name"> <strong>Tanim Ahmed</strong></span></li>
                                    <li><span class="address-company"> TanimDesign & Development </span></li>
                                    <li><span class="address-line1"> Gulshan 2 , Road 50, House FO12EO </span></li>
                                    <li><span class="address-line2"> Dhaka, Bangladesh </span></li>
                                    <li><span> <strong>Mobile</strong> : 01670531352 </span></li>
                                    <li><span> <strong>Phone</strong> : 020904 - 85882 </span></li>
                                </ul>
                            </div>
                            <div class="panel-footer panel-footer-address"><a href="{{ route('add-address') }}"
                                    class="btn btn-sm btn-success"> <i class="fa fa-edit"> </i> Edit </a> <a
                                    class="btn btn-sm btn-danger"> <i class="fa fa-minus-circle"></i> Delete </a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 clearfix">
                    <a class="btn   btn-primary" href="{{ route('add-address') }}"><i class="fa fa-plus-circle"></i> Add New
                        Address </a>
                </div>
                <div class="col-lg-12 clearfix">
                    <ul class="pager">
                        <li class="previous pull-right"><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Go to Shop </a>
                        </li>
                        <li class="next pull-left"><a href="{{ route('account') }}">&larr; Back to My Account</a></li>
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