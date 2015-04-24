<?php namespace TGL\Core\Decorators;

use Carbon\Carbon;
use TGL\Packages\CommandBus\Contracts\CommandBus;

class ImageUploader implements CommandBus
{

    public function execute($command)
    {
        foreach($command->images as $image)
        {
            $image_name = $image->getClientOriginalName();

            $timestamp = Carbon::now()->getTimestamp();

            $unique_name = str_replace(" ", "-",$timestamp.rand(100,999).$image_name);

            $command->image_names[] = $unique_name;

            $image->move(public_path().'/static/img/', $unique_name);
        }
    }
}