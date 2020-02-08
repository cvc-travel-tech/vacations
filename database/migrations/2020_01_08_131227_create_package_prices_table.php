<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagePricesTable extends Migration
{

    public function up()
    {
        Schema::create('package_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('package_id')->unsigned();
            $table->date('date')->nullable();
            $table->integer('solo')->nullable();
            $table->integer('p_p')->nullable();
            $table->integer('3_person')->nullable();
            $table->integer('sgl')->nullable();
            $table->integer('hotel_solo')->nullable();
            $table->integer('hotel_p_p')->nullable();
            $table->integer('hotel_3_person')->nullable();
            $table->integer('hotel_sgl')->nullable();
        });
    }


    public function down()
    {
        Schema::drop('package_prices');
    }
}
