<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('properties', function($table)
    {
      $table->increments('id');
      $table->integer('user_id');
      $table->string('name');
      $table->string('image_ids');
      $table->string('slug')->unique();
      $table->string('description');
      $table->string('type');
      $table->string('transaction_type');
      $table->integer('price');
      $table->string('currency');
      $table->string('area');
      $table->string('area_type');
      $table->integer('bedrooms');
      $table->integer('bathrooms');
      $table->string('address_number');
      $table->string('address_street');
      $table->string('address_ward');
      $table->string('address_district');
      $table->string('address_city');
      $table->string('contact_name');
      $table->string('contact_mobile');
      $table->string('contact_telephone');
      $table->string('contact_note');
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
		Schema::drop('properties');
	}

}
