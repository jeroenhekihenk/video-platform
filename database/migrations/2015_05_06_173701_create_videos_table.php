<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('link');
			$table->string('thumbnail');
			$table->text('titel');
			$table->text('tool1_tekst')->nullable();
			$table->string('tool1_link')->nullable();
			$table->text('tool2_tekst')->nullable();
			$table->string('tool2_link')->nullable();
			$table->text('tool3_tekst')->nullable();
			$table->string('tool3_link')->nullable();
			$table->text('tool4_tekst')->nullable();
			$table->string('tool4_link')->nullable();
			$table->integer('plan_id')->unsigned();
			$table->integer('hoofdstuk');
			$table->timestamps();

			$table->foreign('plan_id')
				->references('id')
				->on('plans')
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
		Schema::drop('videos');
	}

}
