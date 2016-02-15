<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="/foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="/foundation-5.4.0/css/css_self.css">
<!--   <link rel="stylesheet" href="/foundation-5.4.0/css/about_how.css"> -->
</header>
<body>

  <! navigation bar -->
  <?php include '/var/www/htdocs/MoneyLink/app/views/template/nav.php'; ?>
 <div class="row">

  <div class="large-12 columns">
<!-- <div class="diagrambox"> -->

<img src="/foundation-5.4.0/img/matching_engine_digrm.png" alt="" id="about_pic"/>

<!-- </div> -->
</div>
</div>

 <div class="row">

  <div class="large-12 columns">
    <h4 id="h4Underline">Welcome to MoneyLink</h4>
    <p>MoneyLink is a peer-to-peer finance matching engine.  This means that MoneyLink has a list of users who are looking to borrow money and users who are interested in lending money for interest.  MoneyLink matches up lenders with borrowers to allow the two groups of people to meet and get the loan financed. </p>
    <p>MoneyLink is an alternative to traditional banks.  Banks make a large part of their profit by taking money out of long term deposits and loaning it to people for interest.  They pass some of this profit onto the people who have their money in long term deposits but keep a share of it themselves.  MoneyLink does not take a cut of the interest generated from a loan - in fact MoneyLink has nothing to do with the money, simply matching up borrowers with lenders - because of this the lender can get higher interest on their money while the borrower is also able to get a lower interest rate. </p>
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
          <li><a href="/contact" id="bottom_links">Contact Us</a></li>
          <li><a href="/about" id="bottom_links">About MoneyLink</a></li>
          <li><a href="/hworks" id="bottom_links">How MoneyLink works</a></li>
          <li><a href="/policy" id="bottom_links">Privacy Policy</a></li>
          <li><a href="/term" id="bottom_links">Term of Use</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="/foundation-5.4.0/js/vendor/jquery.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.tab.js"></script> 
  <script>
  $(document).foundation();
  </script>   
</body>
</html>