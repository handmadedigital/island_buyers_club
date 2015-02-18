<?php namespace TGL\Shop\Products\Handlers;

use TGL\Shop\Products\Commands\AddProductCommand;
use TGL\Shop\Products\Entities\Product;
use TGL\Shop\Products\Repositories\ProductRepository;

class AddProductCommandHandler
{
    /**
     * @var ProductRepository
     */
    protected $productRepo;

    function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function handle(AddProductCommand $command)
    {
        $product = Product::addProduct($command->name, $command->slug, $command->description, $command->short_description);

        $this->productRepo->persist($product, $command->master_variant);
    }
}