<?php 

class BidAccept extends Eloquent {
	
	protected $table = 'bid_accepted';
	protected $primaryKey = 'bid_id';

	protected $fillable = array('bid_id', 
		'loan_id', 'bid_accepted');
	
	public $timestamps = false;

	
	
	/* find out if user has already make bid on same laon before */
	public static function isMadeBefore($loan_id, $user_id) {
		$numbid = Bid::where('loan_id','=',$loan_id)
			   -> where('user_id','=',$user_id)
			   -> count();
		if($numbid == 0 ) {
			return FALSE;
		}
		return TRUE;
	}

	/*for one to many founding, currently not useful*/
	public function updateProgress($loan_id, $bid_id) {
		$current_sum = Bid::where('loan_id','=', $loan_id)
			   -> sum('bid_amount');
		$loan = loanApp::where('loan_id','=',$loan_id)->get();
		$loan_amount = $loan-> amount;
		$progress= $current_sum/$loan_amount;
		$loan-> progress= $progress; 
		$loan-> save(); 
		return $progress;
	}
}
