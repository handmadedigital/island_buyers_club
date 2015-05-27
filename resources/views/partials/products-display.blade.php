<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Products</h5>
                <h6>Welcome to the Island Buyers Club Experience</h6>
            </div>
        </div>
        <div class="col m7 s12">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col s12">
            <div id="productsBar">
                <div class="row">
                    <div class="col s4">
                        <h6>Sort By:</h6>
                        <select id="selectProductSorting">
                            <option>Best Selling</option>
                            <option>Best Match</option>
                            <option>Price</option>
                            <option>Newest</option>
                        </select>
                    </div>
                    <div class="col s8">
                        <div class="product-paginator right">
                           <?php
                            if(isset($allProducts)) echo $products->render();
                             ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="productsDisplay">
                @foreach(array_chunk($products->all(), 4) as $row)
                    <div class="row">
                        @foreach($row as $product)
                            <a href="/product/{{$product->slug}}">
                                <div class="rod-5 col m4 s12  no-padding">
                                    <div class="product-display-wrapper">
                                        <div class="product-display-image center">
                                            <img src="/media/product_images/{{$product->images[0]->src}}">
                                        </div>
                                        <div class="product-display-info">
                                            <div class="row">
                                                <div class="col s8">
                                                    <h6>{{ucwords($product->name)}}</h6>
                                                </div>
                                                <div class="col s4">
                                                    <h6>${{$product->masterVariant->price}}</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <h6 class="product-display-categories">
                                                        @foreach($product->categories as $category)
                                                           {{$category->name}}
                                                        @endforeach
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-display-view">
                                            <h6 class="center">View Product</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>