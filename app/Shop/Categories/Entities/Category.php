<?php namespace TGL\Shop\Categories\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /***************************/
    /*
     * RELATIONSHIP METHODS
     */
    /***************************/

    public function products()
    {
        return $this->belongsToMany('TGL\Shop\Products\Entities\Product');
    }
}