<?php

use Faker\Factory as Faker;

class VariantTableSeeder extends \Illuminate\Database\Seeder
{
    use \TGL\Tools\Slugger\Slugger;

    public function run()
    {
        $faker = Faker::create();

        \TGL\Shop\Products\Entities\Variant::truncate();

        foreach(range(1, 50) as $index)
        {
            foreach(range(1,10) as $value)
            {
                $master = false;

                if($value == 1) $master = true;
                \TGL\Shop\Products\Entities\Variant::create([
                    'product_id' => $index,
                    'height' => $faker->randomNumber(),
                    'width' => $faker->randomNumber(),
                    'length' => $faker->randomNumber(),
                    'price' => $faker->randomNumber(),
                    'quantity' => rand(0,150),
                    'is_master' => $master
                ]);
            }
        }
    }
}