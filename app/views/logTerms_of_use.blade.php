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
    <h1>Terms of Use</h1>
<ul>
  <li>Users are required to provide true and honest information in all interactions with MoneyLink.  When providing information users are required to ensure as little ambiguity as possible.</li>
  <li>MoneyLink has made every attempt to enure that requests for information are as clear and unambigous as possible and provide additional information about what is required when there is a perceived lack of clarity.</li>
  <li>MoneyLink is not responsible for the truth and validity of the information provided by other MoneyLink users.  Any user found to have provided fraudulant information will promptly banned from using the website.  It is an individual user's responsibility to seek punal action should the provision of faudulant information cause that user financial problems.</li>
  <li>No user of MoneyLink is permitted to create more than one account.  MoneyLink will require unique personal information to verfiy identity and ensure that no user creates more than one account.</li>
  <li>MoneyLink does not handle any money.  There is no system for transfering money.  This site is simply a matching engine and it is the responsibility of the borrower and lenders to communicate and sort out the final details about money transfers and loan repayments.</li>
  <li>MoneyLink recommends that people seek the advice and council of a lawer to draft up a contract.</li>
  <li>MoneyLink is not responsible for the actions of it's users and cannot be held resposible for any criminal activity through this site.</li>
  <li>Users have a responsibility to not commit crimal activity through this website.</li>
</ul>
  </div>
</div>
</div>



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