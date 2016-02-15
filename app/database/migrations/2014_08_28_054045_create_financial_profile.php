<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('financial_profile', function($table) {
			$table-> Integer('user_id')-> unsigned();
			$table-> string('residence_status');
			$table-> integer('year_old_addr');
			$table-> integer('month_old_addr');
			$table-> integer('year_cur_addr');
			$table-> integer('month_cur_addr');
			$table-> string('employ_status');
			$table-> string('employer');
			$table-> string('position');
			$table-> integer('year_cur_job');
			$table-> integer('month_cur_job');
			$table-> integer('year_old_job');
			$table-> integer('month_old_job');
			$table-> integer('monthly_income');
			$table-> integer('loan_repayments');
			$table-> integer('other_expense');
			$table-> integer('property');
			$table-> integer('vehicle');
			$table-> integer('share');
			$table-> integer('others');
			$table-> integer('home_loan');
			$table-> integer('car_loan');
			$table-> integer('other_loan');

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
		Schema::drop('financial_profile');
	}

}
