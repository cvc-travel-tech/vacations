<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSightseeingsTable extends Migration
{

    public function up()
    {
        Schema::create('sightseeings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('description');
            $table->string('slug'); // Field name same as your `saveSlugsTo`
            $table->string('name', 255);
            $table->integer('destination_id')->unsigned()->nullable();
            $table->integer('img')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('sightseeings');
    }
}
