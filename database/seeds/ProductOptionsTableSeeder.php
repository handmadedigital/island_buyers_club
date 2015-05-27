<?php

use Illuminate\Support\Facades\DB;

class ProductOptionsTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::statement("SET foreign_key_checks = 0");

        \TGL\Shop\Products\Entities\ProductOption::truncate();


//        $options = ['size', 'color', 'gender'];
//
//        foreach(range(1, 30) as $product)
//        {
//            foreach($options as $option)
//            {
//                \TGL\Shop\Products\Entities\ProductOption::create([
//                    'product_id' => $product,
//                    'name' => $option
//                ]);
//            }
//        }
    }
}