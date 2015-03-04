<?php namespace TGL\Shop\Products\Handlers;


use TGL\Shop\Products\Commands\AddVariableProductCommand;
use TGL\Shop\Products\Entities\Product;
use TGL\Shop\Products\Repositories\ProductRepository;

class AddVariableProductCommandHandler
{
    /**
     * @var ProductRepository
     */
    protected $productRepo;

    function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    /**
     * @param AddVariableProductCommand $command
     * @return Product
     */
    public function handle(AddVariableProductCommand $command)
    {
        $product = Product::addProduct($command->name, $command->slug, $command->short_description, $command->description);

        $this->productRepo->addVariableProduct($product, $command->master_variant, $command->variations);

        return $product;
    }
}