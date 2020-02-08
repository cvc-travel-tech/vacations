<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDestinationsTable extends Migration
{

    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('description');
            $table->string('slug'); // Field name same as your `saveSlugsTo`

            $table->string('name', 255);
            $table->integer('tmp_img')->unsigned()->nullable();
            $table->integer('img')->unsigned();
            $table->longText('locations')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('destinations');
    }
}
