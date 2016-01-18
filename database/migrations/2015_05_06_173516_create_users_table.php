<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('voornaam');
			$table->string('achternaam');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('afbeelding');
			$table->text('over');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('googleplus');
			$table->string('linkedin');
			$table->integer('role_id')->unsigned();
			$table->integer('plan_id')->unsigned();
			$table->timestamp('verloopdatum');
			$table->timestamp('last_login');
			$table->integer('benodigd_id')->unsigned()->nullable();
			$table->string('tab_app');
			$table->string('tab_app_link');
			$table->integer('klantnummer');
			$table->integer('conversiepixel');
			$table->rememberToken();
			$table->timestamps();

			$table->foreign('role_id')
				->references('id')
				->on('roles')
				->onDelete('cascade');

			$table->foreign('benodigd_id')
				->references('id')
				->on('benodigdheden')
				->onDelete('cascade');

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
		Schema::drop('users');
	}

}
