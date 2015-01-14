<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function($table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('status', ['spam', 'pending', 'publish', 'trash'])->default('pending');
            $table->string('description');
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->enum('transaction_type', array('sale', 'rent'));
            $table->integer('price');
            // $table->enum('price_type', array('total', 'per square metter', 'per month'))->default('total');
            // $table->enum('currency', array('VND', 'SJC', 'USD'));
            $table->string('square'); // square metter
            $table->string('legal_document');
            $table->string('floors');
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
            $table->string('contact_telephone');
            $table->string('contact_email');
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
        Schema::drop('listings');
    }

}
