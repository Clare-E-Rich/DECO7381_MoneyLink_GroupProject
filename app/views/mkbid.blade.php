<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">

</header>
<body>

<div class="row">
  <div class="large-12 columns">

    <! tab titles -->

      <! make bid page -->
<!--       <div class="row">  
      <div class="large-12 columns"> -->
          <div class="row">
          <div class="large-2 columns">
            <img src="../foundation-5.4.0/img/profile_pic.png" alt="Profile picture" class="profile_pic"/>
          </div>

          <div class="large-10 columns">

            <h4>Borrower: John Smith 
            <img src="../foundation-5.4.0/img/Thumbs-Up.png" alt="Thumbs Up" class="thumb" /></h4>
              <div class="large-10 columns">
            <dl>
                <dt>Loan Amount:</dt>
                <dd>$5,000</dd>
                <dt>Loan Purpose:</dt>
                <dd>Car</dd>
                <dt>Bidders:</dt>
                <dd>6</dd>
                <dt>Request Interest Rate:</dt>
                <dd>7.6%</dd>
                <dt>Request Term:</dt>
                <dd>30 months</dd>
              
            </dl>
            </div>

            </div>
            </div>
<!--             </div>
            </div> -->
            <!-- </div> -->
            <div class="row">  
      <div class="large-8 columns">
            <form id="bid_form">
            <div class="row">
              <div class="large-10 columns">
                <div class="row">
                  <div class="large-5 columns">
                    <label for="right-label" class="right inline">Proposed Loan Amount:</label>
                  </div>
                  <div class="large-7 columns">
                    <input type="text" id="right-label">
                  </div>
              </div>
              </div>
            </div>
            
            <div class="row">
              <div class="large-10 columns">
                <div class="row">
                  <div class="large-5 columns">
                    <label for="right-label" class="right inline">Other condition:</label>
                  </div>
                  <div class="large-7 columns">
                    <textarea type="text" id="right-label"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </form>
          
          <div class="right" id="submit_button"> 
           <a href="#" class="secondary small button">Submit</a>
         </div>

       </div>
       </div>
       </div>
       </div>


<script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
<script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
<script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
<script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
<script>
$(document).foundation();
</script>   
</body>
</html>