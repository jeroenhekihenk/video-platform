<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenodigdhedenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('benodigdheden', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sportschoolnaam');
			$table->string('aanmeldemail');
			$table->string('logo');
			$table->string('foto1');
			$table->string('foto2');
			$table->string('foto3');
			$table->string('foto4');
			$table->string('foto5');
			$table->text('waaromsportschool');
			$table->string('teamfoto');
			$table->text('welkomstpagina');
			$table->text('bedankpagina');
			$table->string('recensie1_foto')->nullable();
			$table->string('recensie2_foto')->nullable();
			$table->string('recensie3_foto')->nullable();
			$table->string('recensie4_foto')->nullable();
			$table->string('recensie5_foto')->nullable();
			$table->string('recensie6_foto')->nullable();
			$table->text('recensie1_tekst')->nullable();
			$table->text('recensie2_tekst')->nullable();
			$table->text('recensie3_tekst')->nullable();
			$table->text('recensie4_tekst')->nullable();
			$table->text('recensie5_tekst')->nullable();
			$table->text('recensie6_tekst')->nullable();
			$table->string('recensie1_naam')->nullable();
			$table->string('recensie2_naam')->nullable();
			$table->string('recensie3_naam')->nullable();
			$table->string('recensie4_naam')->nullable();
			$table->string('recensie5_naam')->nullable();
			$table->string('recensie6_naam')->nullable();
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
		Schema::drop('benodigdheden');
	}

}
