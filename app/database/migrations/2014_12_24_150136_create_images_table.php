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
            $table->string('extension');
            $table->text('title');
            $table->integer('listing_id')->unsigned();
            $table->foreign('listing_id')
                ->references('id')
                ->on('listings')
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
