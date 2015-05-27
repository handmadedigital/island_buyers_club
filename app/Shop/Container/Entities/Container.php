<?php namespace TGL\Shop\Container\Entities;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
	/**
	 * @var array
     */
	protected $fillable = ['user_id', 'variant_id', 'quantity'];

	/**
	 * @var string
     */
	protected $table = 'container';


	/***********************/
	/*
	 * COMMANDS
	 */
	/***********************/

	/**
	 * @param $variant_id
	 * @param $quantity
	 * @return static
     */
	public static function add($variant_id, $quantity)
	{
		return new static(compact('variant_id', 'quantity'));
	}

	/***********************/
	/*
	 * RELATIONSHIPS
	 */
	/***********************/

	public function variant()
	{
		return $this->belongsTo('TGL\Shop\Products\Entities\Variant');
	}

}
