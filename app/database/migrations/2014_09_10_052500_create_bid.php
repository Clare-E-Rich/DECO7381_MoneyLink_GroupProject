<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBid extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('bids', function($table) {
			$table-> increments('bid_id');
			$table-> integer('user_id')-> unsigned();
			$table-> integer('loan_id')-> unsigned();
			$table-> float('bid_rate');
			$table-> integer('bid_term');
			$table-> decimal('bid_amount',10,2);
			$table-> boolean('bid_accepted');
			$table-> dateTime('bid_date');

			$table-> unique('bid_id');
			$table-> foreign('user_id')-> references('id')-> 
				     on('users');
			$table-> foreign('loan_id')-> references('loan_id')->
					 on('loan_app');		
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
		Schema:: drop('bids');
	}

}
