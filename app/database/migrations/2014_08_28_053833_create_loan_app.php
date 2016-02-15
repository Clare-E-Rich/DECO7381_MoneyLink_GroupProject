<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanApp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan_app', function($table) {
			$table-> increments('loan_id');
			$table-> Integer('user_id')-> unsigned();
			$table-> decimal('amount',10,2);
			$table-> integer('term');
			$table-> float('pref_rate');
			$table-> string('purpose');
			$table-> mediumText('description');
			$table-> unique('loan_id');
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
		Schema::drop('loan_app');
	}

}
