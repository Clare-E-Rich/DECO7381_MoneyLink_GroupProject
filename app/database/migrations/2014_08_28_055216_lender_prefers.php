<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LenderPrefers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lender_prefers', function($table) {
			$table-> integer('user_id')-> unsigned();
			$table-> decimal('amount',10,2);
			$table-> integer('term');
			$table-> float('pref_rate');
			$table -> primary('user_id');
		});

		Schema::table('lender_prefers', function($table) {
			$table-> foreign('user_id')-> references('id')-> on('users')
				  -> onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('lender_prefers');
	}

}
