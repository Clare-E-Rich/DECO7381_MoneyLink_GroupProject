<?php 

class LenderPref extends Eloquent {
	

	protected $table = 'lender_prefers';
	protected $primaryKey='user_id';
	protected $fillable = array('user_id', 'min_amount', 'min_term'
		, 'min_rate','max_amont', 'max_term', 'max_rate');
	
	public $timestamps = false;

	static public function sort($field, $oreder) {
		$loans = DB::table('loan_app')
					->join('profile','loan_app.user_id','=','profile.id')
					->select('profile.fname','profile.lname','loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id')
					-> whereBetween('amount',array($data['minAmount'], $data['maxAmount']))
				    ->whereBetween('term',array($data['minTerm'], $data['maxTerm']))
				    -> whereBetween('pref_rate', array($data['minRate'], $data['maxRate']))
				    -> where('loan_app.user_id','<>', $id)  //exclude user
				    -> orderBy($field, $order)
				    ->get();
		return loans;
	}

}
