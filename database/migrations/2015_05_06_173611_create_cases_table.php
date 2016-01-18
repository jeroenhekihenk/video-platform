<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('logo');
			$table->string('uitgelichte_afbeelding');
			$table->string('titel');
			$table->string('slug');
			$table->string('klant');
			$table->string('link_klant');
			$table->string('link_project');
			$table->integer('categorie_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('content');
			$table->string('excerpt');
			$table->timestamps();

			$table->foreign('categorie_id')
				->references('id')
				->on('categorieen')
				->onDelete('cascade');

			$table->foreign('user_id')
				->references('id')
				->on('users')
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
		Schema::drop('cases');
	}

}
