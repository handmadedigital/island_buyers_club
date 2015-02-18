<?php namespace TGL\Shop\Products\Commands;


class AddVariantCommand
{
    public $option_ids;
    public $price;
    public $product_id;

    function __construct($option_ids, $price, $product_id)
    {
        $this->option_ids = $option_ids;
        $this->price = $price;
        $this->product_id = $product_id;
    }
}