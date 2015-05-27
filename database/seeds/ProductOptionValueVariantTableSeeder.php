<?php

use Illuminate\Support\Facades\DB;

class ProductOptionValueVariantTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $value_variant = DB::table('product_option_value_variant');

        DB::statement("SET foreign_key_checks = 0");

        $value_variant->truncate();

        $product_option_id = 1;

        $variant_id = 1;

        for($v = 0; $v < 101; $v++)
        {
            if($v % 3 == 0)
            {
                $variant_id++;
            }

            if($v != 0)
            {
                if($v % 27 == 0) $product_option_id++;
            }

            if($v != 1)
            {
                if($v % 3 == 0)
                {
                    if($v != 0)  $product_option_id -= 2;
                }

                if($variant_id % 10 != 0)
                {
                    $value_variant->insert([
                        'product_option_value_id' => $product_option_id,
                        'variant_id' => $variant_id
                    ]);
                }

                $product_option_id++;
            }
        }
    }
}


