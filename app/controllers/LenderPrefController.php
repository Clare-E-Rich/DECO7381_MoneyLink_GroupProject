<?php

class LenderPrefController extends BaseController {
 	
 	public function rawLend() {
 		$id = Auth::user()-> id;
 		$profile = UserProfile::where('id', '=', $id)-> first();
 		$pdata = $profile->getProfile($id); 
 		return View::make('lend',compact('pdata'));     
 	}

 	public function allLoans() {
 		$id = Auth::user()-> id;
 		$numbers =LoanApp:: getTotal($id);
 		$result = LoanApp::allLoans($id, 0);
 		$data = array('total'=> $numbers, 'results'=> $result);
 		return $data;
 	}

	public function LendPref()
	{   
		$id = Auth::user()-> id;
		$LendPrefers =  LenderPref::where('id','=', $id)-> first();

		$minAmount = $lenderPrefers-> min_amount;
		$minTerm = $lenderPrefers-> min_term;
		$minRate = $lenderPrefers-> min_rate;
		$maxAmount = $lenderPrefers-> max_amount;
		$maxTerm = $lenderPrefers-> max_term;
		$maxRate = $lenderPrefers-> max_rate;
	
		$data =array(
				'minAmount'=> $minAmount, 
				'minTerm'=> $minTerm,
				'minRate' => $minRate,
				'maxAmount'=> $maxAmount,
				'minTerm'=> $maxTerm,
				'minRate'=> $maxRate
			);
		return View::make('lendPage')-> with($data); 
	}   
	
	public function lend()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;

		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();

		$bids = DB::table('bids')
				 -> join('loan_app','bids.loan_id','=', 'loan_app.loan_id')
				 -> join('profile','profile.id','=','loan_app.user_id')
				 -> select('bid_amount','pref_rate', 'term','purpose','fname','lname')
				 -> orderBy('bid_date','DESC')
				 -> get();

		$loanApp =  LoanApp:: where('user_id','=', $id)->get();
		
		$allLoan = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> select('profile.fname','profile.lname','loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id')
					-> where('loan_app.user_id','<>',$id)  //exclude user 
					-> where(DB::raw('loan_app.progress'), '<', DB::raw('loan_app.amount'))
				    -> orderBy('weight','DESC')
				    -> get();

		$jsdata = array(
				'loans' => $allLoan,
			);
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		$fdata = $financial->getFinancialProfile($id); // methd defined in its model
					
		return View::make('lend',compact('jsdata', 'bids','pdata','fdata', 'loanApp', 'allLoan'));
	}
	/*search mathing loan applications*/
	public function search() {
		$id = Auth::user()-> id;	
		$inputs = array(
			'maxAmount'=> Input::get('maxLoan'),
			'minAmount'=> Input::get('minLoan'),
			'maxRate'=> Input::get('maxRate'),
			'minRate'=> Input::get('minRate'),
			'maxTerm'=> Input::get('maxTerm'),
			'minTerm'=> Input::get('minTerm'),
			//'page'=> Input::get('page')
		);
		//search for matched application
		$numbers = LoanApp::getTotal($id);
		$results = LoanApp::search($inputs, $id);
		$data =  array('total'=> $numbers, 'results'=> $results);
		return $data;
	} 

	public function reload() {
		$id = Auth::user()-> id;
		//search for matched application

		$inputs = array(
			'maxAmount'=> Input::get('maxLoan'),
			'minAmount'=> Input::get('minLoan'),
			'maxRate'=> Input::get('maxRate'),
			'minRate'=> Input::get('minRate'),
			'maxTerm'=> Input::get('maxTerm'),
			'minTerm'=> Input::get('minTerm')
		);

		$numbers = LoanApp::getTotal($id);
		$results = LoanApp::search($inputs, $id);
		$data =  array('total'=> $numbers, 'results'=> $results);
		
		return $data;
	}

	public function sort() {
		$id = Auth::user()-> id;
		$data;
		$inputs;
		if(Input::has('maxLoan')) {
			$inputs = array(
				'maxAmount'=> Input::get('maxLoan'),
				'minAmount'=> Input::get('minLoan'),
				'maxRate'=> Input::get('maxRate'),
				'minRate'=> Input::get('minRate'),
				'maxTerm'=> Input::get('maxTerm'),
				'minTerm'=> Input::get('minTerm'),
				'field'=> Input::get('type'),
				'order'=> Input::get('order')
			);
		} else {
		 	$inputs = array(
			 		'field' => Input::get('type'),
			 		'order' => Input::get('order')
			 );
		}
		$numbers = LoanApp:: getTotal($id);
		$results = LoanApp::sort($id, $inputs);
		$data =  array('total'=> $numbers, 'inputs'=> $inputs, 'results'=> $results);
		return $data;
	}
	public function saveLendPref(){

		$id = Auth::user()-> id;
		$loanApp = LoanApp::where('user_id','=',$id)->get();
		$profile =  UserProfile::where('id','=', $id)-> first();
		$financial = FinancialProfile::where('user_id', $id)-> first();
		
		$lender_prefers =  LenderPref::firstOrNew(array('user_id'=> $id));
		$lender_prefers -> min_amount =Input::get('minLoan'); 
		$lender_prefers -> min_term =Input::get('minTerm');
		$lender_prefers -> min_rate =Input::get('minRate');
		$lender_prefers -> max_amount=Input::get('maxLoan'); 
		$lender_prefers -> max_term =Input::get('maxTerm'); 
		$lender_prefers -> max_rate =Input::get('maxRate'); 
		$lender_prefers -> save();
		
		$results = $this-> search();
		$pdata = $profile->getProfile($id);   // method defined in its model
		$fdata = $financial->getFinancialProfile($id); // methd defined in its model

			$bids = DB::table('bids')
				 -> join('loan_app','bids.loan_id','=', 'loan_app.loan_id')
				 -> join('profile','profile.id','=','loan_app.user_id')
				 -> select('bid_amount','pref_rate', 'term','purpose','fname','lname')
				 -> orderBy('bid_date','DESC')
				 -> get();

		return View::make('myprofiles',compact('bids','pdata','fdata','results','loanApp'));     
	}
}
?>
