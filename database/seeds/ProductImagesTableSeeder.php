<?php

use Faker\Factory as Faker;

class ProductImagesTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        $src = [
            'contractors-choice.png',
            'contractors-choice-multi-purpose.png',
            'diamond-brilliance.png',
            'dimond-brite.png',
            'durazzo.png',
            'fast-set-thin-set-mortar.png',
            'flex-set.png',
            'floor-and-wall-thin-set.png',
            'multi-crete.png',
            'multi-lite.png',
            'pearl-brite.png',
            'peel-n-seal.png',
            'peel-seal-a.png',
            'peel-seal-alum.png',
            'peel-seal-power.png',
            'peel-seal-shrink.png',
            'PEEL-SEAL-WHITE.png',
            'pool-brite.png',
            'porcilain-set.png',
            'premium-sander-thin-set.png',
            'river-rok.png',
            'shingle-starter.png',
            'shingle-starter-2.png',
            'southern-sanded-thin-set.png',
            'storm-trooper.png',
            'ultra-crete.png',
            'unsanded-thin-set.png',
            'wind-and-water-seal.png',
            'window-water-seal.png',
            '2ft-type-i-fiberglass.png',
            '6ft-typa-iaa.png',
            '6ft-type-i-fiberglass.png',
            '8ft-type-i-fiberglass.png',
        ];

        $faker = Faker::create();



        \TGL\Shop\Products\Entities\ProductImage::truncate();

        $i = 0;

        foreach(range(1, 33) as $product)
        {
            \TGL\Shop\Products\Entities\ProductImage::create([
                'product_id' => $product,
                'src' => $src[$i]
            ]);

            $i++;

        }
    }
}

