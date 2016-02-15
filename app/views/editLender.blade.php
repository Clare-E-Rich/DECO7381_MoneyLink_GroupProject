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
     <li class="toggle-topbar menu-icon"><a href="index.html"><span>Menu</span></a></li>
   </ul>
   <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="profile" id="welcome">Welcome {{ Session::get('usermail') }}</a></li> 
      <li><a href="logout"><img id="logout" src="../foundation-5.4.0/img/logout_w.png"></a></li>

    </ul>
  </section>
</nav>


<div class="row">
  <div class="large-12 columns">

    <! tab titles -->
    <ul class="tabs" data-tab role="tablist">
      <li class="tab-title active" role="presentational"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Edit Preference</a></li>
    </ul>

    <div class="tabs-content"  id="main_tab">

      <! edit preference page -->
      <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
        <div class="large-12 columns">
          <p>Edit your lender preferences:</p>
          <!-- <form> -->
           {{ Form::open(array('action'=>'LenderPrefController@saveLendPref','id'=>'lendPref')) }}
            <div class="row">
              <div class="large-12 columns"  id="prefs_form">
                <div class="row">
                    <div class="large-6 columns">
                      <div class="right inline">
                      <p>Loan Range($):
                        </div>
                      </div>
                        <div class="large-1 columns">
                    <label for="right-label" class="right inline">Min:</label>
                  </div>
                  <div class="large-2 columns">
                     {{ Form::text('minLoan',null, array('id'=> 'right-label')) }}
                 <!--    <input type="text" id="right-label"> -->
                  </div>
                  <div class="large-1 columns">
                    <label for="right-label" class="right inline">Max:</label>
                  </div>
                  <div class="large-2 columns">
                   {{ Form::text('maxLoan',null, array('id'=> 'right-label')) }}
                   <!--  <input type="text" id="right-label"> -->
                  </div>
                  </p>
                  
                </div>
              </div>
            </div>

            <div class="row">
              <div class="large-12 columns"  id="prefs_form">
                <div class="row">
                    <div class="large-6 columns">
                    <div class="right inline">
                      <p>Term Range(mths):
                        </div>
                      </div>
                        <div class="large-1 columns">
                    <label for="right-label" class="right inline">Min:</label>
                  </div>

                  <div class="large-2 columns">
                    {{ Form::text('minTerm',null, array('id'=> 'right-label')) }}
                   <!--  <input type="text" id="right-label"> -->
                  </div>
                  <div class="large-1 columns">
                    <label for="right-label" class="right inline">Max:</label>
                  </div>
                  <div class="large-2 columns">
                   {{ Form::text('maxTerm',null, array('id'=> 'right-label')) }}
                   <!--  <input type="text" id="right-label"> -->
                  </div>
                  
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="large-12 columns"  id="prefs_form">
                <div class="row">
                    <div class="large-6 columns">
                      <div class="right inline">
                      <p>Rate Range(%):
                        </div>
                      </div>
                        <div class="large-1 columns">
                    <label for="right-label" class="right inline">Min:</label>
                  </div>

                  <div class="large-2 columns">
                   {{ Form::text('minRate',null, array('id'=> 'right-label')) }}
                   <!--  <input type="text" id="right-label"> -->
                  </div>
                  <div class="large-1 columns">
                    <label for="right-label" class="right inline">Max:</label>
                  </div>
                  <div class="large-2 columns">
                   {{ Form::text('maxRate',null, array('id'=> 'right-label')) }}
                   <!--  <input type="text" id="right-label"> -->
                  </div>
                  
                </div>
              </div>
            </div>
            
           <!--  </form> -->
           <div class="right" id="submit_button">
            {{ Form::submit('Save',null,array('id'=>'submit_button','class'=>'secondary small button')) }}
         </div>
<!--            {{ Form::submit('Save',null,array('id'=>'submit_button','class'=>'secondary small button')) }}
 -->       <div class="right" id="cancel_button"> 
           <a href="#" class="secondary small button">Cancel</a>
         </div>
          {{ Form::close() }}
          <!-- <div class="right" id="submit_button"> 
           <a href="#" class="secondary small button">Save</a>
         </div>
         <div class="right" id="cancel_button"> 
           <a href="#" class="secondary small button">Cancel</a>
         </div> -->
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
  <script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
  <script>
  $(document).foundation();
  </script>   
</body>
</html>