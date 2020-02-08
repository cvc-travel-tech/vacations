<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelPackagesTable extends Migration {

	public function up()
	{
		Schema::create('hotel_packages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('hotel_id')->unsigned();
			$table->integer('package_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('hotel_packages');
	}
}