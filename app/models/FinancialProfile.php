<?php 

class FinancialProfile extends Eloquent {
	

	protected $table = 'financial_profile';
	protected $primaryKey = 'user_id';
	protected $fillable = array('user_id', 'residence_status', 'marital_status', 'year_old_addr','month_old_addr','employ_status',
	 'employer', 'position', 'year_cur_job', 'month_cur_job', 'year_old_job', 
	 'month_old_job', 'monthly_income', 'loan_repayments', 
	 'other_expense', 'property', 'vechicle', 'share', 'others', 
	 'home_loan', 'car_loan', 'other_loan');
	
	public $timestamps = false;


	public function getFinancialProfile($user_id) {
		$Financial = FinancialProfile::where('user_id', $user_id)-> first();

		$data= array(
				'residence' => $Financial-> residence_status,
				'marital' => $Financial-> marital_status,
				'year_cur_addr' => $Financial-> year_cur_addr,
				'month_cur_addr'=> $Financial-> month_cur_addr,
				'year_old_addr'=> $Financial-> year_old_addr,
				'month_old_addr'=> $Financial-> month_old_addr,
				'employ_status'=> $Financial-> employ_status,
				'employer'=> $Financial-> employer,
				'position'=> $Financial-> position,
				'year_cur_job'=> $Financial-> year_cur_job,

				'month_cur_job'=> $Financial-> month_cur_job,
				'year_old_job'=> $Financial-> year_old_job,

				'month_old_job'=> $Financial-> month_old_job,
				'monthly_income'=> $Financial-> monthly_income,
				'loan_repayments'=> $Financial-> loan_repayments,
				'other_expense'=> $Financial-> other_expense,
				'home_loan' => $Financial-> home_loan,
				'car_loan' => $Financial-> car_loan,
				'other_loan'=> $Financial-> other_loan,
				'property'=> $Financial-> property,
				'vehicle'=> $Financial-> vehicle,
				'share'=> $Financial-> share,
				'others'=> $Financial-> others
				
				);

		return $data;
	}
}