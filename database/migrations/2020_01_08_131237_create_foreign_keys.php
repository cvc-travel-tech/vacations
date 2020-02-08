<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('hotels', function(Blueprint $table) {
			$table->foreign('destination_id')->references('id')->on('destinations')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('destinations', function(Blueprint $table) {
			$table->foreign('tmp_img')->references('id')->on('images')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('destinations', function(Blueprint $table) {
			$table->foreign('img')->references('id')->on('images')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('pages', function(Blueprint $table) {
			$table->foreign('templete_id')->references('id')->on('templates')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('destination_packages', function(Blueprint $table) {
			$table->foreign('destination_id')->references('id')->on('destinations')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('destination_packages', function(Blueprint $table) {
			$table->foreign('package_id')->references('id')->on('destination_packages')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('hotel_packages', function(Blueprint $table) {
			$table->foreign('hotel_id')->references('id')->on('hotels')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('hotel_packages', function(Blueprint $table) {
			$table->foreign('package_id')->references('id')->on('packages')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('hotels', function(Blueprint $table) {
			$table->dropForeign('hotels_destination_id_foreign');
		});
		Schema::table('destinations', function(Blueprint $table) {
			$table->dropForeign('destinations_tmp_img_foreign');
		});
		Schema::table('destinations', function(Blueprint $table) {
			$table->dropForeign('destinations_img_foreign');
		});
		Schema::table('pages', function(Blueprint $table) {
			$table->dropForeign('pages_templete_id_foreign');
		});
		Schema::table('destination_packages', function(Blueprint $table) {
			$table->dropForeign('destination_packages_destination_id_foreign');
		});
		Schema::table('destination_packages', function(Blueprint $table) {
			$table->dropForeign('destination_packages_package_id_foreign');
		});
		Schema::table('hotel_packages', function(Blueprint $table) {
			$table->dropForeign('hotel_packages_hotel_id_foreign');
		});
		Schema::table('hotel_packages', function(Blueprint $table) {
			$table->dropForeign('hotel_packages_package_id_foreign');
		});
	}
}