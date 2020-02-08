<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageOptionsTable extends Migration
{

    public function up()
    {
        Schema::create('package_options', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
        });
    }


    public function down()
    {
        Schema::drop('package_options');
    }
}
