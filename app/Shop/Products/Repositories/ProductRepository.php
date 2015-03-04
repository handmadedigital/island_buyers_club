<?php namespace TGL\Shop\Products\Repositories;

use Carbon\Carbon;
use TGL\Core\Repositories\EloquentRepository;
use TGL\Shop\Products\Entities\Product;
use TGL\Shop\Products\Entities\ProductImage;
use TGL\Shop\Products\Entities\ProductOption;
use TGL\Shop\Products\Entities\ProductOptionValue;
use TGL\Shop\Products\Entities\Variant;
use TGL\Shop\Products\Entities\VariantImage;
use TGL\Shop\Products\Exceptions\ProductNotFoundException;

class ProductRepository extends EloquentRepository
{
    /**
     * @var Product
     */
    protected $model;

    /**
     * @param Product $model
     */
    function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * get a specific product
     *
     * @param $slug
     * @throws ProductNotFoundException
     * @return mixed
     */
    public function getProduct($slug)
    {
        $product =  $this->model->with('variants', 'options', 'options.values', 'variants.optionValues', 'variants.optionValues.option', 'images', 'masterVariant')->where('slug', '=', $slug)->first();

        if( ! $product) throw new ProductNotFoundException;

        return $product;
    }

    /**
     * get all the products
     *
     * @return mixed
     */
    public function getProducts()
    {
        return $this->model->with('variants', 'variants.optionValues', 'images', 'masterVariant')->latest()->paginate(15);
    }

    /**
     * @param $product
     * @param $master_variant
     */
    public function persist($product, $master_variant)
    {
        $this->model->name = $product->name;
        $this->model->slug = $product->slug;
        $this->model->description = $product->description;
        $this->model->short_description = $product->short_description;
        $this->model->available_on = Carbon::now();

        $this->model->save();

        $this->addProductImages($product);

        $this->AddMasterVariant($master_variant);

    }

    /**
     * @param $product
     * @param $master_variant
     * @param $variations
     * @return Product
     */
    public function addVariableProduct($product, $master_variant, $variations)
    {
        $this->persist($product, $master_variant);

        $this->addOptions($variations);

        return $this->model;
    }

    /**
     * @param $master_variant
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function AddMasterVariant($master_variant)
    {
        $variant_model = new Variant([
            'is_master' => true,
            'price' => $master_variant['price'],
            'width' => $master_variant['width'],
            'length' => $master_variant['length'],
            'height' => $master_variant['height'],
        ]);

        $variant = $this->model->variants()->save($variant_model);
        return $variant;
    }

    /**
     * @param $variations
     */
    private function addOptions($variations)
    {
        $variations_amount = count($variations);

        for ($i = 0; $i < $variations_amount; $i++)
        {
            $option = new ProductOption(['name' => $variations[$i]['option']]);

            $product_option = $this->model->options()->save($option);

            $this->addOptionValues($variations, $i, $product_option);
        }
    }

    /**
     * @param $variations
     * @param $i
     * @param $product_option
     */
    private function addOptionValues($variations, $i, $product_option)
    {
        foreach ($variations[$i]['option_value'] as $option_value)
        {
            $values = new ProductOptionValue(['name' => $option_value]);
            $product_option->values()->save($values);
        }
    }

    /**
     * @param $product
     */
    private function addProductImages($product)
    {
        foreach($product->images as $image) {
            $product_image = new ProductImage([
                'src' => $image,
            ]);

            $this->model->images()->save($product_image);
        }
    }
}