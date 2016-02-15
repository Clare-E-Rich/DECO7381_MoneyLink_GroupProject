<?php

class LoanAppController extends BaseController {
 	
	public function saveLoanApp(){

		$id = Auth::user()-> id;
		$loan_app =  LoanApp::firstOrNew(array('user_id' => $id));
		$loan_app -> amount =Input::get('amount'); 
		$loan_app -> term =Input::get('term');
		$loan_app -> pref_rate =Input::get('pref_rate');
		$loan_app -> purpose= Input::get('purpose');
		$loan_app -> description= Input::get('description');
		
		$loan_app -> weight = calculateWeight($id, 0);  
		$loan_app -> save();
		return Redirect::to('thankyou');        
	}   

	/*process Ajax request to finish applying loan */
	public function applyLoans() {
		$id = Auth::user()-> id;
		$loan_app =  LoanApp::create(array('user_id' => $id));
		$profile =  FinancialProfile::firstOrNew(array('user_id' => $id));

		$loan_app -> amount =Input::get('amount'); 
		$loan_app -> term =Input::get('term');
		$loan_app -> pref_rate =Input::get('pref_rate');
		$loan_app -> purpose= Input::get('purpose');
		$loan_app -> description= Input::get('description');

		$profile -> residence_status = Input::get('residence');
		$profile -> marital_status = Input::get('marital');
		$profile -> year_cur_addr = Input::get('year_cur_addr');
		$profile -> month_cur_addr = Input::get('month_cur_addr');
		$profile -> year_old_addr = Input::get('year_old_addr');
		$profile -> month_old_addr = Input::get('month_old_addr');
		$profile -> employ_status = Input::get('employment');
		$profile -> employer = Input::get('employer');
		$profile -> position = Input::get('position');
		$profile -> year_cur_job = Input::get('year_cur_job');
		$profile -> month_cur_job = Input::get('month_cur_job');
		$profile -> year_old_job = Input::get('year_old_job');
		$profile -> month_old_job = Input::get('month_old_job');
		$profile -> monthly_income = Input::get('income');
		$profile -> loan_repayments = Input::get('payment');
		$profile -> other_expense = Input::get('expense');
		$profile -> home_loan = Input::get('homeloan');
		$profile -> car_loan = Input::get('carloan');
		$profile -> other_loan = Input::get('otherloan');
		$profile -> property = Input::get('property');
		$profile -> vehicle = Input::get('vehicle');
		$profile -> share = Input::get('share');
		$profile -> others = Input::get('otherproperty');

		$profile->save();

		$loanId = $loan_app-> loan_id;
		$weight= $loan_app-> evaluateWeight($id, $loanId);
		$loan_app->weight = $weight;
		//$loan_app-> user_id=  $id;
		$loan_app->save();

		return Redirect::to('confirm');  
		//return $weight;


	}
	/*process Ajax request to finish applying loan */
	public function cancelLoans() {
		$id = Auth::user()-> id;
		//$loan_app =  LoanApp::create(array('user_id' => $id));
		
		$loanId =Input::get('loanId'); 


		return LoanApp::where('loan_id', '=', $loanId)->delete();


		// $loanId = $loan_app-> loan_id;
		// $weight= $loan_app-> evaluateWeight($id, $loanId);
		// $loan_app->weight = $weight;
		//$loan_app-> user_id=  $id;
		//$loan_app->save();

		//return Redirect::to('confirm');  
		//return $weight;


	}
}
?>
