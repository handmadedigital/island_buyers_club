@extends('layouts.user')

@section('user-content')
<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Checkout</h5>
                <h6>Welcome to the Island Buyers Club Experience</h6>
            </div>
        </div>
        <div class="col m7 s12">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<div class="checkout-page-body">
    <div class="row">
        <div class="col s12 m9 small-padding">
            <div class="checkout-wrapper">
                <div class="dash-title-wrapper checkout-container-icon">
                    <h5>Container</h5>
                </div>
                <div class="checkout-info-wrapper">
                    <div class="checkout-info-titles">
                        <div class="row">
                            <div class="col s2">
                                <h6>Image</h6>
                            </div>
                            <div class="col s3">
                                <h6>Product</h6>
                            </div>
                            <div class="col s2">
                                <h6>Price</h6>
                            </div>
                            <div class="col s3">
                                <h6>Quantity</h6>
                            </div>
                            <div class="col s2">
                                <h6>Total</h6>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-info-info">
                        <?php
                            $total_price = 0;
                        ?>
                        @foreach($products as $container)
                            <div class="row">
                                <div class="col s2">
                                    <img src="/media/product_images/{{$container->variant->product->images[0]->src}}">
                                </div>
                                <div class="col s3">
                                    @if(empty($container->variant->optionValues->toArray()))
                                        <p>{{$container->variant->product->name}}</p>
                                    @else
                                        <p>{{$container->variant->optionValues[0]->name}}{{$container->variant->optionValues[0]->option->name}} {{$container->variant->product->name}}</p>
                                    @endif
                                </div>
                                <div class="col s2">
                                    <p>{{$container->variant->price}}</p>
                                </div>
                                <div class="col s3">
                                    <p>{{$container->quantity}}</p>
                                </div>
                                <div class="col s2">
                                    <p>${{$container->quantity * $container->variant->price}}</p>
                                </div>
                            </div>
                            <?php
                                $total_price +=  $container->quantity * $container->variant->price;
                            ?>
                            @endforeach
                    </div>
                    <div class="checkout-total-wrapper">
                        <div class="row">
                            <div class="col s4 offset-s8">
                                <div class="checkout-total-individual-info main-title">
                                    <h6><strong>Container Totals:</strong></h6>
                                </div>
                                <div class="checkout-total-individual-info">
                                    <div class="row">
                                        <div class="col s6 no-padding">
                                            <h6>Container Subtotal</h6>
                                        </div>
                                        <div class="col s6">
                                            <h6>${{$total_price}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-total-individual-info">
                                    <div class="row">
                                        <div class="col s6 no-padding">
                                            <h6>Freight</h6>
                                        </div>
                                        <div class="col s6">
                                            <h6>$0.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-total-individual-info">
                                    <div class="row">
                                        <div class="col s6 no-padding">
                                            <h6>Order Total</h6>
                                        </div>
                                        <div class="col s6">
                                            <h6>${{$total_price}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-order-btn-wrapper">
                                    <form method="post" action="/order/add">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        @foreach($products as $container)
                                            <input type="hidden" name="variant_id[]" value="{{$container->variant->id}}">
                                            <input type="hidden" name="price[]" value="{{$container->quantity * $container->variant->price}}">
                                        @endforeach
                                        <button>Place Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m3 small-padding">
            <div class="container-info-wrapper">
                <div class="dash-title-wrapper shipping-container-icon">
                    <h5>Shipping Options</h5>
                </div>
            </div>
            <div class="container-options-wrapper">
                <div class="row">
                    <div class="col s5 small-padding">
                        <div class="container-1-wrapper">
                            <img src="/static/img/container-1-icon.png">
                        </div>
                        <div class="container-1-wrapper">
                            <img src="/static/img/container-2-icon.png">
                        </div>
                        <div class="container-1-wrapper">
                            <img src="/static/img/container-3-icon.png">
                        </div>
                    </div>
                    <div class="col s7">
                        <div class="container-1-info">
                            <p><strong>Standard 20'</strong></p>
                            <p>3,456 sq/ft left to fill</p>
                        </div>
                        <div class="container-1-info">
                            <p><strong>Standard 40'</strong></p>
                            <p>60,563 sq/ft left to fill</p>
                        </div>
                        <div class="container-1-info">
                            <p><strong>High Cube 40'</strong></p>
                            <p>85,650 sq/ft left to fill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recently-viewed-products-wrapper">
            <div class="row">
                <div class="col s12 m9 no-padding">
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