<?php namespace TGL\Shop\Products\Commands;


class AddVariableProductCommand
{
    public $name;
    public $description;
    public $short_description;
    public $images;
    public $width;
    public $length;
    public $height;
    public $price;
    public $options;
    public $option_values;

    function __construct($name, $description, $short_description, $images, $width, $length, $height, $price, $options, $option_values)
    {
        $this->name = $name;
        $this->description = $description;
        $this->short_description = $short_description;
        $this->images = $images;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->price = $price;
        $this->options = $options;
        $this->option_values = $option_values;
    }
}