<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('variant_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('variant_id')->unsigned()->index();
			$table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');
			$table->string('src')->unique();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('variant_images');
	}

}
