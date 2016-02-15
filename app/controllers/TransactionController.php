<?php 

class TransactionController extends BaseController {

	public function getProgress($loan_id) {
		
	}

	public function deleteLoan($loanId) {
		 LoanApp::where('loan_id', '=', $loanId)->delete();
		 return Redirect::to('mytransaction');  
	}

	public function claimLoan($loanId) {
		DB::table('loan_app')
			->where('loan_id', $loanId)
			->update(array('amount' => DB::raw('progress')));
		return Redirect::to('mytransaction'); 
	}

	public function deleteBid($bidId) {
		Bid::where('bid_id', '=', $bidId)->delete();
		return Redirect::to('mytransaction');  
	}
}
