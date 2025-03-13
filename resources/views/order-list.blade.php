@extends('layouts.app')

@section('content')

<link href="{{ asset('build/assets/css/footable-0.1.css') }}" rel="stylesheet">
<link href="{{ asset('build/assets/css/footable.sortable-0.1.css') }}" rel="stylesheet">
<script>
    paceOptions = {
        elements: true
    };
</script>
<script src="{{ asset('build/assets/js/pace.min.js') }}"></script>
<script type="text/javascript">
    function swapStyleSheet(sheet) {
        document.getElementById('pagestyle').setAttribute('href', sheet);
    }
</script>
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
            <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Order List </span></h1>
            <div class="row userInfo">
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Your Order List </h2>
                </div>
                <div style="clear:both"></div>
                <div class="col-xs-12 col-sm-12">
                    <table class="footable">
                        <thead>
                            <tr>
                                <th data-class="expand" data-sort-initial="true"><span title="table sorted by this column on load">Order ID</span></th>
                                <th data-hide="phone,tablet" data-sort-ignore="true">No. of items</th>
                                <th data-hide="phone,tablet" data-sort-ignore="true">Invoice</th>
                                <th data-hide="phone,tablet"><strong>Payment Method</strong></th>
                                <th data-hide="phone,tablet"><strong></strong></th>
                                <th data-hide="default"> Price</th>
                                <th data-hide="default" data-type="numeric"> Date</th>
                                <th data-hide="phone" data-type="numeric"> Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $statusClass = [
                            'completed' => 'label-success',
                            'pending' => 'label-primary',
                            'cancel' => 'label-danger',
                            'dispatched' => 'label-default',
                            ];
                            @endphp
                            @foreach ($orders as $order)
                            <tr>
                                <td>#{{ @$order->id }}</td>
                                <td>5
                                    <small>item(s)</small>
                                </td>
                                <td><a target="_blank">-</a></td>
                                <td>{{@$order->payment_method}}</td>
                                <td><a href="{{ route('order.status', ['orderId' => $order->id]) }}" class="btn btn-primary btn-sm">view status</a></td>
                                <td>${{ @$order->total_price }}</td>
                                <td data-value="78025368997">{{@$order->created_at}}</td>
                                <td data-value="3"><span class="label  {{ $statusClass[$order->status] ?? 'label-secondary' }}">{{ ucfirst($order->status) }}</span>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div style="clear:both"></div>
                <div class="col-lg-12 clearfix">
                    <ul class="pager">
                        <li class="previous pull-right"><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Go to Shop </a>
                        </li>
                        <li class="next pull-left"><a href="{{ route('account') }}"> &larr; Back to My Account</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"></div>
    </div>

    <div style="clear:both"></div>
</div>
<div class="gap"></div>


<script src="{{ asset('build/assets/js/footable.js') }}"></script>
<script src="{{ asset('build/assets/js/footable.sortable.js') }}"></script>
<script type="text/javascript">
    $(function() {
        $('.footable').footable();
    });
</script>
@endsection