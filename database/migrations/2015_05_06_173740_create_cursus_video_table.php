<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursusVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursus_video', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cursus_id')->unsigned();
			$table->integer('video_id')->unsigned();
			$table->timestamps();

			$table->foreign('cursus_id')
				->references('id')
				->on('cursussen')
				->onDelete('cascade');

			$table->foreign('video_id')
				->references('id')
				->on('videos')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursus_video');
	}

}
