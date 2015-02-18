<?php namespace TGL\Shop\Products\Decorators;


class MasterVariantGenerator
{
    public function handle($command)
    {
        $command->master_variant = [
            'images' => $command->images,
            'price' => $command->price,
            'width' => $command->width,
            'length' => $command->length,
            'height' => $command->height,
        ];
    }
}