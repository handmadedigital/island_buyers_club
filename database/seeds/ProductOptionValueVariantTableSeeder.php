<?php

use Illuminate\Support\Facades\DB;

class ProductOptionValueVariantTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $value_variant = DB::table('product_option_value_variant');

        DB::statement("SET foreign_key_checks = 0");

        $value_variant->truncate();

        $value = 1;
        foreach(range(1, 300) as $variant)
        {
            if($variant %10 == 0 or $variant == 1)
            {

                echo "master variant \n";
            }
            else
            {
                $value_variant->insert([
                    'product_option_value_id' => $value,
                    'variant_id' => $variant,
                ]);

                $value++;
            }
        }

    }
}