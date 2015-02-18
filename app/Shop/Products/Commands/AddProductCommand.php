<?php namespace TGL\Shop\Products\Commands;

class AddProductCommand
{
    public $name;
    public $description;
    public $short_description;
    public $images;
    public $width;
    public $length;
    public $height;
    public $price;

    function __construct($name, $description, $short_description, $images, $width, $length, $height, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->short_description = $short_description;
        $this->images = $images;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->price = $price;
    }
}