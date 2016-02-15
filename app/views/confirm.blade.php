<!DOCTYPE html>
<header>
	<link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">

</header>
<body>


	<! navigation bar -->

	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
       <a href="mytransaction"><img id="logo" src="../foundation-5.4.0/img/logos.png"></a>
       <a href="mytransaction"><img id="font" src="../foundation-5.4.0/img/font.png"></a>
			</li>
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
				<li id="title"><a href="mytransaction">My Transaction</a></li>
				<li id="title"><a href="profile">My Profile</a></li>
				<li id="active_title"><a href="borrow">Borrow Money</a></li>
				<li id="title"><a href="lend">Lend Money</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="tabs-content" id="main_tab"> 
				<h4 id="application_title">Confirm Your Details</h4>
				<div class="row">
					<div class="large-12 columns">
						<h4 id="title_bg">Loan Details</h4>
						<dt hidden>Loan ID:</dt>
						<dd hidden id="loanId">{{ $loanApp[0]->loan_id }}</dd>
						<dt>Loan Amount:</dt>
						<dd>{{ $loanApp[0]->amount }}</dd>
						<dt>Term (months):</dt>
						<dd>{{ $loanApp[0]->term }}</dd>
						<dt>Prefered Rate:</dt>
						<dd>{{ $loanApp[0]->pref_rate }}</dd>
					</div>
				</div>
				<!-- </div> -->
				<hr />
				<div class="row">
					<div class="large-12 columns">
						<div class="large-4 columns">
							<h4 id="title_bg">Financial Status</h4>
							<dt>Monthly Income:</dt>
							<dd>{{ $fdata['monthly_income'] }} </dd>
							<dt>Loan Repayment:</dt>
							<dd>{{ $fdata['loan_repayments'] }} </dd>
							<dt>Other Expenses:</dt>
							<dd>{{ $fdata['other_expense'] }} </dd>
						</div>
						<div class="large-4 columns">
							<h4 id="title_bg">Assets</h4>
							<dt>Preperty:</dt>
							<dd>{{ $fdata['property'] }}</dd>
							<dt>Vehicles:</dt>
							<dd>{{ $fdata['car_loan'] }}</dd>
							<dt>Shares:</dt>
							<dd>{{ $fdata['vehicle'] }}</dd>
							<dt>Other:</dt>
							<dd>{{ $fdata['others'] }}</dd>
						</div>
						<div class="large-4 columns">
							<h4 id="title_bg">Liabilities:</h4>
							<dt>Home Loan:</dt>
							<dd>{{ $fdata['home_loan'] }}</dd>
							<dt>Car Loan:</dt>
							<dd>{{ $fdata['car_loan'] }}</dd>
							<dt>Other Loan:</dt>
							<dd>{{ $fdata['other_loan'] }}</dd>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="large-12 columns">
						<div class="large-6 columns">
							<h4 id="title_bg">Living Status</h4>
							<dt>Marital status:</dt>
							<dd>{{ $fdata['marital'] }}</dd>
							<dt>Residence status:</dt>
							<dd>{{ $fdata['residence'] }}</dd>
							<dt>Time at current address:</dt>
							<dd>{{ $fdata['year_cur_addr'] }} years, {{ $fdata['month_cur_addr'] }} months</dd>
							<dt>Time at previous address:</dt>
							<dd>{{ $fdata['year_old_addr'] }} years, {{ $fdata['month_old_addr'] }} months</dd>
						</div>
						<div class="large-6 columns">
							<h4 id="title_bg">Employment</h4>
							<dt>Employment status:</dt>
							<dd>{{ $fdata['employ_status'] }}</dd>
							<dt>Employer:</dt>
							<dd>{{ $fdata['employer'] }}</dd>
							<dt>Position:</dt>
							<dd>{{ $fdata['position'] }}</dd>
							<dt>Time at current job:</dt>
							<dd>{{ $fdata['year_cur_job'] }} years, {{ $fdata['month_cur_job'] }} months</dd>
							<dt>Time at previous job:</dt>
							<dd>{{ $fdata['year_old_job'] }} years, {{ $fdata['month_old_job'] }} months</dd>
						</div>
				</div> 
			</div>
			<hr />
			<div class="row">
				<div class="large-8 columns">
					<div class="right"> 
						<a href="mytransaction" id="submit_button" class="secondary small button">Submit</a>
					</div>
					<div class="right"> 
						<a href="#" id="cancel_button" class="secondary small button cancelBtn">Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

  <?php include '/var/www/htdocs/MoneyLink/app/views/template/nav.php'; ?>

	<script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
	<script src="../foundation-5.4.0/js/loanApp.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
	<script>
		$(document).foundation();
		getStep();
		enableBtns();
	</script>   
</body>
</html>