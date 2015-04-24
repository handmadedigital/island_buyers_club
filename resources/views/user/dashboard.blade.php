@extends('layouts.user')

@section('user-content')
<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Dashboard</h5>
                <h6>Welcome to the Island Buyers Club Experience</h6>
            </div>
        </div>
        <div class="col m7 s12">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<div class="dashboard-body">
    <div class="row">
        <div class="col s12 m8">
            <div class="categories-wrapper">
                <div class="dash-title-wrapper dash-categories-title">
                    <h5>Categories</h5>
                </div>
                <div class="row">
                    @foreach($dashboard['categories'] as $category)
                        <a href="/products/{{$category->slug}}">
                            <div class="col s6 m3 small-padding">
                                <div class="dash-category-block-wrapper">
                                    <img src="/static/img/{{$category->image}}">
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div><!-- END CATEGORIES -->
            <div class="dash-recent-products-wrapper">
                <div class="dash-title-wrapper dash-new-product-title">
                    <h5>Newest Products</h5>
                </div>
                <div class="row">
                    @foreach($dashboard['recent_products'] as $product)
                        <div class="col s6 m3 small-padding">
                            <a href="/product/{{$product->slug}}">
                                <div class="dash-product-block-wrapper no-background">
                                    <img src="/static/img/{{$product->images[0]->src}}">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!-- END 8 BLOCK -->
        <div class="col s12 m4">
            <div class="recent-updates-wrapper">
                <div class="dash-title-wrapper-recent-news dash-news-title">
                    <h5>Recent News</h5>
                </div>
            </div>
            <div class="dash-recent-news-wrapper">
                <div class="dash-single-news">
                    <p>Check out all the new products we have uploaded!</p>
                </div>
                <div class="dash-single-news">
                    <p>A new comment was left on order number 6560.</p>
                </div>
                <div class="dash-single-news">
                    <p>Cu mei percipit reprehendunt. Tale
                       justo regione no qui. Cu mei percipit reprehendunt.</p>
                </div>
                <div class="dash-single-news">
                    <p>Cu mei percipit reprehendunt. Tale
                       justo regione no qui. Cu mei percipit reprehendunt.</p>
                </div>
                <div class="dash-single-news">
                    <p>Cu mei percipit reprehendunt. Tale
                       justo regione no qui. Cu mei percipit reprehendunt.</p>
                </div>
                <div class="dash-single-news">
                    <p>Cu mei percipit reprehendunt. Tale
                       justo regione no qui. Cu mei percipit reprehendunt.</p>
                </div>
                <div class="dash-single-news">
                    <p>Cu mei percipit reprehendunt. Tale
                       justo regione no qui. Cu mei percipit reprehendunt.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection