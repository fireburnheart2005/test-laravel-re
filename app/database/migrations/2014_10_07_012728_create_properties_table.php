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
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('type_id');
            $table->string('category_id');
            $table->enum('transaction_type', array('sale', 'rent'));
            $table->integer('price');
            // $table->enum('price_type', array('total', 'per square metter', 'per month'))->default('total');
            // $table->enum('currency', array('VND', 'SJC', 'USD'));
            $table->string('square'); // square metter
            $table->string('legal_document');
            $table->string('total_floor');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->string('address');
            $table->integer('ward_id')->unsigned();
            $table->foreign('ward_id')
                ->references('id')
                ->on('wards');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')
                ->references('id')
                ->on('districts');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
            $table->string('contact_name');
            $table->string('contact_mobile');
            $table->string('contact_tel');
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
