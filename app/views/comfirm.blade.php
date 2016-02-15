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


			<section role="tabpanel" aria-hidden="false" class="content" id="app_form-4">
				<div class="row">
					<div class="large-12 columns">   
						<h4 id="application_title">Confirm Your Details</h4>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<!-- <div class="large-12 columns"> -->
						<h4 id="title_bg">Loan Details</h4>
						<dt>Loan Amount:</dt>
						<!-- <dd> <?php echo 'amount:'.$_POST["amount"].'<br>'; ?>
						</dd> -->
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

				<div class="row">
					<div class="large-8 columns">
				<div class="right"> 
					<a href="#" id="submit_button" class="secondary small button confirmBtn">Submit</a>
				</div>
				<div class="right"> 
					<a href="#" id="cancel_button" class="secondary small button">Previous</a>
				</div>
				</div>
			</div>
			</section>
		</body>



			<footer>
				<div class="row">
					<div class="large-3 columns">
						<p><img id="logo" src="../foundation-5.4.0/img/logos.png">
							<img id="font" src="../foundation-5.4.0/img/font.png"></p>
						</div>
						<div class="large-9 columns">
							<ul class="inline-list right">
								<li><a href="#" id="bottom_links">Contact Us</a></li>
								<li><a href="about" id="bottom_links">About MoneyLink</a></li>
								<li><a href="hworks" id="bottom_links">How MoneyLink works</a></li>
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
				<script>
				$(document).foundation();
				getStep();
				enableBtns();
				</script>   
			</body>
			</html>