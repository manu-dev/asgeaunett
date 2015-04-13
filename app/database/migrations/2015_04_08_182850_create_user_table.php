<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function($t) {
			$t->increments('id');
			$t->string('nom');
			$t->string('prenom');
			$t->integer('numlicence');
			$t->string('mail');
			$t->string('adresse');
			$t->integer('cp');
			$t->string('ville');
			$t->integer('pointsDP');
			$t->integer('pointM');
			$t->integer('pointCal');
			$t->string('username', 16);
			$t->string('password', 64);
			$t->integer('cat_id');
			$t->date('dateNaiss');
			$t->boolean('type');
			$t->integer('idPagePerso');
			$t->string('statut');
			$t->string('remember_token', 100)->nullable();
			$t->timestamps();
			$t->foreign('idPagePerso')->references('id')->on('pages');
			$t->foreign('cat_id')->references('id')->on('categories');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('players');
	}

}
