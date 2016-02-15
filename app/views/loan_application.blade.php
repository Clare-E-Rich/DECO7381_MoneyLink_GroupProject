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
     <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
   </ul>
   <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="myprofile.html" id="welcome">Welcome John</a></li> 
      <li><a href="logout"><img id="logout" src="../foundation-5.4.0/img/logout_w.png"></a></li>
    </ul>
  </section>
</nav>



<div class="row">
  <div class="large-12 columns">

    <! tab titles -->
    <ul class="tabs" data-tab role="tablist">
      <li class="tab-title active" role="presentational"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Loan Application</a></li>
    </ul>

    <div class="tabs-content"  id="main_tab">

      <! loan application page -->
      <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
        <div class="large-12 columns">
          <p>Please complete the loan application form.</p>
          <div class="large-12 columns">

            <ul class="tabs" id="application_tablist" data-tab role="tablist">
              <li class="tab-title active" role="presentational"><a href="#app_form-1" id="application_tab" role="tab" tabindex="0" aria-selected="true" controls="app_form-1">1</a></li>
              <li class="tab-title" role="presentational"><a href="#app_form-2" id="application_tab" role="tab" tabindex="0"aria-selected="false" controls="app_form-2">2</a></li>
              <li class="tab-title" role="presentational"><a href="#app_form-3" id="application_tab" role="tab" tabindex="0"aria-selected="false" controls="app_form-3">3</a></li>
              <li class="tab-title" role="presentational"><a href="#app_form-4" id="application_tab" role="tab" tabindex="0"aria-selected="false" controls="app_form-4">4</a></li>
            </ul>

            <div class="tabs-content">

              <! loan application form 1 -->
              <section role="tabpanel" aria-hidden="false" class="content active" id="app_form-1">
                <div class="row">
                  <div class="large-12 columns" id="profile_form">
                    <div class="row">
                      <div class="large-9 columns" id="application_title">
                        <div class="right">
                          <h4 >Loan Details:</h4>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
                <form action="confirm.blade.php" method="post">
                  <div class="row">
                    <div class="large-12 columns"  id="profile_form">
                      <div class="row">
                        <div class="large-6 columns">
                          <label for="right-label" class="right inline">Loan Amount:</label>
                        </div>
                        <div class="large-5 columns">
                          <input type="text" id="right-label name="amount">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns" id="profile_form">
                      <div class="row">
                        <div class="large-6 columns">
                          <label for="right-label" class="right inline">Term(months):</label>
                        </div>
                        <div class="large-5 columns">
                          <input type="text" id="right-label">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-12 columns" id="profile_form">
                      <div class="row">
                        <div class="large-6 columns">
                          <label for="right-label" class="right inline">Prefered Rate:</label>
                        </div>
                        <div class="large-5 columns">
                          <input type="text" id="right-label">
                        </div>
                      </div>
                    </div>
                  </div>

                </form>
                <div class="right" id="submit_button"> 
                 <a href="confirm" class="secondary small button">Next</a>
               </div>
               <div class="right" id="cancel_button"> 
                 <a href="#" class="secondary small button">Cancel</a>
               </div>

             </section>

             <! loan application form 2 -->

             <section role="tabpanel" aria-hidden="false" class="content" id="app_form-2">
              <div class="row">
                <div class="large-12 columns" id="profile_form">
                  <div class="row">
                    <div class="large-9 columns" id="application_title">
                      <div class="right">
                        <h4>Financial Status:</h4>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
              <form>
                <div class="row">
                  <div class="large-12 columns"  id="profile_form">
                    <div class="row">
                      <div class="large-6 columns">
                        <label for="right-label" class="right inline">Monthly Income:</label>
                      </div>
                      <div class="large-5 columns">
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
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
                        <input type="text" id="right-label">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="right" id="submit_button"> 
               <a href="#app_form-3" class="secondary small button">Next</a>
             </div>
             <div class="right" id="cancel_button"> 
               <a href="#" class="secondary small button">Cancel</a>
             </div>
           
         </section>

         <! loan application form 3 -->

         <section role="tabpanel" aria-hidden="false" class="content" id="app_form-3">
          <div class="row">
                <div class="large-12 columns" id="profile_form">
                  <div class="row">
                    <div class="large-11 columns" id="application_title">
                      <div class="right">
                        <h4>Living and Employment Status:</h4>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            <form>
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
                      <input type="text" id="right-label">
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
                      <input type="text" id="right-label">
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
                    <div class="large-5 columns">
                      <input type="text" id="right-label">
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
                    <div class="large-5 columns">
                      <input type="text" id="right-label">
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
                <div class="large-12 columns" id="profile_form">
                  <div class="row">
                    <div class="large-6 columns">
                      <label for="right-label" class="right inline">Employment status:</label>
                    </div>
                    <div class="large-5 columns">
                      <input type="text" id="right-label">
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
                      <input type="text" id="right-label">
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
                      <input type="text" id="right-label">
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
                    <div class="large-5 columns">
                      <input type="text" id="right-label">
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
                    <div class="large-5 columns">
                      <input type="text" id="right-label">
                    </div>
                  </div>
                </div>
              </div>

            </form>
            <div class="right" id="submit_button"> 
             <a href="#" class="secondary small button">Next</a>
           </div>
           <div class="right" id="cancel_button"> 
             <a href="#" class="secondary small button">Cancel</a>
           </div>
        
       </section>

       <! confirmation page -->

       <section role="tabpanel" aria-hidden="false" class="content" id="app_form-4">
        <div class="row">
                <div class="large-12 columns" id="profile_form">
                  <div class="row">
                    <div class="large-9 columns" id="application_title">
                      <div class="right">
                        <h4>Confirmation:</h4>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>

          <div class="right" id="submit_button"> 
           <a href="#" class="secondary small button">Submit</a>
         </div>
         <div class="right" id="cancel_button"> 
           <a href="#" class="secondary small button">Cancel</a>
         </div>

       </div>
     </section>
     </div>
   </div>
 </div>

</section>
</div>
</div>
</div>




<! footer -->
<footer>

  <div class="row">
    <div class="large-3 columns">
      <p><img id="logo" src="img/logos.png">
       <img id="font" src="img/font.png"></p>
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