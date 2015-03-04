<?php namespace TGL\Shop\Products\Decorators;

use TGL\Packages\CommandBus\Contracts\CommandBus;
use TGL\Shop\Products\Http\Sanitizers\AddProductSanitizer;

class AddProductSerializer implements CommandBus
{
    /**
     * @var AddProductSerializer
     */
    protected $newProductSerializer;

    /**
     * @param AddProductSanitizer $newProductSerializer
     */
    function __construct(AddProductSanitizer $newProductSerializer)
    {
        $this->newProductSerializer = $newProductSerializer;
    }

    public function execute($command)
    {
        $this->newProductSerializer->sanitize($command);
    }
}