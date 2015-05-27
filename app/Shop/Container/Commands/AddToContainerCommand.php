<?php namespace TGL\Shop\Container\Commands;


class AddToContainerCommand
{
    public $quantity;
    public $variant_id;

    function __construct($quantity, $variant_id)
    {
        $this->quantity = $quantity;
        $this->variant_id = $variant_id;
    }
}