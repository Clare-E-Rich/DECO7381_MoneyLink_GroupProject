<?php

class UserProfileController extends BaseController {

	public function deleteComment($commentId, $userID) {

		DB::table('comments')
			-> where('comment_id', '=', $commentId)
			->delete();	

		 return Redirect::to('otherUsers/'.$userID); 
	}

	public function addComment()
	{
	$my_date = date("Y-m-d H:i:s");
		DB::table('comments')->insert(
    		array('user_id' => Input::get('userid'), 'commenter_id' => Input::get('commenter'), 'comment' => Input::get('comment'), 'time_stamp' => $my_date)
		);
		return Redirect::to('otherUsers/'.Input::get('userid'));
	}
	
	public function otherUsers($user_id)
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;

		$profile =  UserProfile::where('id','=', $user_id)-> first();
		$profilee =  UserProfile::where('id','=', $id)-> first();
		$pdataa = $profilee->getProfile($id);
		
		$pdata = $profile->getProfile($user_id);
		$age = '2014' - $pdata['year_dob'];

		$comments = DB::table('comments')
			-> join('profile', 'comments.commenter_id', '=', 'profile.id')
			-> select('commenter_id', 'comment', 'fname', 'lname', 'comment_id', 'time_stamp')
			-> where('user_id', '=', $user_id)
			-> orderBy('time_stamp', 'DESC')
			-> get();
					
		return View::make('borrower_profile',compact('id', 'pdata', 'pdataa', 'age', 'comments'));
	}

	public function matchedLoan($loan_id)
	{
		$id = Auth::user()-> id;

		$profile =  UserProfile::where('id','=', $id)-> first();

		$pdata = $profile->getProfile($id);

		$bids = DB::table('bids')
			-> join('profile', 'bids.user_id', '=', 'profile.id')
			-> join('users', 'bids.user_id', '=', 'users.id')
			-> select('fname', 'lname', 'bid_amount', 'email', 'bids.user_id')
			-> where('loan_id', '=', $loan_id)
			-> get();

		$loan = DB::table('loan_app')
			-> select('amount', 'progress')
			-> where('loan_id','=',$loan_id)
			-> get();


		return View::make('matchedloan', compact('bids', 'loan', 'profile', 'pdata'));
	}

	public function detailedLoan($loan_id)
	{
		$id = Auth::user()-> id;

		$profile =  UserProfile::where('id','=', $id)-> first();

		$pdata = $profile->getProfile($id);

		$bids = DB::table('bids')
			-> join('profile', 'bids.user_id', '=', 'profile.id')
			-> select('fname', 'lname', 'bid_amount', 'user_id')
			-> where('loan_id', '=', $loan_id)
			-> get();

		$loan = DB::table('loan_app')
			-> select('amount', 'progress')
			-> where('loan_id','=',$loan_id)
			-> get();

		return View::make('loanprogress', compact('bids', 'loan', 'profile', 'pdata'));
	}

	/* pass data to profile view */
	public function profile()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		// $photos = Auth::user()->photos()->get();
		$user = User::where('id', '=', $id)->first();
		if($user-> profile_complete == 0) {
			return Redirect::route('newUserProfile');
		}

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
				    -> orderBy('weight','DESC')
				    -> get();

		$comments = DB::table('comments')
			-> join('profile', 'comments.commenter_id', '=', 'profile.id')
			-> select('commenter_id', 'comment', 'fname', 'lname', 'comment_id', 'time_stamp')
			-> where('user_id', '=', $id)
			-> orderBy('time_stamp', 'DESC')
			-> get();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		$age = '2014' - $pdata['year_dob'];
		$fdata = $financial->getFinancialProfile($id); // methd defined in its model		
		

		return View::make('profile',compact('id', 'bids','pdata','fdata', 'loanApp', 'allLoan', 'age', 'comments'));
	}

	public function borrow()
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
				    -> orderBy('weight','DESC')
				    -> get();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		$fdata = $financial->getFinancialProfile($id); // methd defined in its model
					
		return View::make('borrow',compact('bids','pdata','fdata', 'loanApp', 'allLoan'));
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
	public function confirm()
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

		$maxId =  DB::table('loan_app_temp')
					-> select('amount', 'loan_id', 'term', 'pref_rate')
					-> where('user_id','=', $id)
					//-> whereRaw('loan_id = (select max(loan_id) from loan_app)')			
					-> max('loan_id');

		$loanAppTemp =DB::table('loan_app_temp')
					-> select('amount', 'loan_id', 'term', 'pref_rate', 'purpose', 'description')
					-> where('user_id','=', $id)
					-> where('loan_id', '=', $maxId)
					->get();

		$allLoan = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> select('profile.fname','profile.lname','loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id')
					-> where('loan_app.user_id','<>',$id)  //exclude user 
				    -> orderBy('weight','DESC')
				    -> get();
		


		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		$fdata = $financial->getFinancialProfile($id); // methd defined in its model
					
		return View::make('confirm',compact('bids','pdata','fdata', 'loanApp', 'allLoan', 'loanAppTemp'));
	}

	public function mytransaction()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		$user = User::where('id', '=', $id)->get();
		if($user[0]->profile_complete == 0) {
			return Redirect::route('newUserProfile');
		}
		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();

		$bids = DB::table('bids')
				 -> join('loan_app','bids.loan_id','=', 'loan_app.loan_id')
				 -> join('profile','profile.id','=','loan_app.user_id')
				 -> join('bids_accepted','bids.bid_id','=', 'bids_accepted.bid_id')
				 -> select('bid_amount','pref_rate', 'term','purpose','fname','lname', 'loan_app.amount', 'loan_app.progress', 'bids.bid_id', 'loan_app.user_id')
				 -> where('bids.user_id','=',$id)
				 -> where('bids_accepted.accepted','=','0')
				 -> orderBy('bid_date','DESC')
				 -> get();

		$loanApp =  LoanApp:: where('user_id','=', $id)->get();
		
		$allLoan = DB::table('loan_app')
					-> join('profile','loan_app.user_id','=','profile.id')
					-> select('profile.fname','profile.lname','loan_app.amount',
							  'loan_app.pref_rate','loan_app.term','loan_app.purpose','loan_app.loan_id')
					-> where('loan_app.user_id','<>',$id)  //exclude user 
				    -> orderBy('weight','DESC')
				    -> get();
		$accepted_bid = DB:: table('bids')
						-> join('bids_accepted','bids.bid_id','=', 'bids_accepted.bid_id')
						-> select('bids.loan_id','bid_amount')
						-> where('user_id','=', $id)
						-> where('bids_accepted.accepted','=','1')
						-> get();
		$loanIds =array();
		foreach($accepted_bid as $b) {
			array_push($loanIds,$b->loan_id);
		};
		if(sizeof($loanIds)==0) {
			array_push($loanIds,'z');
		};
		$accepted_loan = DB::table('loan_app')
						-> join('profile', 'profile.id', '=', 'loan_app.user_id')
						-> join('users','users.id','=','loan_app.user_id')
						-> join('bids','loan_app.loan_id','=', 'bids.loan_id')
						-> select('bid_amount','users.email','term','pref_rate','purpose','progress', 'fname', 'lname', 'loan_app.user_id', 'bids.match_date')
						-> whereIn('loan_app.loan_id',$loanIds)
						-> where('bids.user_id','=', $id)
						-> orderBy('bids.match_date', 'DESC')
						-> get();

		$active_loan = DB::table('loan_app')
						-> select('amount', 'term', 'pref_rate', 'purpose', 'progress', 'loan_id', 'match_date')
						-> where(DB::raw('loan_app.amount'), '=', DB::raw('loan_app.progress'))
						-> where('user_id', '=', $id)
						-> orderBy('match_date', 'DESC')
						-> get();	

		$loan_requests = DB::table('loan_app')
						-> select('amount', 'term', 'pref_rate', 'purpose', 'progress', 'loan_id')
						-> where(DB::raw('loan_app.amount'), '<>', DB::raw('loan_app.progress'))
						-> where('user_id', '=', $id)
						-> get();	

		$active_offers = DB::table('loan_offers')
						-> select('amount', 'rate', 'term', 'offer_id')
						-> where('user_id', '=', $id)	
						-> where('matched', '=', 0)
						-> get();		

		$active_obids = DB::table('offers_bids')
						-> join('loan_offers', 'loan_offers.offer_id', '=', 'offers_bids.offer_id')
						-> join('profile', 'profile.id', '=', 'loan_offers.user_id')	
						-> select('profile.fname', 'profile.lname', 'loan_offers.amount', 'offers_bids.rate', 'offers_bids.term', 'obid_id', 'loan_offers.user_id')
						-> where('offers_bids.user_id', '=', $id)
						-> where('offers_bids.accepted', '=', 0)
						-> get();

		$matched_offers = DB::table('loan_offers')
						-> join('offers_bids', 'offers_bids.offer_id', '=', 'loan_offers.offer_id')
						-> join('profile', 'profile.id', '=', 'offers_bids.user_id')
						-> join('users', 'users.id', '=', 'offers_bids.user_id')
						-> select('fname', 'lname', 'email', 'loan_offers.amount', 'offers_bids.rate', 'offers_bids.term', 'offers_bids.user_id')
						-> where('loan_offers.user_id', '=', $id)
						-> where('offers_bids.accepted', '=', 1)
						-> get();

		$matched_obids = DB::table('offers_bids')
						-> join('loan_offers', 'loan_offers.offer_id', '=', 'offers_bids.offer_id')
						-> join('profile', 'profile.id', '=', 'loan_offers.user_id')
						-> join('users', 'users.id', '=', 'loan_offers.user_id')
						-> select('fname', 'lname', 'email', 'loan_offers.amount', 'offers_bids.rate', 'offers_bids.term', 'loan_offers.user_id')
						-> where('offers_bids.user_id', '=', $id)
						-> where('offers_bids.accepted', '=', 1)
						-> get();						

		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		$fdata = $financial->getFinancialProfile($id); // methd defined in its model
		
		return View::make('mytransaction',compact('loanIds','bids','pdata','fdata', 'loanApp', 'allLoan','accepted_loan', 'active_loan', 'loan_requests', 'active_offers', 'active_obids', 'matched_offers', 'matched_obids'));	
	}
	
    public function newUserProfile() {
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;

		$userProfile =  UserProfile::where('id','=', $id)-> first();
		$userfname = $userProfile-> fname; 
		$userlname = $userProfile-> lname;
		$userstreetno = $userProfile-> streetno;
		$userstreet = $userProfile-> street;
		$usersuburb = $userProfile-> suburb;
		$userstate = $userProfile-> state;
		$userpostcode = $userProfile-> postcode;
		$userdobday = $userProfile-> day_dob;
		$userdobmonth = $userProfile-> month_dob;
		$userdobyear = $userProfile-> year_dob;
		$userphone = $userProfile-> phone;
		$usertfn = $userProfile-> tfn;
		$userpidtype = $userProfile-> pidtype;
		$userpidnum = $userProfile-> pidnum;
		$usersidtype = $userProfile-> sidtype;
		$usersidnum = $userProfile-> sidnum;
		$userdes = $userProfile-> description;

		$data =array(
				'usermail'=> $usermail, 
				'userfname'=> $userfname,
				'userlname' => $userlname,
				'userstreetno' => $userstreetno,
				'userstreet' => $userstreet,
				'usersuburb' => $usersuburb,
				'userstate' => $userstate,
				'userpostcode' => $userpostcode,
				'day_dob' => $userdobday,
				'month_dob' => $userdobmonth,
				'year_dob' => $userdobyear,
				'userphone' => $userphone,
				'usertfn' => $usertfn,
				'userpidtype' => $userpidtype,
				'userpidnum' => $userpidnum,
				'usersidtype' => $usersidtype,
				'usersidnum' => $usersidnum,
				'userdes' => $userdes,
				'usergender' => $userProfile-> gender,
				'useroccuptaion'=> $userProfile-> occupation,

			);
		return View::make('newUserProfile',array('data'=>$data)); 
	}
	
    public function editProfile() {

		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		$user = User::where('id', '=', $id)->first();
		$profile =  UserProfile::where('id','=', $id)-> first();
		$pdata = $profile->getProfile($id);   //  method defiend in its model

		$userProfile =  UserProfile::where('id','=', $id)-> first();

		if($userProfile == null) // if user has not add it profile. 
			return View::make('editprofiles')->with('usermail',$usermail);
			
		$userfname = $userProfile-> fname; 
		$userlname = $userProfile-> lname;
		$userstreetno = $userProfile-> streetno;
		$userstreet = $userProfile-> street;
		$usersuburb = $userProfile-> suburb;
		$userstate = $userProfile-> state;
		$userpostcode = $userProfile-> postcode;
		$userdobday = $userProfile-> day_dob;
		$userdobmonth = $userProfile-> month_dob;
		$userdobyear = $userProfile-> year_dob;
		$userphone = $userProfile-> phone;
		$usertfn = $userProfile-> tfn;
		$userpidtype = $userProfile-> pidtype;
		$userpidnum = $userProfile-> pidnum;
		$usersidtype = $userProfile-> sidtype;
		$usersidnum = $userProfile-> sidnum;
		$userdes = $userProfile-> description;
		$userCurrency = $userProfile-> currency;

		$data =array(
				'usermail'=> $usermail, 
				'userfname'=> $userfname,
				'userlname' => $userlname,
				'userstreetno' => $userstreetno,
				'userstreet' => $userstreet,
				'usersuburb' => $usersuburb,
				'userstate' => $userstate,
				'userpostcode' => $userpostcode,
				'day_dob' => $userdobday,
				'month_dob' => $userdobmonth,
				'year_dob' => $userdobyear,
				'userphone' => $userphone,
				'usertfn' => $usertfn,
				'userpidtype' => $userpidtype,
				'userpidnum' => $userpidnum,
				'usersidtype' => $usersidtype,
				'usersidnum' => $usersidnum,
				'userdes' => $userdes,
				'userCurrency' => $userCurrency,
				'usergender' => $userProfile-> gender,
				'useroccuptaion'=> $userProfile-> occupation,

			);

		/*Nhi's added code start*/
		$languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);//get browser languages

		//gets most likely country user lives in from browser language
		foreach ($languages as $langs){
			//if (stristr($langs,";") && stristr($langs,"-") ) {
			if (stristr($langs,"-") ) {
				$tmp = explode("-",$langs); 
				//$tmp = explode(";",$tmp[1]); 
				$lang = $tmp[1]; 
				break;
			}
		}

		//look up table for country to Currency
		if ($lang == "NZ"){//New Zealand Dollars
			$currency = 'NZD';
		}elseif($lang == "AU"){//Australia Dollars
			$currency = 'AUD';
		}elseif($lang == "US"){//US Dollars
			$currency = 'USD';
		}elseif($lang == "JP"){//Japanese Yen
			$currency = 'JPY';
		}elseif($lang == "FR"){//France EUROS
			$currency = 'EUR';
		}elseif($lang == "GB"){//Great Britin Pounds
			$currency = 'GBP';
		}elseif($lang == "CA"){//Canadian Dollar
			$currency = "CAD";
		}else{
			$currency = 'AUD';
		}
		/*Nhi's added code end*/

		return View::make('editprofiles',compact('data', 'pdata', 'currency')); 
	}
	public function saveProfile() {
		$id = Auth::user()-> id;
		$profile = UserProfile::firstOrNew(array('id'=> $id));
		$profile -> streetno=Input::get('streetno');
		$profile -> street = Input::get('street');
		$profile -> suburb = Input::get('suburb');
		$profile -> postcode =Input::get('postcode');
		$profile -> state = Input::get('state');
		$profile -> phone=Input::get('phone');
		$profile -> tfn=Input::get('tfn');
		$profile -> pidtype=Input::get('pidtype');
		$profile -> pidnum=Input::get('pidnum');
		$profile -> sidtype=Input::get('sidtype');
		$profile -> sidnum=Input::get('sidnum');
		$profile -> description = Input::get('description');
		$profile -> occupation = Input::get('occupation');
		$profile -> currency = Input::get('currency');


		/*Nhi's added code start*/
		$currency = Input::get('currency');
		//get exchange rate from 
		$from   = 'AUD'; /*change it to your required currencies */
		$to     = $currency;
		$url    = 'http://download.finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
		 
		$handle = @fopen($url, 'r');
		if ($handle) {
			$result = fgets($handle, 4096);
			fclose($handle);
		}
		$allData = explode(",", $result); /* Get all the contents to an array */
		$dollarValue = $allData[1];
		$dollarValue = trim($dollarValue);
		$profile -> xrate = $dollarValue;
		/*Nhi's added code end*/


		$profile -> save();
		return Redirect::Route('profile');  
	}
	/* save user profile */
	public function saveNewProfile(){
		$id = Auth::user()-> id;
		
		$profile =  UserProfile::firstOrNew(array('id' => $id));
		$profile -> fname = Input::get('fname');
		$profile -> lname = Input::get('lname');
		$profile -> streetno=Input::get('streetno');
		$profile -> street = Input::get('street');
		$profile -> suburb = Input::get('suburb');
		$profile -> postcode =Input::get('postcode');
		$profile -> state = Input::get('state');
		$profile -> day_dob=Input::get('day_dob');
		$profile -> month_dob=Input::get('month_dob');
		$profile -> year_dob=Input::get('year_dob');
		$profile -> phone=Input::get('phone');
		$profile -> tfn=Input::get('tfn');
		$profile -> pidtype=Input::get('pidtype');
		$profile -> pidnum=Input::get('pidnum');
		$profile -> sidtype=Input::get('sidtype');
		$profile -> sidnum=Input::get('sidnum');
		$profile -> description = Input::get('description');
		$profile -> gender = Input::get('gender');
		$profile -> occupation = Input::get('occupation');
		$profile -> currency = 'AUD';
		$profile -> save();

		$user = User::where('id','=', $id)->first();
		$user-> profile_complete = 1;
		$user-> save();
		return Redirect::Route('profile');        
	}

	public function saveFinancialProfile(){
		$id = Auth::user()-> id;
		$profile =  FinancialProfile::firstOrNew(array('user_id' => $id));
		$profile -> residence_status = Input::get('residence');
		$profile ->  year_cur_addr = Input::get('year_cur_addr');
		$profile -> year_cur_addr = Input::get('month_cur_addr');
		$profile -> year_old_addr = Input::get('year_old_addr');
		$profile -> year_old_addr = Input::get('year_old_addr');
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
		$profile -> save();
		return Redirect::to("thankyou");
	}

	public function logContact()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		// $photos = Auth::user()->photos()->get();


		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
	
		return View::make('logContact_us',compact('id', 'bids','pdata','fdata', 'loanApp', 'allLoan', 'age', 'comments'));
	}

	public function logPolicy()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		// $photos = Auth::user()->photos()->get();


		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		return View::make('logPolicy',compact('id', 'bids','pdata','fdata', 'loanApp', 'allLoan', 'age', 'comments'));
	}	
	public function logTerm()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		// $photos = Auth::user()->photos()->get();


		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		return View::make('logTerms_of_use',compact('id', 'bids','pdata','fdata', 'loanApp', 'allLoan', 'age', 'comments'));
	}
		public function logAbout()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		// $photos = Auth::user()->photos()->get();


		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model

		return View::make('logAbout',compact('id', 'bids','pdata','fdata', 'loanApp', 'allLoan', 'age', 'comments'));
	}
		public function logHwork()
	{   
		$id = Auth::user()-> id;
		$usermail = Auth::user()-> email;
		// $photos = Auth::user()->photos()->get();


		$profile =  UserProfile::where('id','=', $id)-> first();
		
		$financial = FinancialProfile::where('user_id', $id)-> first();
		
		// think about cacahe below two queries 
		$pdata = $profile->getProfile($id);   //  method defiend in its model
		
		return View::make('logHworks',compact('id', 'bids','pdata','fdata', 'loanApp', 'allLoan', 'age', 'comments'));
	}
}
?>
