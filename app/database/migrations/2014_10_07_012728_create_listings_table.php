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
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories');
            $table->enum('transaction_type', array('sale', 'rent'))->default('rent');
            $table->integer('price');
            // $table->enum('price_type', array('total', 'per square metter', 'per month'))->default('total');
            // $table->enum('currency', array('VND', 'SJC', 'USD'));
            $table->string('square'); // square metter
            $table->enum('legal_document', ['Sổ đỏ/Sổ hồng', 'Giấy tờ hợp lệ', 'GP Xây dựng', 'GP Kinh doanh']);
            $table->string('floors')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('contact_name');
            $table->string('contact_mobile');
            $table->string('contact_telephone');
            $table->string('contact_email')->nullable();
            $table->string('contact_note')->nullable();
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')
                ->references('id')
                ->on('districts');
            $table->integer('ward_id')->unsigned();
            $table->foreign('ward_id')
                ->references('id')
                ->on('wards');
            $table->string('address')->nullable();
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
