<!DOCTYPE html>
<header>
	<link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">
		<script language="javascript" type="text/javascript" src="../foundation-5.4.0/js/getAgeJS.js"></script>
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
			<li class="toggle-topbar menu-icon"><a href="index.html"><span>Menu</span></a></li>
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
		<div class="small-12 large-12 columns">

			<! tab titles -->
			<ul class="tabs" data-tab role="tablist">
				<li class="tab-title active" role="presentational"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">My Transaction</a></li>
				<li class="tab-title" role="presentational"><a href="#panel2-2" role="tab" tabindex="0"aria-selected="false" controls="panel2-2">My Profile</a></li>
				<li class="tab-title" role="presentational"><a href="#panel2-3" role="tab" tabindex="0"aria-selected="false" controls="panel2-3">Borrow Money</a></li>
				<li class="tab-title" role="presentational"><a href="#panel2-4" role="tab" tabindex="0"aria-selected="false" controls="panel2-4">Lend Money</a></li>
			</ul>

			<div class="tabs-content"  id="main_tab">

				<! my transaction page -->
				<section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
					<div class="small-12 large-12 columns">
						<!-- <h3>My Transactions</h3> -->

						<h5 id="title_bg">Active Loan Requests:</h5>
						<table>
							<thead>
								<tr>
									<th>Ammount</th>
									<th>Purpose</th>
									<th>Loan Durations</th>
									<th>Interest Rate</th>
									<th>No. of Bids</th>
								</tr>
							</thead>
							<tbody>
								@if(isset($loanApp))
								@foreach($loanApp as $loan )
								<tr>
									<td>{{ $loan->amount }}</td>
									<td>{{ $loan-> purpose }}</td>
									<td>{{ $loan-> term }}</td>
									<td>{{ $loan-> pref_rate }} </td>
									<td>4 (0 new)</td>
								</tr>
								@endforeach
								@endif
					<!-- 		<tr>
								<td>$6 000</td>
								<td>Vet Bills</td>
								<td>18 months</td>
								<td>6%</td>
								<td>8 (2 new)</td>
							</tr> -->
						</tbody>
					</table>
					
					<h5 id="title_bg">Your Bids on Loans:</h5>
					<table>
						<thead>
							<tr>
								<th>Applicant</th>
								<th>Loan Ammount</th>
								<th>Purpose</th>
								<th>Loan Duration</th>
								<th>Interest Rate</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($bids))
							@foreach($bids as $bid)
							<tr>
								<td>{{ $bid->fname }} &nbsp; {{ $bid-> lname }}</td>
								<td>{{ $bid-> bid_amount }}</td>
								<td>{{ $bid-> purpose }}</td>
								<td>{{ $bid-> term }}</td>
								<td>{{ $bid-> pref_rate }}</td>
								<td id="loan_status">Pending</td>
							</tr>
							@endforeach
							@endif
							<!-- <tr>
								<td>Anna Phillips</td>
								<td>$400</td>
								<td>Party</td>
								<td>1 month</td>
								<td>10%</td>
								<td id="loan_status">Pending</td>
							</tr>
							<tr>
								<td>George Clark</td>
								<td>$1 000</td>
								<td>Tutition</td>
								<td>4 months</td>
								<td>8%</td>
								<td id="loan_status">Pending</td>
							</tr> -->
						</tbody> 
					</table>

					<h5 id="title_bg">Active Investments:</h5>
					<table>
						<thead>
							<tr>
								<th>Applicant</th>
								<th>Loan Ammount</th>
								<th>Purpose</th>
								<th>Loan Duration</th>
								<th>Interest Rate</th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

					<h5 id="title_bg">Active Loans:</h5>
					<table>
						<thead>
							<tr>
								<th>Investor</th>
								<th>Loan Ammount</th>
								<th>Purpose</th>
								<th>Loan Duration</th>
								<th>Interest Rate</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Thor</td>
								<td>$4 000</td>
								<td>Armour Repairs</td>
								<td>7 months</td>
								<td>5%</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>

			<! my profile page -->
			<section role="tabpanel" aria-hidden="false" class="content" id="panel2-2">
				<div class="small-12 large-12 columns">
					<!-- <h3>My Profile</h3> -->
					<div class="right" id="apply_button"> 
						<a href="editprofile" class="button">Edit Profile </a>
						<a href="#" class = 'button'> Change Password </a>
					</div> 
					<div class="large-2 columns">
						<img src="../foundation-5.4.0/img/profile_pic.png" alt="Profile picture" class="profile_pic"/>
					</div>
					<div class="large-4 columns">
						<h2>{{ $pdata['userfname'] or "" }} {{ $pdata['userlname'] or "" }}</h2>
						<dl class="inline-list right">
							<dt>Rating:</dt>
							<dd>
								<img src="../foundation-5.4.0/img/Thumbs-Up.png" alt="Thumbs Up" class="thumb" />
								<img src="../foundation-5.4.0/img/thumbs_down.png" alt="Thumbs Down" class="thumb" />
							</dd>
						</dl>
					</div>
					<div class="large-12 columns">
						<h4 id="title_bg">Introduction</h4>
						<p>{{ $pdata['userdes'] or "" }}</p>
						<h4 id="title_bg">Personal Information</h4>
						<dl>
							<div class="large-6 columns">
								<dt>Location:</dt>
								<dd>Brisbane, Australia</dd>
								<dt>Occupation:</dt>
								<dd>{{ $pdata['useroccupation'] or "" }}</dd>
							</div>
							<div class="large-6 columns">
								<dt>Gender:</dt>
								<dd>{{ $pdata['usergender'] or "" }}</dd>
								<dt>Age:</dt>
								<dd id="dob"> 
									{{ $pdata['userdob'] or "" }}
									<script>
										var dob = {{ $pdata['userdob'] or "" }};
										var dobSplit = dob.split("-");
										console.log(dobSplit);
										
										console.log("----");
										var dobString = new Date({{ $pdata['userdob'] or "" }});
										console.log("----");
										getAge(dobString);
									</script>
									
								</dd>
								
							</div>
						</dl>

						<h4 id="title_bg">Transaction History</h4>
						<table>
							<thead>
								<tr>
									<th>Loan Type</th>
									<th>Loan Ammount</th>
									<th>Loan Rate</th>
									<th>Loan Duration</th>
									<th>Role of User</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Car Loan</td>
									<td>$7 000</td>
									<td>8%</td>
									<td>32 months</td>
									<td>Investor</td>
								</tr>
								<tr>
									<td>Medical Loan</td>
									<td>$2 000</td>
									<td>9%</td>
									<td>12 months</td>
									<td>Borrower</td>
								</tr>
							</tbody>
						</table>
						<hr />


					</div>
				</div>
			</section>

			<! borrow money page -->
			<section role="tabpanel" aria-hidden="true" class="content" id="panel2-3">
				<! loan application page -->
				<div class="small-12 large-12 columns">
					<p>Please complete the loan application form.</p>
					<div class="large-12 columns">

						<ul class="tabs" id="application_tablist" data-tab role="tablist">
							<li class="tab-title active" role="presentational"><a href="#app_form-1" id="application_tab" role="tab" tabindex="0" aria-selected="true" controls="app_form-1">1</a></li>
							<li class="tab-title" role="presentational"><a href="#app_form-2" id="application_tab" role="tab" tabindex="0"aria-selected="false" controls="app_form-2">2</a></li>
							<li class="tab-title" role="presentational"><a href="#app_form-3" id="application_tab" role="tab" tabindex="0"aria-selected="false" controls="app_form-3">3</a></li>
							<li class="tab-title" role="presentational"><a href="#app_form-4" id="application_tab" role="tab" tabindex="0"aria-selected="false" controls="app_form-4">4</a></li>
						</ul>

						<div class="tabs-content applications">

							<! loan application form 1 -->
							<section role="tabpanel" aria-hidden="false" class="content active" id="app_form-1">
								<div class="row">
									<div class="large-12 columns">   
										<h4 id="application_title">Loan Details:</h4>
									</div>
								</div>
								
								<form id='form1'>
									<div class="row">
										<div class="small-12 large-12 columns"  id="profile_form">
											<div class="row">
												<div class="small-5 large-6  columns">
													<label for="right-label" class="right inline">Loan Amount:</label>
												</div>
												<div class="small-7 large-5 columns">
													<input type="text" id="right-label" name='amount'>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="medium-12 large-12 columns" id="profile_form">
											<div class="row">
												<div class="medium-5 large-6 columns">
													<label for="right-label" class="right inline">Term(months):</label>
												</div>
												<div class="medium-7 large-5 columns">
													<input type="text" id="right-label" name='term'>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="medium-12 large-12 columns" id="profile_form">
											<div class="row">
												<div class="medium-5 large-6 columns">
													<label for="right-label" class="right inline">Prefered Rate:</label>
												</div>
												<div class="medium-7 large-5 columns" >
													<input type="text" id="right-label" name='pref_rate'>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class=" meduium-12 large-12 columns" id="profile_form">
											<div class="row">
												<div class=" medium-5 large-6 columns">
													<label for="right-label" class="right inline">Purpose</label>
												</div>
												<div class=" medium-7 large-5 columns">
													<Select id='right-label' name='purpose'>
														<option> Car </option>
														<option> House </option>
														<option> Other </option>
													</Select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="medium-5 large-6 columns">
													<label for="right-label" class="right inline">Description</label>
												</div>
												<div class="medium-7 large-5 columns">
													<textarea id='right-label' name='description'>
													</textarea>
												</div>
											</div>
										</div>
									</div>
								</form> 

								<div class="right" id="submit_button"> 
									<a href="#app_form-2" class="secondary small button nextForm">Next</a>
								</div>
								<div class="right" id="cancel_button"> 
									<a href="#" class="secondary small button">Cancel</a>
								</div> 
							</section>
							<! loan application form 2 -->

							<section role="tabpanel" aria-hidden="false" class="content" id="app_form-2">
								<div class="row">
									<div class="large-12 columns">   
										<h4 id="application_title">Financial Status:</h4>
									</div>
								</div>


								<form id='form2'>
									<div class="row">
										<div class="large-12 columns"  id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Monthly Income:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='income' value={{{ $fdata['income'] or "" }}} >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Loan Repayment:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='payment' value= {{{ $fdata['loan_repayments'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Other Expenses:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='expense' value={{{ $fdata['other_expense'] or "" }}}>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-4 columns">
													<div class="right inline">
														<p>Assets:</p>
													</div> 
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Property:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='property' value={{{ $fdata['property'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Vehicles:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='vehicle' value= {{{ $fdata['vehicle'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Shares:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='share' value={{{ $fdata['share'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Other:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='otherproperty'  value={{{ $fdata['others'] or "" }}}>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-4 columns">
													<div class="right inline">
														<p>Liabilities:</p>
													</div> 
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Home Loan:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='homeloan'  value={{{ $fdata['home_loan'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Car Loan:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='carloan'value={{{ $fdata['car_loan'] or "" }}} >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Other Loan:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='otherloan' value={{{ $fdata['other_loan'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
								</form>
								<div class="right" id="submit_button"> 
									<a href="#app_form-3" class="secondary small button nextForm">Next</a>
								</div>
								<div class="right" id="cancel_button"> 
									<a href="#" class="secondary small button">Previous</a>
								</div> 

							</section>

							<! loan application form 3 -->

							<section role="tabpanel" aria-hidden="false" class="content" id="app_form-3">
								<div class="row">
									<div class="large-12 columns">   
										<h4 id="application_title">Living and Employment Status:</h4>
									</div>
								</div>

								<form id='form3'>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-4 columns">
													<div class="right inline">
														<p>Living Status:</p>
													</div> 
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns"  id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Marital status:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='marital'>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Residence status:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='residence' value={{{ $fdata['residence'] or ""}}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Time at current address:</label>
												</div>
												<div class='large-1 columns'> 
													<p></p>
												</div>
												<div class="large-3 columns">
													<input type="text" id="right-label" name='year_cur_addr' value='Year'>
												</div>

												<div class="large-2 columns">
													<input type="text" id="right-label" name='month_cur_addr' value="Month">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Time at previous address:</label>
												</div>
												<div class='large-1 columns'> 
													<p></p>
												</div>
												<div class="large-3 columns">
													<input type="text" id="right-label" name='year_old_addr' value='Year'>
												</div>

												<div class="large-2 columns">
													<input type="text" id="right-label" name='month_old_addr' value="Month">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-4 columns">
													<div class="right inline">
														<p>Employment Status:</p>
													</div> 
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form" >
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Employment status:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='employment' value={{{ $fdata['employ_status'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Employer:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='employer' value={{{ $fdata['employer'] or "" }}}>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Position:</label>
												</div>
												<div class="large-5 columns">
													<input type="text" id="right-label" name='position' value={{{ $fdata['position'] or ""}}}>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Time at current job:</label>
												</div>
												<div class='large-1 columns'> 
													<p></p>
												</div>
												<div class="large-3 columns">
													<input type="text" id="right-label" name='year_cur_job' value='Year'>
												</div>

												<div class="large-2 columns">
													<input type="text" id="right-label" name='month_cur_job' value="Month">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns" id="profile_form">
											<div class="row">
												<div class="large-6 columns">
													<label for="right-label" class="right inline">Time at previous job:</label>
												</div>
												<div class='large-1 columns'> 
													<p></p>
												</div>
												<div class="large-3 columns">
													<input type="text" id="right-label" name='year_old_job' value='Year'>
												</div>

												<div class="large-2 columns">
													<input type="text" id="right-label" name='month_old_job' value="Month">
												</div>
											</div>
										</div>
									</div>

								</form>
								<div class="right" id="submit_button"> 
									<a href="#" class="secondary small button nextForm">Next</a>
								</div>
								<div class="right" id="cancel_button"> 
									<a href="#" class="secondary small button">Previous</a>
								</div> 

							</section>
	 <!--  <div class='nextBtn'>
		 <div class="right " id="submit_button"> 
						 <a href="#" class="secondary small button nextForm">Next</a>
		</div>
					 <div class="right " id="cancel_button"> 
						 <a href="#" class="secondary small button">Cancel</a>
					 </div>
					</div> -->

					<! confirmation page -->

					<section role="tabpanel" aria-hidden="false" class="content" id="app_form-4">
						<div class="row">
							<div class="large-12 columns">   
								<h4 id="application_title">Confirmation:</h4>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<!-- <div class="large-12 columns"> -->
								<h4 id="title_bg">Loan Deatils</h4>
								<dt>Loan Amount:</dt>
								<dd>$30 000</dd>
								<dt>Term (months):</dt>
								<dd>48 months</dd>
								<dt>Prefered Rate:</dt>
								<dd>7% p.a.</dd>
							</div>
						</div>
						<!-- </div> -->
						<hr />
						<div class="row">
							<div class="large-12 columns">
								<div class="row">
									<div class="large-4 columns">
										<h4 id="title_bg">Financial Status</h4>
										<dt>Monthly Income:</dt>
										<dd>$4 820</dd>
										<dt>Loan Repayment:</dt>
										<dd>$2 400</dd>
										<dt>Other Expenses:</dt>
										<dd>$1 288</dd>
									</div>
									<div class="large-4 columns">
										<h4 id="title_bg">Assets</h4>
										<dt>Preperty:</dt>
										<dd>$300 000</dd>
										<dt>Vehicles:</dt>
										<dd>$7 000</dd>
										<dt>Shares:</dt>
										<dd>$0</dd>
										<dt>Other:</dt>
										<dd>$2 000</dd>
									</div>
									<div class="large-4 columns">
										<h4 id="title_bg">Liabilities:</h4>
										<dt>Home Loan:</dt>
										<dd>$4 000</dd>
										<dt>Car Loan:</dt>
										<dd>$3 000</dd>
										<dt>Other Loan:</dt>
										<dd>$0</dd>
									</div>
								</div>
							</div>
						</div>
						<hr />
						<div class="row">
							<div class="large-12 columns">
								<div class="row">
									<div class="large-6 columns">
										<h4 id="title_bg">Living Status</h4>
										<dt>Marital status:</dt>
										<dd>Single</dd>
										<dt>Residence status:</dt>
										<dd>Renter</dd>
										<dt>Time at current address:</dt>
										<dd>More than 5 years</dd>
										<dt>Time at previous address:</dt>
										<dd>n/a</dd>
									</div>
									<div class="large-6 columns">
										<h4 id="title_bg">Employment</h4>
										<dt>Employment status:</dt>
										<dd>Casual</dd>
										<dt>Employer:</dt>
										<dd>Government</dd>
										<dt>Position:</dt>
										<dd>Paraplaner</dd>
										<dt>Time at current job:</dt>
										<dd>18 months</dd>
										<dt>Time at previous job:</dt>
										<dd>2 years</dd>
									</div>
								</div>
							</div> 
						</div>
						<hr />


						<div class="right" id="submit_button"> 
							<a href="#" id='confirm' class="secondary small button">Submit</a>
						</div>
						<div class="right" id="cancel_button"> 
							<a href="#" class="secondary small button">Previous</a>
						</div>


					</section>

				</section>

				<!--    </section> -->

				<! lend money page -->
				<section role="tabpanel" aria-hidden="true" class="content" id="panel2-4">
					<div class="row">
						<div class="small-12 large-12 columns" id="content">
							<div class="inline list">
								<h3 id="loan_header">My Loan Portfolio:
									<div class="right" id="apply_button"> 
										<a href="#" data-reveal-id="edit_pref" class="secondary small button">Edit Preferences</a>
										<div id="edit_pref" class="reveal-modal" data-reveal> 

											<p>Edit your lender preferences:</p>
											<!--  <form id="pref_pop"> -->
											{{ Form::open(array('action'=>'LenderPrefController@saveLendPref','id'=>'pref_pop')) }}
											<div class="row">
												<div class="large-12 columns"  id="prefs_form">
													<div class="row">
														<div class="large-6 columns">
															<div class="right inline">
																Loan Range($):
															</div>
														</div>
														<div class="large-1 columns">
															<label for="right-label" class="right inline">Min:</label>
														</div>
														<div class="large-2 columns">
															<!-- 	<input type="text" id="right-label"> -->
															{{ Form::text('minLoan',null, array('id'=> 'right-label')) }}
														</div>
														<div class="large-1 columns">
															<label for="right-label" class="right inline">Max:</label>
														</div>
														<div class="large-2 columns">
															<!-- 	<input type="text" id="right-label"> -->
															{{ Form::text('maxLoan',null, array('id'=> 'right-label')) }}
														</div>                     
													</div>
												</div>
											</div>

											<div class="row">
												<div class="large-12 columns"  id="prefs_form">
													<div class="row">
														<div class="large-6 columns">
															<div class="right inline">
																Term Range(mths):
															</div>
														</div>
														<div class="large-1 columns">
															<label for="right-label" class="right inline">Min:</label>
														</div>

														<div class="large-2 columns">
															<!-- 	<input type="text" id="right-label"> -->
															{{ Form::text('minTerm',null, array('id'=> 'right-label')) }}
														</div>
														<div class="large-1 columns">
															<label for="right-label" class="right inline">Max:</label>
														</div>
														<div class="large-2 columns">
															<!-- 	<input type="text" id="right-label"> -->
															{{ Form::text('maxTerm',null, array('id'=> 'right-label')) }}
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="large-12 columns"  id="prefs_form">
													<div class="row">
														<div class="large-6 columns">
															<div class="right inline">
																Rate Range(%):
															</div>
														</div>
														<div class="large-1 columns">
															<label for="right-label" class="right inline">Min:</label>
														</div>

														<div class="large-2 columns">
															<!-- 	<input type="text" id="right-label"> -->
															{{ Form::text('minRate',null, array('id'=> 'right-label')) }}
														</div>
														<div class="large-1 columns">
															<label for="right-label" class="right inline">Max:</label>
														</div>
														<div class="large-2 columns">
															<!-- 	<input type="text" id="right-label"> -->
															{{ Form::text('maxRate',null, array('id'=> 'right-label')) }}
														</div>

													</div>
												</div>
											</div>

											
									  <!-- 	<div class="right" id="submit_button"> 
								 <a href="#" class="secondary small button">Save</a>
								</div> -->
								
								{{ Form::close() }}
								<div class="right" id="submit_button"> 
								<!-- {{ Form::button('Save',array('id'=>'submit_button','class'=>'secondary small button')) }} -->
								<a href="#" id='Search' class="secondary small button">Save</a>
								</div>
								<div class="right" id="cancel_button"> 
									<a href="#" class="secondary small button">Cancel</a>
								</div>
								<!-- 	</form> -->

								<a class="close-reveal-modal">&#215;</a> 
							</div>
						</div>
					</h3>
				</div>

				<h4>Best Match</h4>
				<table>
					<thead>
						<tr>
							<th width="200">Applicant</th>
							<th>Loan Amount</th>
							<th>Purpose</th>
							<th>Term</th>
							<th>Rate</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@if(isset($allLoan))
						@foreach($allLoan as $result)
						<tr>
							<td>{{ $result-> fname }} {{ $result-> lname }}</td>
							<td>{{ $result-> amount }}</td>
							<td>{{ $result-> purpose }}</td>
							<td>{{ $result-> term }}</td>
							<td>{{ $result-> pref_rate }}</td>
							<td>{{ HTML::linkRoute('makebid','make bid',$result->loan_id,array('id'=>'make_bid')) }} </td>
						</tr>
						@endforeach
						@endif
						@if(isset($results))
						@foreach($results as $result)
						<tr>
							<td>{{ $result-> fname }} {{ $result-> lname }}</td>
							<td>{{ $result-> amount }}</td>
							<td>{{ $result-> purpose }}</td>
							<td>{{ $result-> term }}</td>
							<td>{{ $result-> pref_rate }}</td>
							<td>{{ HTML::linkRoute('makebid','make bid',$result->loan_id,array('id'=>'make_bid')) }} </td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>

			</div>
		</div>
	</section>
</div>
</div>
</div>

<footer>
	<div class="row">
		<div class="large-3 columns">
			<p><img id="logo" src="../foundation-5.4.0/img/logos.png">
				<img id="font" src="../foundation-5.4.0/img/font.png"></p>
			</div>
			<div class="large-9 columns">
				<ul class="inline-list right">
					<li><a href="#" id="bottom_links">Contact Us</a></li>
					<li><a href="#" id="bottom_links">About MoneyLink</a></li>
					<li><a href="#" id="bottom_links">How MoneyLink works</a></li>
					<li><a href="#" id="bottom_links">Privacy Policy</a></li>
					<li><a href="#" id="bottom_links">Term of Use</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
	<script src="../foundation-5.4.0/js/loanApp.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
	<script language="javascript" type="text/javascript" src="../foundation-5.4.0/js/getAgeJS.js"></script>
	<script>
	$(document).foundation();
	getStep();
	enableBtns();
	</script>   
</body>
</html>
