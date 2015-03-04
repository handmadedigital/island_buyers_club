@extends('layouts.user')


@section('user-content')

<div class="page-header">
    <div class="row">
        <div class="col s12">
            <h1 class="page-title">Products</h1>
            <h4 class="page-subtitle">Welcome to the products section of Island Buyers Club</h4>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col s12">
            <div id="productsBar">
                <div class="row">
                    <div class="col s6">
                        Sort BY:
                    </div>
                    <div class="col s6">
                        <div class="product-paginator right">
                           <?php echo $products->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="productsDisplay">
                <div class="row">
                    @foreach($products as $product)
                        <a href="/product/{{$product->slug}}">
                            <div class="rod-5 col m4 s12  no-padding">
                                <div class="product-display-wrapper">
                                    <div class="product-display-image">
                                        <img src="{{$product->images[0]->src}}">
                                    </div>
                                    <div class="product-display-info">
                                        <div class="row">
                                            <div class="col s8">
                                                <h6>{{$product->name}}</h6>
                                            </div>
                                            <div class="col s4">
                                                <h6>${{$product->masterVariant->price}}</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <h5 class="center">View Product</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection