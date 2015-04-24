<?php namespace TGL\Shop\Products\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'short_description', 'available_on', 'images'];






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
    public static function addProduct($name, $slug, $description, $short_description, $images)
    {
        $product = new static(compact('name', 'slug', 'description', 'short_description', 'images'));
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

    public function masterVariant()
    {
        return $this->hasOne('TGL\Shop\Products\Entities\Variant')->where('is_master', '=', 1);
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('TGL\Shop\Products\Entities\ProductImage');
    }

    public function categories()
    {
        return  $this->belongsToMany('TGL\Shop\Categories\Entities\Category');
    }
}