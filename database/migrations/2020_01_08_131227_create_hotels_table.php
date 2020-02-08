<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelsTable extends Migration
{

    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 255);
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('slug'); // Field name same as your `saveSlugsTo`
            $table->longText('images')->nullable();
            $table->longText('overview');
            $table->integer('destination_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('hotels');
    }
}
