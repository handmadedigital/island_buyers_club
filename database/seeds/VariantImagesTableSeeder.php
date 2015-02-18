<?php

use Faker\Factory as Faker;

class VariantImagesTableSeeder extends \Illuminate\Database\Seeder
{
    use \TGL\Tools\Slugger\Slugger;

    public function run()
    {
        $faker = Faker::create();

        \TGL\Shop\Products\Entities\VariantImage::truncate();

        foreach(range(1, 50) as $product)
        {
            foreach(range(1,3) as $image)
            {
                \TGL\Shop\Products\Entities\VariantImage::create([
                    'variant_id' => $product,
                    'src' => $faker->image()
                ]);
            }
        }
    }
}