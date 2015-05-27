<?php namespace TGL\Shop\Orders\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
		'user_id',
		'variant_id',
		'order_id',
		'price',
	];

	/****************************************/
	/*
	 * COMMANDS
	 */
	/****************************************/

	public static function add($variant_id, $price)
	{
		return new static(compact('variant_id', 'price'));
	}

	/****************************************/
	/*
	 * RELATIONSHIPS
	 */
	/****************************************/

	public function variant()
	{
		return $this->belongsTo('TGL\Shop\Products\Entities\Variant');
	}

}
