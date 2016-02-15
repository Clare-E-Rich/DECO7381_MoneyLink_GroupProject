<!DOCTYPE html>
<header>
	<link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">
	<link rel="stylesheet" href="../foundation-5.4.0/css/css_validate.css">
	<style>
	.form-error {
		color:red;
	}
	.errorMsg {
		color:red;

		visibility: hidden;
		text-align: left;
	}
	#apply_form input,
	#apply_form select,
	#apply_form textarea {
		width:90%;
	}
	.hint {
		display:block;
		float: right;
	}
	</style>
</header>
<body>


	<! navigation bar -->
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
       <a href="mytransaction"><img id="logo" src="../foundation-5.4.0/img/logos.png"></a>
       <a href="mytransaction"><img id="font" src="../foundation-5.4.0/img/font.png"></a>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<!-- <li class="toggle-topbar menu-icon"><a href="home"><span>Menu</span></a></li> -->
		</ul>
		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<li><a href="profile" id="welcome">Welcome {{{ $pdata['userfname'] or "" }}}</a></li> 
				<li><a href="logout"><img id="logout" src="../foundation-5.4.0/img/logout_w.png"></a></li>

				</ul>
			</section>
		</nav>


		<div class="row">
			<div class="large-12 columns">
				<ul class="inline-list" id="tab-area">
					<!-- <div class="large-3 columns" id="active_tab_bg"> -->
					<li id="title"><a href="mytransaction">My Transaction</a></li>
				<!-- </div>
				<div class="large-3 columns" id="tab_bg"> -->
					<li id="title"><a href="profile">My Profile</a></li>
					<!-- </div>
					<div class="large-3 columns" id="tab_bg"> -->
						<li id="active_title"><a href="borrow">Borrow Money</a></li>
					<!-- </div>
					<div class="large-3 columns" id="tab_bg"> -->
						<li id="title"><a href="lend">Lend Money</a></li>
						<!-- </div> -->
					</ul>
				</div>
			</div>


			
			<div class="row">
				<div class="large-12 columns">
					<div class="tabs-content" id="main_tab">
						<div class="large-7 columns right">
							<ul class="tabs" id="application_tablist" data-tab role="tablist">
								<li class="tab-title active" role="presentational"><a href="#app_form-1" id="application_tab" role="tab" tabindex="1" aria-selected="true" controls="app_form-1" class="round button">1</a></li>
								<li class="tab-title" role="presentational"><a href="#app_form-2" id="application_tab" role="tab" tabindex="2"aria-selected="false" controls="app_form-2" class="round button">2</a></li>
								<li class="tab-title" role="presentational"><a href="#app_form-3" id="application_tab" role="tab" tabindex="3"aria-selected="false" controls="app_form-3" class="round button">3</a></li>
							</ul>
						</div>

						<div class="tabs-content applications" id="apply_form">

							<! loan application form 1 -->
							<section role="tabpanel" aria-hidden="false" class="content active" id="app_form-1">
								<div class="row">
									<div class="large-12 columns">   
										<h4 id="application_title">Loan Details</h4>
									</div>
								</div>
								
								<form id='form1'>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Loan Amount ($):
												</div>
						
												
											</div>
											<div class="large-4 small-4 columns">
												<!--  <span class="postfix"> -->
												<a class ='hint' title="Total ammount of money you would like to borrow in Australian Dollars."><img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
											<!-- </span>  -->
												<input type="text" data-validation = "number" 
												data-validation-error-msg="Use digits only"
												id="right-label" name="amount"/>
											</div>
										   	<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12  columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Term (months):
				                              
							
												</div>
											</div>
											<div class="large-4 small-5 columns">
												<a class='hint' title="The number of months you would like to have to pay back the loan from the time you receive the money.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" data-validation = "number"  
												data-validation-error-msg="Use digits only"
												id="right-label" name='term'>
											</div>
												<div class ="large-4 small-3 columns">
                                            <span class = 'errorMsg'> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Prefered Rate (%):
													
												</div>
											</div>
											<div class="large-4 small-4 columns" >
												<a class='hint' title="Your prefered interest rate on the loan.  What percentage of the loan ammount you would like to pay in addition to the original sum.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" data-validation = "number" data-validation-allowing="float" 
												data-validation-error-msg="Use digits only"
												id="right-label" name='pref_rate'>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Purpose:

												</div>
											</div>
											<div class="large-4 small-4 columns">
												<Select id='right-label' name='purpose'>
													<option> Education loans </option>
													<option> Travel loans </option>
													<option> Car loans </option>

												    <option> Debt consolidation loans </option>
													<option> Renovations loans </option>
													<option> Maternity Expenditures loans </option>
													<option> House loans </option>
													<option> Medical loans </option>
													<option> Others </option>
												</Select> 
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 samll-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Description:</div>
											</div>
											<div class="large-4 small-4 columns">
												<textarea id='right-label' name='description'>
												</textarea>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
								</form> 
								<div class="row">
									<div class="large-8 columns">
										<div class="right"> 
											<!-- <a href="#app_form-2" id="submit_button" class="secondary small button nextForm">Next</a> -->
											<a href="#app_form-2" id="submit_button" class="secondary small button nextForm">Next</a>

										</div>
										<div class="right"> 
											<a href="mytransaction" id="cancel_button" class="secondary small button">Cancel</a>
										</div>
									</div>
								</div> 
							</section>
							<! loan application form 2 -->

							<section role="tabpanel" aria-hidden="false" class="content" id="app_form-2">
								<div class="row">
									<div class="large-12 small-12 columns">   
										<h4 id="application_title">Financial Status</h4>
									</div>
								</div>


								<form id='form2'>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Monthly Income ($):</div>
											</div>

											<div class="large-4 small-4 columns">
												<a class = 'hint' title="The total income you would earn from all jobs in a four week period.  If you know the weekly or fortnightly amount simply multiply by the necessary number to determine the value for a four week period.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='income' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['monthly_income'] or "" }}} >
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Loan Repayment ($):</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class = 'hint' title="Current monthly repayments you are making on all loans/debts you have.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='payment' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value= {{{ $fdata['loan_repayments'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<div class="large-4 small-4  columns">
												<div class="right inline">Other Expenses ($):</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="List your average monthly expenses, including by not limited to rent, average food bill, school fees, utility bills.  Do not list current loan repayments or debts in this section, these will be covered in later fields.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='expense' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['other_expense'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>


									<div class="row">
										<div class="large-12 small-12 columns">
											<h5 id="sub_title">Assets</h5>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Property ($):
												</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="Please input the total dollar value of all properties you own.  For example, Jane owns a house worth $400 000 and a beach house worth $200 000, she would put $600 000 in the property field."><img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a></span>
												<input type="text" id="right-label" name='property' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['property'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Vehicles ($):
												</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="Please input the current value of all vehicles you own.  Vehicles include (but are not limited to): cars, motorbikes, trucks, utes, motorboats, sailboats, planes, helicopters, and motorised scooters.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='vehicle' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value= {{{ $fdata['vehicle'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Shares ($):</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="The total value of all shares you own."><img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a></span>
												<input type="text" id="right-label" name='share' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['share'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Other ($):
												</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="The total value of anything else considered an asset.  Basic rule is if you would insure the item seperately from your home and contents insurance it consitutes an asset.  This includes, but is not limited to: expensive/antique jewlery, a large collection of work tools (e.g. builder's tools), or artwork.">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='otherproperty'  
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['others'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns">
											<h5 id="sub_title">Liabilities</h5>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Home Loan ($):</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="Please state the total amount you have owing on your Home Loan (if you do not have, or have never had, a Home Loan the answer is 0).">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='homeloan'  
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['home_loan'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Car Loan ($):</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="Please state the total amount you have owing on your Car Loan (if you do not have, or have never had, a Car Loan the answer is 0).">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='carloan'
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['car_loan'] or "" }}} >
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
											<div class="large-4 small-4 columns">
												<div class="right inline">Other Loan ($):</div>
											</div>
											<div class="large-4 small-4 columns">
												<a class='hint' title="Please state the total amount you have owing on any other loans or debts (if you do not have, or have never had, any other loans/debts the answer is 0).">
												<img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
												<input type="text" id="right-label" name='otherloan' 
												data-validation = "number"
												data-validation-error-msg="Use digits only"
												value={{{ $fdata['other_loan'] or "" }}}>
											</div>
											<div class ="large-4 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
								</form>
								<div class="row">
									<div class="large-8 columns">
								<div class="right"> 
									<a href="#app_form-3" id="submit_button" class="secondary small button nextForm">Next</a>
								</div>
								<div class="right"> 
									<a href="#" id="cancel_button" class="secondary small button prevForm">Previous</a>
								</div> 
								</div>
								</div>

							</section>

							<! loan application form 3 -->

							<section role="tabpanel" aria-hidden="false" class="content" id="app_form-3">
								<div class="row">
									<div class="large-12 columns">   
										<h4 id="application_title">Living and Employment Status</h4>
									</div>
								</div>

								<form id='form3'>
									<div class="row">
										<div class="large-12 columns">
											<h5 id="sub_title">Living Status</h5>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
												<div class="large-5 columns">
													<div class="right inline">Marital status:</div>
												</div>
												<div class="large-4 columns">
													<!-- <input type="text" id="right-label" name='marital'> -->
													{{ Form::select('marital', array(
														'Single'=>'Single',
														'Married'=>'Married',
														'Defacto'=> 'Defacto',
														'Divroced' => 'Divorced',
														'Windowed'=> 'Widowed'
													)  ,$fdata['marital'] ) }}
											</div>
											<div class ="large-3 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
												<div class="large-5 small-4 columns">
													<div class="right inline">Residence status:</div>
												</div>
												<div class="large-4 small -4 columns">
												{{ Form::select('residence', array(
													'Boarding' => 'Boarding',
													'Living with parent' => 'Living with parents',
													'Renting' => 'Renting',
													'Home owner with Mortgage' => 'Home owner with Mortgage',
													'Home owner without Mortgage' => 'Home owner without Mortgage'
												), $fdata['residence']) }}
												</div>
												<div class ="large-3 small-4 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 samll-12 columns">
												<div class="large-5 small -5 columns">
													<div class="right inline">Time at current address(Y/M):</div>
												</div>
												<div class="large-2 small-2 columns">
													<input type="text" 
													data-validation = "number"
													data-validation-error-msg="Use digits only"
													id="right-label" name='year_cur_addr' value={{$fdata['year_cur_addr']}}>
												</div>

												<div class="large-2 small-2 columns">
													<input style = "width:78%" type="text" id="right-label" name='month_cur_addr' value={{$fdata['month_cur_addr']}}>
												</div>
												<div class ="large-3 small-3 columns">
                                          	  		<span class = "errorMsg"> </span>
                                            	</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
												<div class="large-5 small-5 columns">
													<div class="right inline">Time at previous address(Y/M):</div>
												</div>
												<div class="large-2 small-2 columns">
													<input type="text" id="right-label" name='year_old_addr' value={{$fdata['year_old_addr']}}
													data-validation = "number"
													data-validation-error-msg="Use digits only"
													>
												</div>

												<div class="large-2 columns">
													<input style = "width:78%" type="text" id="right-label" name='month_old_addr' value={{$fdata['month_old_addr']}}>
												</div>
												<div class ="large-3 small-3 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns">
											<h5 id="sub_title">Employment Status</h5>
										</div>
									</div>

									<div class="row">
										<div class="large-12 small-12 columns">
												<div class="large-5 small-5 columns">
													<div class="right inline">Employment status:</div>
												</div>
												<div class="large-4 small-4 columns">
            										{{ Form::select('employment', array(
            											'Casual'=>'Casual',
            											'Full time' => 'Full time',
            											'Part time' => 'Part time',
            											'Self employed' => 'Self employed',
            											'Unemployed' => 'unemployed',
            											'Retired' => 'Retired'
            										), $fdata['employ_status']) }}
            										
												</div>
												<div class ="large-3 small-3 columns">
                                            <span class = "errorMsg"> </span>
                                            </div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 samll-12 columns">
												<div class="large-5 small-5 columns">
													<div class="right inline">Employer:</div>
												</div>
												<div class="large-4 small-4 columns">
													<a class="hint" title="If you have more than one job, choose the answer for the job from which you earn the most income."><img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
													<input type="text" id="right-label" name='employer' value={{{ $fdata['employer'] or "" }}}>
												</div>
												<div class ="large-3 small-3 columns">
                                            		<span class = "errorMsg"> </span>
                                            	</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
												<div class="large-5 small-5 columns">
													<div class="right inline">Position:</div>
												</div>
												<div class="large-4 columns">
													<a class="hint" title="If you have more than one job, choose the answer for the job from which you earn the most income."><img src="../foundation-5.4.0/img/query_icon.png" id="logout"></a>
													<input type="text" id="right-label" name='position' value={{{ $fdata['position'] or ""}}}>
												</div>
												<div class ="large-3 small-4 columns">
                                            		<span class = "errorMsg"> </span>
                                            	</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns">
												<div class="large-5 columns">
													<div class="right inline">Time at current job (Y/M):</div>
												</div>
												<div class="large-2 columns">
													
													<input type="text" id="right-label" name='year_cur_job' value={{$fdata['year_cur_job']}}
													data-validation = "number"
													data-validation-allowing = "range[0;12]"
													data-validation-error-msg="Use digits only"
													>
												</div>

												<div class="large-2 columns">
													<input  style = "width:78%" type="text" id="right-label" name='month_cur_job' value={{$fdata['month_cur_job']}}
													data-validation = "number"
													data-validation-allowing = "range[0;11]"
													data-validation-error-msg="Use digits only"
													>
												</div>
												<div class ="large-3 small-3 columns">
                                          	  		<span class = "errorMsg"> </span>
                                            	</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 small-12 columns">
												<div class="large-5 small-5 columns">
													<div class="right inline">Time at previous job(Y/M):</div>
												</div>
												<div class="large-2 columns">

													<input  type="text" id="right-label" name='year_old_job' value={{$fdata['year_old_job']}}
													data-validation = "number"
													data-validation-allowing = "range[0;12]"
													data-validation-error-msg="Use digits only"
													>
												</div>
												<div class="large-2 columns">
													<input  style = "width:78%" type="text" id="right-label" name='month_old_job' value={{$fdata['month_old_job']}}
													data-validation = "number"
													data-validation-allowing = "range[0;11]"
													data-validation-error-msg="Use digits only"
													>
												</div>
												<div class ="large-3 small-3 columns">
                                          	  		<span class = "errorMsg"> </span>
                                            	</div>
										</div>
									</div>

								</form>
								<div class="row">
									<div class="large-8 columns">
								<div class="right"> 
									<!-- <a href="confirm" id="submit_button" class="secondary small button nextForm">Confirm</a> -->
									<a href="#" id="submit_button" class="secondary small button confirmBtn">Confirm</a>
								</div>
								<div class="right"> 
									<a href="#" id="cancel_button" class="secondary small button prevForm">Previous</a>
								</div> 
							</div>
						</div>

							</section>

							
						</div>

					</div>
				</div>

			</div>

 <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>

				<script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
				<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
				<script src="../foundation-5.4.0/js/validateLendPage.js"></script>
				<script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
				<script src="../foundation-5.4.0/js/loanApp.js"></script>
				<script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
				<script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
				<script src="../foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
				<script>
				$(document).foundation();
				getStep();
				enableBtns();
				$('#application_tablist a').on('click',function(){
					var active = $('li.active').find('a').attr('tabIndex');
					//var index = $(this).attr('tabIndex');
					console.log(active);
					if(!validate_form(active)) {
						return false;
					}
				});
				
				/*$.validate({
					form:'#form1, #form2, #form3',
					validateOnBlur : true,
					onSuccess: function(){
						console.log('success');
					},
					onError: function() {
						alert("dota");
						disableStep();
						return false; 
					}
					
				});*/
				</script>   
				<link rel="stylesheet" href="../foundation-5.4.0/css/css_validate.css">
			</body>
			</html>
