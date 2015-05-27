<?php namespace TGL\Shop\Products\Services;

use Illuminate\Support\Facades\DB;
use TGL\Shop\Products\Entities\ProductOptionValue;
use TGL\Shop\Products\Repositories\ProductRepository;

class ProductService
{
    /**
     * @var ProductRepository
     */
    protected $productRepo;

    /**
     * @param ProductRepository $productRepo
     */
    function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getProduct($slug)
    {
        return $this->productRepo->getProduct($slug);
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->productRepo->getProducts();
    }

    public function getProductOptions($selected_options)
    {
        $variant = DB::table('product_option_value_variant')->where('product_option_value_id', '=', $selected_options)->first();

        return $variant->variant_id;
    }
}