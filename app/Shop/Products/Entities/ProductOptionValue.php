<?php namespace TGL\Shop\Products\Entities;


use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    protected $fillable = ['name'];

    /*******************************************/
    /*
     * Relationship Methods
     */
    /*******************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function option()
    {
        return $this->belongsTo('TGL\Shop\Products\Entities\ProductOption', 'product_option_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function variants()
    {
        return $this->belongsToMany('TGL\Shop\Products\Entities\Variant');
    }
}