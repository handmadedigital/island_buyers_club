@extends('layouts.user')
@section('user-content')
    <div class="page-header">
        <div class="row">
            <div class="col m4">
                <h1 class="page-title">Product Info</h1>
                <h4 class="page-subtitle">{{$product->short_description}}</h4>
            </div>
            <div class="col m8">
                <div class="row">
                    <div class="col m3">
                        <div class="product-detail-wrapper">
                            <h6>Size(LxWxH)</h6>
                            <h4>{{$product->masterVariant->length}}" x {{$product->masterVariant->width}}" x {{$product->masterVariant->height}}"</h4>
                        </div>
                    </div>
                    <div class="col m3">
                        <div class="product-detail-wrapper">
                            <h6>Weight</h6>
                            <h4>{{$product->masterVariant->weight}}</h4>
                        </div>
                    </div>
                    <div class="col m3">
                        <div class="product-detail-wrapper">
                            <h6>Qty</h6>
                            <h4>{{$product->masterVariant->quantity}}</h4>
                        </div>
                    </div>
                    <div class="col m3">
                        <div class="product-detail-wrapper">
                            <h6>Individual Price</h6>
                            <h4><?php $ind_price =  $product->masterVariant->price / $product->masterVariant->quantity; echo number_format((float)$ind_price, 2, '.', '');  ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-page-body">
        <div class="row">
            <div class="col m3">
                <div class="single-product-image">
                    <img src="{{$product->images[0]->src}}">
                </div>
                <div class="single-product-add-product">
                    <div class="col m3">
                        <input type="number">
                    </div>
                    <div class="col m9">
                        <button>Add To Container</button>
                    </div>
                </div>
            </div>
            <div class="col m9">
                <div class="single-product-title">
                    <h3>{{$product->name}}</h3>
                </div>
                <div class="single-product-details">
                    <div class="single-product-description">
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="single-product-option-selector">
                        @foreach($product->options as $option)
                                    @if($option === $product->options[0])
                                        <div class="row">
                                            <div class="col m2">
                                                <h4>{{$option->name}}</h4>
                                            </div>
                                            <div class="col m5">
                                                <select>
                                                    <option value="" disabled selected="selected">{{$option->name}}</option>
                                                    @foreach($option->values as $value)
                                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col m2">
                                                <h4>{{$option->name}}</h4>
                                            </div>
                                            <div class="col m5">
                                                <select>
                                                    <option value="" disabled selected="selected">{{$option->name}}</option>
                                                    @foreach($option->values as $value)
                                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
