<?php namespace TGL\Shop\Products\Http\Sanitizers;


use TGL\Packages\Sanitizer\Sanitizer;
use TGL\Shop\Products\Repositories\ProductRepository;

class AddProductSanitizer extends Sanitizer
{


    protected $rules = [
        'name' => 'strtolower',
        'description' => 'strtolower',
        'short_description' => 'strtolower',
        'slug' => 'name'
    ];

    function __construct(ProductRepository $repo)
    {
        $this->repo = $repo;
    }
}