<?php

use Faker\Factory as Faker;

class ProductImagesTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        $src = ['brushs-2.png', 'saw.png', 'screw-driver.png', 'tool-1.png','tool-2.png','hammer-1.png', 'hammer-2.png', 'mini-saw.png', 'nuts.png', 'paint-brush.png'];

        $faker = Faker::create();

        \TGL\Shop\Products\Entities\ProductImage::truncate();

        foreach(range(1, 50) as $product)
        {
            foreach(range(1,3) as $image)
            {
                \TGL\Shop\Products\Entities\ProductImage::create([
                    'product_id' => $product,
                    'src' => $src[rand(0,9)]
                ]);
            }

        }
    }
}