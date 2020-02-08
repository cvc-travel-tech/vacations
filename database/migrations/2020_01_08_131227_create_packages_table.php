<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration
{

    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('duration')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('images')->nullable();
            $table->longText('itinerary')->nullable();
            $table->longText('inclusion')->nullable();
            $table->longText('trip_map')->nullable(); // javascrpt
            $table->string('client_reviews')->nullable();
            $table->longText('options')->nullable(); // json malti select
            $table->string('flight_prices')->nullable(); // سعر الطييران
            $table->string('trip_video')->nullable();
            $table->string('type')->nullable(); // النوع
            $table->string('slug')->nullable();
        });
    }


    public function down()
    {
        Schema::drop('packages');
    }
}
