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
           <img id="logo" src="../foundation-5.4.0/img/logos.png">
           <img id="font" src="../foundation-5.4.0/img/font.png">
         </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
         <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
       </ul>
        <section class="top-bar-section">
          <div class="show-for-medium-only">
            <ul>
          <li class="has-dropdown right" id="menu"> 
            <a href="#">Menu</a> 
            <ul class="dropdown">
              <li><a href="/">Home</a></li>
              <li><a href="about">About MoneyLink</a></li>
              <li><a href="hworks">How MoneyLink Works</a></li>
              <li><a href="contact">Contact</a></li>
            </ul> 
          </li>
        </ul>
      </div>
      <div class="show-for-large-only">
          <ul class="right">
          <li><a href="/">Home</a></li>
              <li><a href="about">About MoneyLink</a></li>
              <li><a href="hworks">How MoneyLink Works</a></li>
              <li><a href="contact">Contact</a></li>
        </ul>
      </div>
      <div class="show-for-small-only">
        <ul>
          <li><a href="/">Home</a></li>
              <li><a href="about">About MoneyLink</a></li>
              <li><a href="hworks">How MoneyLink Works</a></li>
              <li><a href="contact">Contact</a></li>
        </ul>
      </div>
        </section>
    </nav>


<! tab titles -->
    <ul class="tabs" data-tab role="tablist">
    </ul>
    <div class="tabs-content"  id="main_tab">

      <! register_comfir page -->
      <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
        <div class="large-12 columns">
          <p>Please check your email to comfirm and complete your registration.</p>
        </div>
  
     </section>
    </div>



<! footer -->
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
  <script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script> 
  <script>
  $(document).foundation();
  </script>   
</body>
</html>