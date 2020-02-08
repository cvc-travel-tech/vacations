<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDestinationPackagesTable extends Migration
{

	public function up()
	{
		Schema::create('destination_packages', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('destination_id')->unsigned();
			$table->integer('package_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('destination_packages');
	}
}
