<?php namespace TGL\Shop\Products\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'short_description', 'available_on'];






    /*******************************************/
    /*
    /* Command Methods
    /*
    /*******************************************/
    /**
     * @param $name
     * @param $slug
     * @param $description
     * @param $short_description
     * @return static
     */
    public static function addProduct($name, $slug, $description, $short_description)
    {
        $product = new static(compact('name', 'slug', 'description', 'short_description'));
        return $product;
    }




    /*******************************************/
    /*
     * Relationship Methods
     */
    /*******************************************/

    /**
     * product has many variants
     * a variant is what makes the product "unique"
     * variant holds the price the sku, qty, etc
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variants()
    {
        return $this->hasMany('TGL\Shop\Products\Entities\Variant');
    }

    /**
     * product has many product_options
     * product_options = sizes, colors, etc.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany('TGL\Shop\Products\Entities\ProductOption');
    }
}