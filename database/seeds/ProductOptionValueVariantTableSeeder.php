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

        $product_option_id = 1;

        $variant = 2;

        foreach(range(1, 300) as $i)
        {
            foreach(range(1, 9) as $index)
            {
                if($product_option_id % 3 != 1)
                {
                    if($variant % 10 == 0)
                    {
                        echo "master variant do not add";
                    }
                    else
                    {
                        $value_variant->insert([
                            'product_option_value_id' => $product_option_id,
                            'variant_id' => $variant
                        ]);

                        $product_option_id++;
                    }
                }
                elseif($product_option_id == 1)
                {
                    if($variant % 10 == 0 or $variant == 1)
                    {
                        echo "master variant do not add";
                    }
                    else
                    {
                        $value_variant->insert([
                            'product_option_value_id' => $product_option_id,
                            'variant_id' => $variant
                        ]);

                        $product_option_id++;
                    }
                }
                else
                {
                    $product_option_id =  1;
                    $variant++;
                }
            }

            $product_option_id++;
            $variant++;
        }

    }
}


