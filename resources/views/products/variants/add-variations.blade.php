@extends('layouts.admin')

@section('admin-content')

<div id="addVariantVariationsWrapper">
    @include('partials.form-error')
    <div id="addProductFormWrapper">
        <form method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            {{App::make('VariantHelper')->generateVariationCombinations($product)}}
        </form>
    </div>
</div>
@endsection