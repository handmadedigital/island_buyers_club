<?php namespace TGL\Shop\Products\Entities;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = ['name', 'price', 'is_master'];

    /*******************************************/
    /*
     * Relationship Methods
     */
    /*******************************************/


    /**
     * a variant belongs to a model that holds
     * information that pertains to all of the variants belonging
     * to that product. This is not to be confused with the product properties
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('TGL\Shop\Products\Entities\Product');
    }

    /**
     * a variant belongs and has many product option values
     * product options values = red, pink, small, xl, etc
     * a product option value belongs to a product option
     * product option  = size, color
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function optionValues()
    {
        return $this->belongsToMany('TGL\Shop\Products\Entities\ProductOptionValue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('TGL\Shop\Products\Entities\VariantImage');
    }
}