<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="/foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="/foundation-5.4.0/css/css_self.css">

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
<!pic in the right-->
<div class="right">

        <div class="large-12 columns" id="hwors">
        <img src="../foundation-5.4.0/img/hworks.jpg" />

</div>

</div>
<!--context in the left-->
<div class="row">
 <div class="tabs-content" id="main_tab">
  <div class="large-8 columns">

    <h4 id="word4">How MoneyLink Works</h4>
    </br>
<p>
MoneyLink will be a web-based service that matches borrowers up with investors. 
Users of the website looking to borrow money will provide information about themselves and their financial situation as well as how much money they need and what they need it for. 
The system will then take this information and match them up with an investor who can meet their needs. 
The investor is also required to provide information about themselves which can be used to determine what sort of borrower to match them up with.
</p>
<p>
The information the borrower provides will be used to determine their risk and suitability for a loan. 
High risk borrowers can then be matched up with investors who are interested (and able) to take this risk. 
More cautious investors will be matched up with lower risk borrowers. 
An algorithm will be used to assess the information provided by borrowers and investors thus removing any human labour on the part of MoneyLink from the process. 
The end website will function independently and require no staff - apart from website maintenance to ensure the systems are working. 
</p>
<p>
The algorithm for matching investors and borrowers is what's going to make MoneyLink a unique system compared to other systems of peer-to-peer financing. 
Taking the human element, the role normally filled by a bank employee and having the system do the calculations will increase speed and efficiency of the process. 
The information provided by the users will include things like current wages, current expenses and assets. 
This information will be fed into the algorithm and a rating will be returned indicating whether the borrower is low or high risk or if the investor is able to take a low or high risk. 
While the investor will provide some information to determine lending potential they will also have the options of specifying how much risk they are willing to take and this will be heavily weighted in the final algorithm. 
</p>
</div>
<!-- <div class="row">
<div class="tabs-content"  id="main_tab">
  <div class="large-4 columns">
    <h1 id="word2">MoneyLink</h1>
    <h4 id="word2">MOST TRUSTED</h4>
    </div>
</div> -->
  
</div>
</div>

  <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>
  <script src="/foundation-5.4.0/js/vendor/jquery.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.tab.js"></script>
  <script>
  $(document).foundation();
  </script>   
</body>
</html>