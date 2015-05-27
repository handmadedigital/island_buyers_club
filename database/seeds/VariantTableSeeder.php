<?php

use Faker\Factory as Faker;
use TGL\Shop\Products\Entities\Variant;

class VariantTableSeeder extends \Illuminate\Database\Seeder
{

    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        $faker = Faker::create();

        Variant::truncate();

        $i = 1;

        foreach(range(1, 33) as $index)
        {
            Variant::create([
                'product_id' => $i,
                'height' => $faker->numberBetween(10, 30),
                'width' => $faker->numberBetween(10, 30),
                'length' => $faker->numberBetween(10, 30),
                'weight' => $faker->numberBetween(10, 30),
                'price' => $faker->numberBetween(100, 7500),
                'quantity' => $faker->numberBetween(10, 30),
                'is_master' => true
            ]);

            $i++;
        }
    }
}