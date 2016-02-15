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
          <div class="tabs-content" id="main_tab">
            <div class="large-11 columns">
    <h3>Privacy Policy</h3>
    <p>MoneyLink takes the privacy and sercurity of it's users very seriously and does everthing possible to ensure that user's information is protected.</p>
    
    <h4>What info is collected</h4>
    <p>Because MoneyLink is performing a similar function to a bank assessing a person for a loan similar information as to what you would provide to a bank to verify user's identy and establish the user's financial situation.  This information will include:</p>
    <ul>
      <li>Two forms of personal identification</li>
      <li>
        <ul>
          <li>Passport</li>
          <li>Drivers Licence</li>
          <li>Ultility Bills</li>
          <li>18+ Card</li>
          <li>Medicare Card</li>
          <li>Medical Insurance Card</li>
          <li>Pension Card</li>
        </ul>
      </li>
      <li>Residential address</li>
      <li>Phone number (Mobile or Landline)</li>
      <li>Valid email</li>
      <li>General information about financial situation</li>
      <li>
        <ul>
          <li>Living situation</li>
          <li>Home Ownership status</li>
          <li>Occupation and employer</li>
          <li>Average weekly income</li>
          <li>Average weekly expenses</li>
          <li>General details about exisiting loans</li>
          <li>
            <ul>
              <li>What sort of loan</li>
              <li>How much still owning</li>
              <li>Weekly repayment value</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>

    <h4>Who is collecting that information</h4>
    <p>All information is being collected by MoneyLink and is being stored on MoneyLink's servers, located in Brisbane.  This information will not be shared with any third parties.  Our own staff undergo rigourous police and background checks and are limited in the information they have access to based on their roles within MoneyLink. </p>

    <h4>How the collected information is going to be used</h4>
    <p>The information collected by MoneyLink will only be used for the purposes requested by the user.  The informaiton will be used to assign a matching rating to the user and this number will be used to match borrowers with lenders.</p>
    <p>The information collected will never be shared with third parties and will not be used by MoneyLink for any promotional purposes.</p>


    <h4>What choices the customer has about the use and distribution of that information</h4>
    <p>Users will be able to determine what information they are willing to share with other users.  Information on a user's public profile is largely optional and the few fields which are mandatory contain very general information; i.e. Household: Single/Double/No Income</p>

    <h4>How a customer can edit or correct the collected information</h4>
    <p>User's will be able to easily edit the information on their profile page as well as their personal information by clicking an "Edit Profile" button on their profile page. </p>
    <p>User's will not be able to change the details submitted with a loan once the loan has been submitted.  If a user discovers an error or wishes to make an amendment they must cancel the existing loan request and resubmit it.  User's are encouraged to use the Confirmation page of the loan request process carefully as this gives user's the opportunity to review the details before submnission.</p>

    <p>While MoneyLink requires users to provide some information about themselves no information beyond a name and very genernal information will be displayed to other users.  When a match between two users has been made users will be required to approve any sharing of information with each other and will have control over what information is shared. </p>
</div>
  </div>
</div>
</div>

<!-- <footer>
    <div class="row">
      <div class="large-3 columns">
        <p><img id="logo" src="../foundation-5.4.0/img/logos.png">
                   <img id="font" src="../foundation-5.4.0/img/font.png"></p>
      </div>
      <div class="large-9 columns">
        <ul class="inline-list right">
          <li><a href="/policy" id="bottom_links">Privacy Policy</a></li>
          <li><a href="/term" id="bottom_links">Term of Use</a></li>
        </ul>
      </div>
    </div>
  </footer> -->
  <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>
  <script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script> 
  <script>
  $(document).foundation();
  </script>   
</body>
</html>