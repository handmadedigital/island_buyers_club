<?php

use Faker\Factory as Faker;

class ProductImagesTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        $faker = Faker::create();

        \TGL\Shop\Products\Entities\ProductImage::truncate();

        foreach(range(1, 50) as $product)
        {
            foreach(range(1,3) as $image)
            {
                \TGL\Shop\Products\Entities\ProductImage::create([
                    'product_id' => $product,
                    'src' => $faker->imageUrl($width = 350, $height = 270)
                ]);
            }

        }
    }
}