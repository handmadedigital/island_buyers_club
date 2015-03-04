<?php

use Faker\Factory as Faker;

class CategoriesTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        $faker = Faker::create();

        \TGL\Shop\Categories\Entities\Category::truncate();

        $categories = ['ladder', 'shovel', 'hardware', 'hammers', 'supplies', 'water supplies'];

        foreach($categories as $category)
        {
            \TGL\Shop\Categories\Entities\Category::create([
               'name' => $category,
                'slug' => $this->sluggify($category)
            ]);
        }
    }
}