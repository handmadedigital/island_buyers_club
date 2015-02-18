<?php namespace TGL\Shop\Products\Decorators;

use TGL\Shop\Products\Entities\Product;
use TGL\Shop\Products\Repositories\ProductRepository;
use TGL\Tools\Slugger\Slugger;

class ProductSlugGenerator
{
    use Slugger;

    public function handle($command)
    {
        $command->slug = $this->sluggifyUnique($command->username, new ProductRepository(new Product));

        return $command;
    }
}