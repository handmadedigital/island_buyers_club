<?php namespace TGL\Shop\Products\Services;

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

    public function getProductOptions($selected_options, $next_option_id)
    {
        $possible_variants = [];

        foreach($selected_options as $selected_option)
        {
            $option_value = ProductOptionValue::where('id', '=', $selected_option)->first();

            foreach($option_value->variants as $variant)
            {
                $possible_variants[] = $variant->id;
            }
        }

        dd($possible_variants);
    }
}