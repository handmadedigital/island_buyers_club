<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use TGL\Shop\Products\Entities\Product;

class ProductTableSeeder extends AbstractSeeder
{
    public function run()
    {
        $faker = Faker::create();

        DB::statement("SET foreign_key_checks = 0");

        \TGL\Shop\Products\Entities\Product::truncate();

        $names = [
            'contractors choice',
            'contractors choice multi purpose',
            'diamond brilliance',
            'diamond brite',
            'durazzo',
            'fast set thing set mortar',
            'flex set',
            'floor and wall thin set',
            'marble set',
            'multi crete',
            'multi lite',
            'pearl brite',
            'peel n seal',
            'peel n seal aluminum',
            'peel n seal power',
            'peel n seal shrink',
            'peel n seal white',
            'pool brite',
            'porcelain set',
            'premium sander thin set',
            'river rok',
            'shingle starter',
            'shingle starter 2',
            'southern sanded thin set',
            'storm trooper',
            'ultra crete',
            'unsanded think set',
            'wind and water seal',
            'window water seal',
            '2ft type i fiberglass',
            '6ft typa iaa',
            '6ft type i fiberglass',
            '8ft type i fiberglass',
            'HDG common nails 50lbs',
            'HDG spiral finish nails 50lbs',
            'brite duplex nails 50lbs',
            'bulk common nails 50lbs',
            'aluminum step ladder type 1A',
            'aluminum extension ladder type 1A',
            'fiberglass step ladder type 1A',
            'fiberglass step ladder tpe 1AA',
            'fiberglass extension ladder type 1A',
            'steel air tyre wheel barrow',
            'steel pneumatic tyre wheel barrow',
            'poly stray air tyre wheel barrow',
            'poly tray dual air tyre wheel barrow'
        ];

        foreach($names as $name)
        {
            \TGL\Shop\Products\Entities\Product::create([
                'name' => $name,
                'slug' => $this->sluggify($name.rand(1000,9999)),
                'description' => $faker->paragraph(10),
                'short_description' => $faker->sentence(2),
                'available_on' => Carbon::now(),
            ]);
        }
    }
}

