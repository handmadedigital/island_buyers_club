@extends('layouts.admin')

@section('admin-content')

<div id="addProductWrapper">
    @include('partials.form-error')
    <div id="addProductForm">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="input-field col s12">
                    <input id="productNameInput" name="name" type="text" class="validate">
                    <label for="productNameInput">Product Name</label>
                </div>
            </div>
            <div class="row">
                <div class="col s2">
                    <div class="file-field input-field" style="height: 250px;margin-top: 30%">
                      <input class="file-path validate" name="images[]" type="text"/>
                      <div class="btn">
                        <span>Add Product Images</span>
                        <input type="file" name="images[]" multiple/>
                      </div>
                    </div>
                </div>
                <div class="col s10">
                    <div class="input-field col s12">
                        <textarea id="productDesInput" name="description" class="materialize-textarea"></textarea>
                        <label for="productDesInput">Product Description</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" id="productShortDesInput" class="validate" name="short_description">
                        <label for="productShortDesInput">Product Short Description</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="number" id="productWidthInput" class="validate" name="width">
                            <label for="productWidthInput">Width</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="number" id="productLengthInput" class="validate" name="length">
                            <label for="productLengthInput">Length</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="number" id="productHeightInput" class="validate" name="height">
                            <label for="productHeightInput">Height</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="number" id="productWeightInput" class="validate" name="weight">
                            <label for="productWeightInput">Weight</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input type="number" id="productPriceInput" class="validate" name="price">
                        <label for="productPriceInput">$ Price</label>
                    </div>
                </div>
            </div>
            <div id="addProductButtons">
                <div class="row">
                    <div class="col s5">
                        <div class="col s6">
                            <button class="waves-effect waves-light btn" type="submit" name="action">Add Product
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                        <div class="col s6">
                           <button class="waves-effect waves-light btn" id="addVariationButton">Add Variation</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="addVariationOptionsWrapper">
                <div id="AddVariationOptionInputs">
                    <div class="row">
                        <div class="input-field  col s6">
                            <input type="text" id="productOption" class="validate" name="options[]">
                            <label for="productOption">Variation Name</label>
                        </div>
                        <div class="input-field  col s6">
                            <input type="text" id="productOptionValues" class="validate" name="option_values[]">
                            <label for="productOptionValues">Variation Option Values(pipe separated)</label>
                        </div>
                    </div>
                </div>
                <div id="addVariationButtons">
                    <div class="row">
                        <div class="col s5">
                            <div class="col s6">
                                <button class="waves-effect waves-light btn" type="submit" name="action">Add Product
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                            <div class="col s6">
                               <button class="waves-effect waves-light btn" id="addAnotherVariationButton">Add Another Variation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection