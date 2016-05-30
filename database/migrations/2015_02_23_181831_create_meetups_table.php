<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meetups', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('location');
            $table->string('image_path');
            $table->string('url');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');

			$table->timestamps();
            $table->timestamp('published_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meetups');
	}

}
