<?php namespace TGL\Packages\CommandBus;


trait CommandTrait
{
    public function dispatch($command, array $input = null, $decorators = [])
    {
        return app('TGL\Packages\CommandBus\CommandBus')->dispatch($command, $input, $decorators);
    }
}