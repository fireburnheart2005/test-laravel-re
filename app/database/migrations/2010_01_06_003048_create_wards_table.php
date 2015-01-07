<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('district_id')->unsigned();
			$table->foreign('district_id')->references('id')
				->on('districts')->onDelete('cascade')
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
		Schema::drop('wards');
	}

}
