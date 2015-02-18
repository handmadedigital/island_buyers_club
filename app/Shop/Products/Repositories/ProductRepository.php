<?php namespace TGL\Shop\Products\Repositories;

use Carbon\Carbon;
use TGL\Core\Repositories\EloquentRepository;
use TGL\Shop\Products\Entities\Product;
use TGL\Shop\Products\Entities\Variant;
use TGL\Shop\Products\Entities\VariantImage;

class ProductRepository extends EloquentRepository
{
    protected $model;

    function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * get a specific product
     *
     * @param $slug
     * @return mixed
     */
    public function getProduct($slug)
    {
        return $this->model->with('variants', 'options', 'options.values', 'variants.optionValues', 'variants.optionValues.option', 'variants.images')->where('slug', '=', $slug)->first();
    }

    /**
     * get all the products
     *
     * @return mixed
     */
    public function getProducts()
    {
        return $this->model->with('variants', 'variants.optionValues')->latest()->get();
    }

    public function persist($product, $master_variant)
    {
        $this->model->name = $product->name;
        $this->model->slug = $product->slug;
        $this->model->description = $product->description;
        $this->model->short_description = $product->short_description;
        $this->model->available_on = Carbon::now();

        $this->model->save();

        $variant_model = new Variant([
            'is_master' => true,
            'price' => $master_variant['price'],
            'width' => $master_variant['price'],
            'length' => $master_variant['length'],
            'height' => $master_variant['height'],
        ]);

        $variant = $this->model->variants()->save($variant_model);

        foreach ($master_variant['images'] as $image)
        {
            $variant_image = new VariantImage([
                'src' => $image
            ]);

            $variant->images()->save($variant_image);
        }
    }
}