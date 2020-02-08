<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplatesTable extends Migration {

	public function up()
	{
		Schema::create('templates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title')->nullable();
			$table->longText('content')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('templates');
	}
}