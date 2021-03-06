@extends('layouts.user')
@section('user-content')
<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Product Info</h5>
                <h6>Welcome to the Island Buyers Club Experience</h6>
            </div>
        </div>
        <div class="col m7 s12">
            <div class="row">
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Cubic Feet</h5>
                        @if(empty($product->options->toArray()))
                            <h6>{{$product->masterVariant->cubic_feet}}'</h6>
                        @else
                            <h6 class="single-product-cubic-footage">TBD</h6>
                        @endif
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Weight</h5>
                        @if(empty($product->options->toArray()))
                            <h6>{{$product->masterVariant->weight}}lbs</h6>
                        @else
                            <h6 class="single-product-weight">TBD</h6>
                        @endif
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Min Qty</h5>
                        @if(empty($product->options->toArray()))
                            <h6>{{$product->masterVariant->quantity}}</h6>
                        @else
                            <h6 class="single-product-quantity">TBD</h6>
                        @endif
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Individual Price</h5>
                        @if(empty($product->options->toArray()))
                            <h6>$<?php $ind_price =  $product->masterVariant->price / $product->masterVariant->quantity; echo number_format((float)$ind_price, 2, '.', '');  ?></h6>
                        @else
                            <h6 class="single-product-price">TBD</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="page-body">
        <div class="singleProductWrapper">
            <div class="row">
                <div class="col s3 small-padding">
                    <div class="single-product-image">
                        <img src="/media/product_images/{{$product->images[0]->src}}">
                    </div>
                    <div class="single-product-add-to-container-wrapper">
                        <form method="post" action="/container/add-to-container">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col s2 no-padding">
                                    <input name="quantity" type="number" value="1">
                                </div>
                                <div class="col s10 no-padding">
                                    @if(empty($product->options->toArray()))
                                        <input type="hidden" name="variant_id" value="{{$product->masterVariant->id}}">
                                    @else
                                        <input type="hidden" id="variantIdValue" name="variant_id" value="">
                                    @endif
                                    <button class="add-to-container-btn">Add To Container</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s9 small-padding">
                    <div class="single-product-title">
                        <h1>{{ucwords($product->name)}}</h1>
                    </div>
                    <div class="single-product-details">
                        <div class="single-product-description">
                            <h6>{{$product->description}}</h6>
                        </div>
                        <div class="single-product-options">
                            @if(!empty($product->options->toArray()))
                                <h3>Select your options</h3>
                                @foreach($product->options as $option)
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <h3>{{ucwords($option->name)}}</h3>
                                        </div>
                                        <div class="col s12 m7">
                                            <div class="row">
                                                @foreach($option->values as $value)
                                                <div class="col s12 m3">
                                                    <p>
                                                          <input type="checkbox" id="productValueId{{$value->id}}" />
                                                          <label for="productValueId{{$value->id}}">Red</label>
                                                    </p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recently-viewed-products-wrapper">
            <div class="row">
                <div class="col s12 m10 no-padding">
                    <div class="dash-title-wrapper dash-new-product-title">
                        <h5>Recently Added Products</h5>
                    </div>
                    <div class="row">
                        <div class="col s6 m3 small-padding">
                            <a href="/product/fiberglass-step-ladder-tpe-1aa3152">
                                <div class="dash-product-block-wrapper single-product center">
                                    <img src="/media/product_images/ladder-red-open.png">
                                </div>
                            </a>
                        </div>
                        <div class="col s6 m3 small-padding">
                            <a href="/product/aluminum-extension-ladder-type-1a7253">
                                <div class="dash-product-block-wrapper single-product center">
                                    <img src="/media/product_images/ladder-silver-extend.png">
                                </div>
                            </a>
                        </div>
                        <div class="col s6 m3 small-padding">
                            <a href="/product/steel-air-tyre-wheel-barrow6935">
                                <div class="dash-product-block-wrapper single-product center">
                                    <img src="/media/product_images/red-wheel-barrow-front.png">
                                </div>
                            </a>
                        </div>
                        <div class="col s6 m3 small-padding">
                            <a href="/product/poly-tray-dual-air-tyre-wheel-barrow9701">
                                <div class="dash-product-block-wrapper single-product center">
                                    <img src="/media/product_images/green-wheel-barrow-front.png">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
