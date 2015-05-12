<?php namespace TGL\Shop\Products\Http\Controllers;

use TGL\Core\Http\Controllers\Controller;
use TGL\Packages\Flasher\Flasher;
use TGL\Shop\Products\Commands\AddProductCommand;
use TGL\Shop\Products\Commands\AddVariableProductCommand;
use TGL\Shop\Products\Http\Requests\AddProductRequest;
use TGL\Shop\Products\Http\Requests\AddVariableProductRequest;
use TGL\Shop\Products\Http\Requests\GetProductOptionsRequest;
use TGL\Shop\Products\Services\ProductService;

class ProductController extends Controller
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
     * Get a specific product
     *
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function getProduct($slug)
    {
        $product = $this->productService->getProduct($slug);

        return view('products.single-product', compact('product'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getProducts()
    {
        $products = $this->productService->getProducts();

        return view('products.products', compact('products'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getAddProduct()
    {
        return view('products.add-product');
    }

    /**
     * @param AddProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddProduct(AddProductRequest $request)
    {
        $this->dispatch(AddProductCommand::class, null, [
            'TGL\Core\Decorators\ImageUploader',
            'TGL\Shop\Products\Decorators\AddProductSerializer',
            'TGL\Shop\Products\Decorators\CreateMasterVariant',
        ]);

        Flasher::message('Product Added!');

        return redirect()->back();
    }

    /**
     * @param AddVariableProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddVariableProduct(AddVariableProductRequest $request)
    {
        $product = $this->dispatch(AddVariableProductCommand::class, null,[
            'TGL\Core\Decorators\ImageUploader',
            'TGL\Shop\Products\Decorators\AddProductSerializer',
            'TGL\Shop\Products\Decorators\CreateMasterVariant',
            'TGL\Shop\Products\Decorators\CreateVariants',
        ]);

        Flasher::message('Product Added!');

        return redirect()->route('add.variant.variations', $attributes = ['product_slug' => $product->slug]);
    }

    public function getProductOptions(GetProductOptionsRequest $request)
    {
        $this->productService->getProductOptions($request->selected_options, $request->next_option_id);
    }
}