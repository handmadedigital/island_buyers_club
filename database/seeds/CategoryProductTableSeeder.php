<?php

use Faker\Factory as Faker;

class CategoryProductTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        $faker = Faker::create();

        DB::table('category_product')->truncate();

        foreach(range(1, 50) as $product)
        {
            for($i = 1; $i <= 2; $i++)
            {
                DB::table('category_product')->insert([
                    'product_id' => $product,
                    'category_id' => rand(1,6)
                ]);
            }
        }
    }
}