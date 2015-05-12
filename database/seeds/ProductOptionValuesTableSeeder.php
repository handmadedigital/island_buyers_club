<?php

use Illuminate\Support\Facades\DB;

class ProductOptionValuesTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::statement("SET foreign_key_checks = 0");

        \TGL\Shop\Products\Entities\ProductOptionValue::truncate();

        $values = ['opt1', 'opt2', 'opt3'];

        foreach(range(1, 90) as $options)
        {
            foreach(range(0,2) as $index)
            {
                \TGL\Shop\Products\Entities\ProductOptionValue::create([
                    'product_option_id' => $options,
                    'name' => $values[$index]
                ]);
            }
        }
    }
}