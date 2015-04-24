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
                        <div class="row">
                            <div class="col s2">
                                <img src="http://placehold.it/50x50">
                            </div>
                            <div class="col s3">
                                <h6>Rokker</h6>
                            </div>
                            <div class="col s2">
                                <h6>$21.72</h6>
                            </div>
                            <div class="col s3">
                                <h6>5</h6>
                            </div>
                            <div class="col s2">
                                <h6>$108.60</h6>
                            </div>
                        </div>
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
                                            <h6>$108.60</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-total-individual-info">
                                    <div class="row">
                                        <div class="col s6 no-padding">
                                            <h6>Shipping</h6>
                                        </div>
                                        <div class="col s6">
                                            <h6>FREE Shipping</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-total-individual-info">
                                    <div class="row">
                                        <div class="col s6 no-padding">
                                            <h6>Order Total</h6>
                                        </div>
                                        <div class="col s6">
                                            <h6>$108.60</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-order-btn-wrapper">
                                    <button>Place Order</button>
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