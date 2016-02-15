<?php 

class LenderPrefers extends Eloquent {
	

	protected $table = 'lender_prefers';
	
	protected $fillable = array('user_id', 'amount', 'term'
		, 'pref_rate');
	
	public $timestamps = false;
}