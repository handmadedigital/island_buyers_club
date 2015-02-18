<?php namespace TGL\Shop\Products\Entities;

use Illuminate\Database\Eloquent\Model;

class VariantImage extends Model
{
    protected $fillable = ['src'];

    /*******************************************/
    /*
     * Relationship Methods
     */
    /*******************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variant()
    {
        return $this->belongsTo('TGL\Shop\Products\Entities\VariantImage', 'variant_id');
    }
}