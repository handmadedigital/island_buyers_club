@extends('layouts.user')

@section('user-content')
<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Order Details</h5>
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
        <div class="col s9 small-padding">
            <div class="dash-title-wrapper dash-news-title">
                <h5>Order #4554</h5>
            </div>
            <div class="order-details-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $o)
                            <tr>
                                <td>{{$o->variant->product->name}}</td>
                                <td>{{$o->variant->price}}</td>
                                <td>1</td>
                                <td>{{$o->variant->price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col s3 small-padding">
            <div class="dash-title-wrapper comments-icon">
                <h5>Comments</h5>
            </div>
            <div class="order-comments-wrapper">
                <div class="new-order-comment-wrapper">
                    <textarea placeholder="Write comment here..."></textarea>
                    <button>Add Comment</button>
                </div>
                <div class="order-comments">
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                    <div class="comment-wrapper">
                        <p>Cu mei percipit reprehendunt. Tale justo regione no qui</p>
                        <p>- rodzzlessa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection