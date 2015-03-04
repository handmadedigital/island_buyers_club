<?php namespace TGL\Shop\Products\Decorators;

use TGL\Packages\CommandBus\Contracts\CommandBus;

class CreateVariants implements CommandBus
{

    public function execute($command)
    {
        $variations = [];

        $option_amount = count($command->options);

        for($i = 0; $i < $option_amount; $i++)
        {
            $parsed_values = explode('|', $command->option_values[$i]);

            $variations[] = [
                'option' => $command->options[$i],
                'option_value' => $parsed_values,
            ];
        }
        $command->variations = $variations;
    }
}