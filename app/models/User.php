<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('remember_token');
	protected $fillable = array('id', 'user_name', 'email'
		, 'password', 'activation_code');
	
	public function profile() 
	{
		return $this -> hasOne('UserProfile');
	}

	public function lender()
	{
		return $this -> hasOne('LenderPref');
	}
	public $timestamps = true;
}
