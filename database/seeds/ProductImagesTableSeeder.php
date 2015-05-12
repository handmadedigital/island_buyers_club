<?php

use Faker\Factory as Faker;

class ProductImagesTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        $src = ['diamond-brilliance.png', 'diamond-brite.png', 'durazzo.png', 'pearl-brite.png', 'pool-brite.png', 'river-rok.png'];

        $faker = Faker::create();

        \TGL\Shop\Products\Entities\ProductImage::truncate();

        foreach(range(1, 50) as $product)
        {
            foreach(range(1,3) as $image)
            {
                \TGL\Shop\Products\Entities\ProductImage::create([
                    'product_id' => $product,
                    'src' => $src[rand(0,5)]
                ]);
            }

        }
    }
}