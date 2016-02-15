<?php 

class UserProfile extends Eloquent {
	

	protected $table = 'profile';
	
	protected $fillable = array('id', 'fname', 'lname', 'streeno'
		, 'street', 'suburb', 'postcode', 'dob', 'phone', 'tfn', 'pidtype'
		, 'pidnum', 'sidtype', 'sidnum','gender','occupation');
	
	public $timestamps = false;

	
	public function getProfile($user_id) {
		$userProfile = UserProfile::where('id','=',$user_id)->first();

		$userid = $userProfile-> id;
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
		$usergender= $userProfile-> gender;
		$useroccupation = $userProfile-> occupation;

		$data =array(
				'userid' => $userid,
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
				'usergender'=> $usergender,
				'useroccupation' => $useroccupation
		    );
		return $data;
	}
}
