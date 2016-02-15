<?php

class BidController extends BaseController {

	public function get_applicant($bid_id) {
		$applicant = DB::table('bids')
					-> join('loan_app','loan_app.loan_id', '=', 'bids.loan_id')
					-> join('users','users.id', '=', 'loan_app.user_id')
					-> join('profile', 'profile.id', '=', 'users.id')
					-> select('users.email','profile.fname', 'profile.lname')
					-> where('bids.bid_id','=', $bid_id)
					-> get();
		return $applicant;
	}

	public function get_all_biders($loan_id) {
		$bidders = DB::table('bids')
				-> join('users','users.id', '=', 'bids.user_id')
				-> join('profile', 'profile.id', '=', 'users.id')
				-> select('users.email','profile.fname', 'profile.lname', 'bids.bid_amount')
				-> where('bids.loan_id', '=', $loan_id)
				-> get();

		return $bidders;
	}
	public function mkBid($loan_id) {
		$id = Auth::user()-> id;
		$loan_app = LoanApp::where('loan_id','=',$loan_id)->first();
		$bid = new Bid;
		$bid-> user_id = $id;
		$bid-> loan_id = $loan_id;
		$bid-> bid_date = date('Y-m-d H:i:s');
		$bid-> bid_amount = Input::get('amount');
		$bid-> save();

		$weight = $loan_app->evaluateWeight($id, $loan_id);
		$loan_app-> save();	
		$applicant =$this-> get_applicant($bid->bid_id);
		$loan = LoanApp::where('loan_id', '=', $loan_id)->first();

		if($loan-> progress >= $loan-> amount) {
			DB::table('loan_app')
            	->where('loan_id', '=', $loan_id)
            	->update(array('match_date' => date("Y-m-d H:i:s")));
            DB::table('bids')
            	->where('loan_id', '=', $loan_id)
            	->update(array('match_date' => date("Y-m-d H:i:s")));
			$bidders = $this-> get_all_biders($loan_id);
			$loan = DB::table('loan_app')
				->select('amount','term', 'pref_rate', 'purpose', 'description')
				->where('loan_id', '=', $loan_id)
				->get();
			//$applicant =$this-> get_applicant($bid-> bid_id);
			$mainContent = array(
				'loan' => $loan,
				'bidders'=> $bidders,
				'applicant'=> $applicant,
				'link'=>'http://deco3801-05.uqcloud.net/'
				);
			Mail::send('emails.fullyFounded', $mainContent, function($message)use($applicant) {
				$message-> to($applicant[0]->email)-> subject('Your loan on MoneyLink has been fullly funded');
			});
			foreach($bidders as $bidder) {
				$offerContent = array(
					'loan' => $loan,
					'bidder'=> $bidder,
					'applicant'=> $applicant,
					'link'=>'http://deco3801-05.uqcloud.net/'
				);
				Mail::send('emails.offer', $offerContent, function($message)use($bidder) {
					$message-> to($bidder->email)-> subject('Your offer on MoneyLink has been sucessfully matched');
				});
			}
		}
	} 
	

	
	public function makeBid($loan_id) {
		$id = Auth::user()-> id;
		$loan_app = LoanApp::where('loan_id','=',$loan_id)->first();
		$bid_Id;	
		
		if(! Bid::isMadeBefore($loan_id, $id) ) {
			$bid = new Bid;
			$bid-> user_id = $id;
			$bid-> loan_id = $loan_id;
			$bid-> bid_date = date('Y-m-d H:i:s');
			$bid-> bid_amount = $loan_app-> amount;
		
		/*$bid-> bid_term = $loan_app-> term;
		$bid-> bid_rate = $loan_app-> pref_rate; */
	

			$bid-> save();
		/*$bid_Id= $bid-> bid_id;*/
		/*$bid_acc = BidAccept::firstOrNew('where','=',$bid_Id);
		$bid_acc -> loan_id = $loan_id;
		$bid_acc -> accepte = 0;*/

		//update the loan weight
			$weight = $loan_app->evaluateWeight($id, $loan_id);
			$loan_app-> save();	    
		}
	/*	$bid_acc = BidAccept::firstOrNew(array('bid_id'=>$bid_Id));
		$bid_acc -> loan_id = $loan_id;
		$bid_acc -> accepted = 0;
		$bid_acc->save();*/
		/*$pdata = $profile->getProfile($id);   // method defined in its model
		$fdata = $financial->getFinancialProfile($id); */// methd defined in its model

		return Redirect::route('lend');
	}

}
