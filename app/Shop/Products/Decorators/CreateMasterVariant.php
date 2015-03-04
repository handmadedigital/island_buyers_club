<?php namespace TGL\Shop\Products\Decorators;

use TGL\Packages\CommandBus\Contracts\CommandBus;

class CreateMasterVariant implements CommandBus
{
    public function execute($command)
    {
        $command->master_variant = [
            'width' => $command->width,
            'length' => $command->length,
            'height' => $command->height,
            'price' => $command->price,
        ];
    }
}