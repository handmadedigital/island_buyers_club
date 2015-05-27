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
                        <h5>Size(LxWxH)</h5>
                        <h6>{{$product->masterVariant->length}}" x {{$product->masterVariant->width}}" x {{$product->masterVariant->height}}"</h6>
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Weight</h5>
                        <h6>{{$product->masterVariant->weight}}lbs</h6>
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Min Qty</h5>
                        <h6>{{$product->masterVariant->quantity}}</h6>
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="product-header-info-wrapper">
                        <h5>Individual Price</h5>
                        <h6>$<?php $ind_price =  $product->masterVariant->price / $product->masterVariant->quantity; echo number_format((float)$ind_price, 2, '.', '');  ?></h6>
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
                            @if(isset($product->options))
                                <h3>Select your options</h3>
                                @foreach($product->options as $option)
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <h3>{{ucwords($option->name)}}</h3>
                                        </div>
                                        <div class="col s12 m4">
                                            <select class="select-option-values">
                                                <option value="{{$option->id}}" disabled selected="selected">{{$option->name}}</option>
                                                @foreach($option->values as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
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
                        <h5>Recently Viewed Products</h5>
                    </div>
                    <div class="row">
                        <div class="col s6 m3 small-padding">
                            <div class="dash-product-block-wrapper">
                            </div>
                        </div>
                        <div class="col s6 m3 small-padding">
                            <div class="dash-product-block-wrapper">
                            </div>
                        </div>
                        <div class="col s6 m3 small-padding">
                            <div class="dash-product-block-wrapper">
                            </div>
                        </div>
                        <div class="col s6 m3 small-padding">
                            <div class="dash-product-block-wrapper">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
