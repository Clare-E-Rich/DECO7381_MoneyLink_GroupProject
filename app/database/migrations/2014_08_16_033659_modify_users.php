<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		//add primary key to TABLE `users`
		//set default value of `activated` and `banned`
		Schema::table('users', function($table)
		{
			$table -> unique('email');
			$table -> renameColumn('activat_code', 'activation_code');
			$table -> dropColumn(array('activated', 'banned'));
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
	}

}
