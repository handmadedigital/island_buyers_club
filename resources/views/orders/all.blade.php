@extends('layouts.user')

@section('user-content')
<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Orders</h5>
                <h6>Welcome to the Island Buyers Club Experience</h6>
            </div>
        </div>
        <div class="col m7 s12">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<div class="order-page-body">
    <div class="row">
        <div class="col s12 no-padding">
            <div class="dash-title-wrapper dash-news-title">
                <h5>Orders</h5>
            </div>
            <div class="orders-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Dimension</th>
                            <th>Weight</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td><a href="/{{Auth::user()->slug}}/order/{{$order->order_number}}/details">{{$order->order_number}}</a></td>
                                <td>11/12/2015</td>
                                <td>11x20x15</td>
                                <td>400lbs</td>
                                <td>$180.00</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection