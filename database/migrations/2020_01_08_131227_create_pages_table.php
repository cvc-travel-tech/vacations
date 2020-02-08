<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('slug', 255)->nullable();
			$table->string('name')->nullable();
			$table->integer('templete_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}