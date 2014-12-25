<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name'); // can_ho_catavil_150136
            $table->text('title');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::drop('images');
    }

}
