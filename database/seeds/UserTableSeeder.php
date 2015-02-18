<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use TGL\Users\Entities\User;

class UserTableSeeder extends \Illuminate\Database\Seeder
{
    use \TGL\Tools\Slugger\Slugger;

    public function run()
    {
        $faker = Faker::create();

        User::truncate();

        User::create([
            'username' => 'rodzzlessa',
            'slug' => 'rodzzlessa',
            'first_name' => 'rodrigo',
            'last_name' => 'lessa',
            'email' => 'rodrigo@tgld.co',
            'password' => Hash::make('ro'),
            'is_admin' => true
        ]);

        foreach(range(1, 20) as $index)
        {
            $username = $faker->userName;

            User::create([
                'username' => $username,
                'slug' => $this->sluggify($username),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('ro'),
                'is_admin' => false
            ]);
        }
    }
}