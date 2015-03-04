<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use TGL\Shop\Products\Entities\Product;

class ProductTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $faker = Faker::create();

        \TGL\Shop\Products\Entities\Product::truncate();

        foreach(range(1, 50) as $index)
        {
            $name = $faker->firstName;

            \TGL\Shop\Products\Entities\Product::create([
                'name' => $name,
                'slug' => $this->sluggify($name.rand(1000,9999)),
                'description' => $faker->paragraph(),
                'short_description' => $faker->sentence(),
                'available_on' => Carbon::now(),
            ]);
        }
    }
}

