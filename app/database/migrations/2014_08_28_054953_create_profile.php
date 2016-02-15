<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile', function($table)
		{
			$table-> Integer('id')-> unsigned();
			$table-> string('fname');
			$table-> string('lname');
			$table-> date('dob');
			$table-> integer('streetno');
			$table-> string('street');
			$table-> string('suburb');
			$table-> integer('postcode');
			$table-> integer('phone');
			$table-> integer('tfn');
			$table-> string('pidtype');
			$table-> string('pidnum');
			$table-> string('sidtype');
			$table-> string('sidnum');
			$table-> integer('borrowrank');
			$table-> integer('lenderrank');
			$table-> foreign('id')->references('id')->on('users')
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
		Schema::drop('profile');
	}

}
