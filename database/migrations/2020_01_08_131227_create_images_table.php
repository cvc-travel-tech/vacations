<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('file_path')->nullable();
			$table->string('file_name')->nullable();
			$table->string('file_type')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}