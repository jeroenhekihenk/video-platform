<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titel');
			$table->text('content');
			$table->string('snippet');
			$table->string('slug');
			$table->integer('user_id')->unsigned();
			$table->integer('categorie_id')->unsigned();
			$table->string('uitgelichte_afbeelding');
			$table->timestamp('published_at');
			$table->timestamps();

			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');

			$table->foreign('categorie_id')
				->references('id')
				->on('categorieen')
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
		Schema::drop('posts');
	}

}
