<?php

class MatchController extends BaseController {

	//test return json file
	public function test() {
		return User::where('email','=', 'lhz0134@gmail.com')-> first();
	}

	public function search() {
		$id = Auth::user()-> id;

		$lendPrefers = LendRref::where('id','=',$id)->first();
		
		//get lender prferences
		$maxAmount = $lendPrefers-> max_amount;
		$minAmount = $lendPrefers-> min_amount;
		$maxRate = $lendPrefers-> max_rate;
		$minRate = $lendPrefers-> min_rate;
		$maxTerm = $lendPrefers-> max_term;
		$minTerm= $lendPrefers-> min_term;

		//search for matched application
		$loanApps = LoanApp::where(function($query) {
			$query-> whereBetween('amount',array($minAmount, $maxAmount))
				  ->whereBetween('term',array($minTerm, $maxTerm))
				  -> whereBetween('pref_rate', array($minRate, $maxRate))
				  ->orderBy('weight','desc');
		}) ->get();

		return $loanApps;
	}
}
?>