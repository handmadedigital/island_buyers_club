<?php namespace TGL\Shop\Orders\Commands;


class AddOrderCommand
{
    public $variant_id;
    public $price;

    function __construct($variant_id, $price)
    {
        $this->variant_id = $variant_id;
        $this->price = $price;
    }
}