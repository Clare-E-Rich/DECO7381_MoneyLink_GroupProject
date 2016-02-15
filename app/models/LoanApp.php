<?php 

class LoanApp extends Eloquent {
	

	protected $table = 'loan_app';
	protected $primaryKey= 'loan_id';
	protected $fillable = array('loan_id','user_id', 'amount', 'term'
		, 'pref_rate','purpose', 'description','weight');
	
	public $timestamps = false;
	
	public function evaluateWeight($id, $loan_id) {
		$finance = FinancialProfile::where('user_id', '=', $id)->first();
		$count = LoanApp::where('user_id','=',$id)->count();
		$loan_app = LoanApp::where('loan_id','=', $loan_id)->first();
		$current_bids = Bid::where('loan_id', '=', $loan_id)->count();
		
		$amout = $loan_app-> amount;
		$term = $loan_app-> term;
		$rate= $loan_app-> pref_rate;
		 
		$residence = $finance-> residence_status;

		$year_income = ($finance-> monthly_income) *12;
		
		$home_loan = $finance-> home_loan;
		$car_loan = $finance-> car_loan;
		$other_loan = $finance-> other_loan;
		$expense = $finance-> loan_repayment;
		$other_exp = $finance-> other_expense;
		
		$house_owner = 0;
		if(strcmp($residence,'Mortage')==0 || strcmp($residence,'noMortage')==0) {
			$house_owner = 1;
		}

		$property = $finance-> property;
		$vehicle = $finance-> vehicle;
		$share = $finance-> share;
		$other_property = $finance-> others;

		$active_loan =  
		$total_liab = $home_loan+$car_loan+$other_loan;
		$income_debt_ratio = $year_income/(1+ $count + $total_liab);
		$total_assests = $property+$vehicle+$share+$other_property;
		$disposable_income = $year_income - $total_liab;

		$sum = $rate + $house_owner+$total_assests+ $income_debt_ratio
				+ $current_bids + $disposable_income;

		$weight = pow($sum, 1/6);
		//$loan_app-> weight = $weight; 
		return $weight;
	}	


	static public function getTotal($id) {
		$numbers = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> select('profile.fname','profile.lname','loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id',
							  'loan_app.progress')
					-> where('loan_app.user_id','<>',$id)  //exclude user 
					-> where(DB::raw('loan_app.progress'), '<', DB::raw('loan_app.amount'))
				    -> count();

		return $numbers;
	}

	static public function allLoans($id,$page) {
		$skip = $page * 15;
		$results = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> leftJoin('bids','loan_app.loan_id', '=', 'bids.loan_id')
					-> join('users','users.id', '=', 'loan_app.user_id')
					-> select('profile.fname','profile.lname','loan_app.amount','users.email',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id',
							  'loan_app.progress', 'loan_app.weight', 'loan_app.user_id', DB::raw('COUNT(bids.bid_id) as biders'))
					-> where('loan_app.user_id','<>',$id)  //exclude user 
					-> where(DB::raw('loan_app.progress'), '<', DB::raw('loan_app.amount'))
				    -> orderBy('weight','DESC')
				    -> groupBy('loan_app.loan_id')
				   // ->skip($skip)->take(15)
				    -> get();
		return $results;
	}

	static public function search($data, $id) {
		//$skip = $data['page'] * 15;
		$results = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> join('users','users.id', '=', 'loan_app.user_id') 
					-> leftJoin('bids','loan_app.loan_id', '=', 'bids.loan_id')
					-> select('profile.fname','profile.lname','users.email', 'loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id',
							  'loan_app.progress', 'loan_app.weight', 'loan_app.user_id', DB::raw('COUNT(bids.bid_id) as biders'))
					-> whereBetween('amount',array($data['minAmount'], $data['maxAmount']))
				    -> whereBetween('term',array($data['minTerm'], $data['maxTerm']))
				    -> whereBetween('pref_rate', array($data['minRate'], $data['maxRate']))
				    -> where('loan_app.user_id','<>', $id)  //exclude user
				    -> where(DB::raw('loan_app.progress'), '<', DB::raw('loan_app.amount'))
				    -> orderBy('weight','DESC')
				    -> groupBy('loan_app.loan_id')
				    ->get();
		return $results;
	}

	static public function sort($id, $data) {
		$loans;
		$skip;
		if(isset($data['page'])) {
			$skip = $data['page'] * 15;
		} else {
			$skip = 0;
		}	
		/*if(!isset($data['minAmount']))*/ 
		if(isset($data['minAmount'])== FALSE){
			$loans = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> join('users','users.id', '=', 'loan_app.user_id')
					-> leftJoin('bids','loan_app.loan_id', '=', 'bids.loan_id')
					-> select('profile.fname','profile.lname','users.email', 'loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id',
							  'loan_app.progress', 'loan_app.weight', 'loan_app.user_id',DB::raw('COUNT(bids.bid_id) as biders'))
					-> where('loan_app.user_id','<>',$id)  //exclude user 
					-> where(DB::raw('loan_app.progress'), '<', DB::raw('loan_app.amount'))
				    -> groupBy('loan_app.loan_id')
				    -> orderBy($data['field'], $data['order'])
				    //->skip($skip)-> take(15)
				    -> get();
		} else {
			$loans = DB::table('loan_app')
						->join('profile','loan_app.user_id','=','profile.id')
						-> join('users','users.id', '=', 'loan_app.user_id')
						-> leftJoin('bids','loan_app.loan_id', '=', 'bids.loan_id')
						-> select('profile.fname','profile.lname','users.email', 'loan_app.amount',
								  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id',
								  'loan_app.progress', 'loan_app.weight','loan_app.user_id', DB::raw('COUNT(bids.bid_id) as biders'))
						-> whereBetween('amount',array($data['minAmount'], $data['maxAmount']))
					    -> whereBetween('term',array($data['minTerm'], $data['maxTerm']))
					    -> whereBetween('pref_rate', array($data['minRate'], $data['maxRate']))
					    -> where(DB::raw('loan_app.progress'), '<', DB::raw('loan_app.amount'))
					    -> where('loan_app.user_id','<>', $id)  //exclude user
					    -> groupBy('loan_app.loan_id')
					    -> orderBy($data['field'], $data['order'])
					   // ->skip($skip)-> take(15)
					    ->get();
				}
		return $loans;
	}

}