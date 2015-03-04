<?php namespace TGL\Shop\Products\Http\Controllers;

use TGL\Core\Http\Controllers\Controller;
use TGL\Shop\Products\Services\ProductService;

class VariantController extends Controller
{
    /**
     * @var ProductService
     */
    protected $productService;

    /**
     * @param ProductService $productService
     */
    function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @param $product_slug
     * @return \Illuminate\View\View
     */
    public function getAddVariantVariations($product_slug)
    {
        $product = $this->productService->getProduct($product_slug);

        return view('products.variants.add-variations', compact('product'));
    }
}