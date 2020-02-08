<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('gender')->comment('1:male;2:female')->nullable();
            $table->tinyInteger('language')->comment('1:english;2:german')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->text('special_requirements')->nullable();
            $table->tinyInteger('payment_method')->comment('1:upon arrival')->default(1);
            $table->integer('no_of_adults')->nullable();
            $table->integer('no_of_rooms')->nullable();
            $table->integer('no_of_children')->nullable();
            $table->tinyInteger('status')->comment('1:pending;2:confirmed;3:canceled')->nullable();
            $table->double('total_price',8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
