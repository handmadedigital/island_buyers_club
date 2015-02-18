<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::statement("SET foreign_key_checks = 0");


		$this->call('UserTableSeeder');
		$this->call('VariantTableSeeder');
		$this->call('ProductTableSeeder');
		$this->call('VariantImagesTableSeeder');
		$this->call('ProductOptionsTableSeeder');
		$this->call('ProductOptionValuesTableSeeder');
	}

}
