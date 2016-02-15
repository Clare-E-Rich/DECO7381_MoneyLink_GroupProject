<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="/foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="/foundation-5.4.0/css/css_self.css">
  <script src="/foundation-5.4.0/js/verify.notify.js"></script>
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
      <li><a href="profile" id="welcome">Welcome {{{ $data['userfname'] or "" }}}</a></li> 
      <li><a href="logout"><img id="logout" src="../foundation-5.4.0/img/logout_w.png"></a></li>

    </ul>
  </section>
</nav>


<div class="row">
  <div class="large-12 columns">

    <! tab titles -->
    <ul class="tabs" data-tab role="tablist">
      <li class="tab-title active" role="presentational"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Edit Profile</a></li>
    </ul>

    <div class="tabs-content"  id="main_tab">

      <! edit profile page -->


      <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
        <div class="large-12 columns">
          <p>Please complete your profile.</p>

          <!-- <form> -->
          {{ Form::open(array('action'=>'UserProfileController@saveProfile','name'=>'regForm','id'=>'ProfileForm')) }} 
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">First Name:</label>
                  </div>
                  <div class="large-6 columns">
                   
                  <input type="text" id="right-label" data-validate="required,alpha" name='fname' style="text-transform:capitalize" value={{{ $data['userfname'] or ""}}}>
                  </div>
              </div>
            </div>



            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Last Name:</label>
                  </div>
                  <div class="large-6 columns">
                  
                  <input type="text" id="right-label" data-validate="required,alpha" name='lname' style="text-transform:capitalize" value={{{ $data['userlname'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Date of Birth:</label>
                  </div>
                  <div class="large-2 columns">
                     {{ Form::select('day_dob', array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31'), $data['day_dob']) }}
                  </div>
                  <div class="large-2 columns">
                     {{ Form::select('month_dob', array('1'=>'Jan','2'=>'Feb','3'=>'March','4'=>'April','5'=>'May','6'=>'June','7'=>'July','8'=>'Aug','9'=>'Sept','10'=>'Oct','11'=>'Nov','12'=>'Dec'), $data['month_dob']) }}
                  </div>
                  <div class="large-2 columns">
                    <input type="text" id="right-label" data-validate="required,number,min(4),max(4)" name='year_dob' value={{{ $data['year_dob'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Gender:</label>
                  </div>
                  <div class="large-6 columns">
                   {{ Form::select('gender',array('Male'=>'Male','Female'=>'Female'), $data['usergender']) }}
                  </div>
              </div>
            </div>            
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Phone Number:</label>
                  </div>
                  <div class="large-6 columns">
                    <input type="text" id="right-label" data-validate="required,number,max(12)" name='phone' value={{{ $data['userphone'] or ""}}}>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class=" right inline">Unit/Number:</label>
                  </div>
                  <div class="large-2 columns">
                    <input type="text" id="right-label" data-validate="required" name='streetno' value={{{ $data['userstreetno'] or ""}}}>
                  </div>
                  <div class="large-1 columns">
                    <label for="right-label" class="right inline">Street:</label>
                  </div>
                  <div class="large-3 columns">
                    <input type="text" id="right-label" data-validate="required,alpha" name='street' value={{{ $data['userstreet'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class=" right inline">City:</label>
                  </div>
                  <div class="large-6 columns">
                    <input type="text" id="right-label" data-validate="required,alpha" name='suburb' value="{{$data['usersuburb']}}">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class=" right inline">State:</label>
                  </div>
                  <div class="large-2 columns">
                  {{ Form::select('state',array('Australia Capital Territory'=>'ACT',
                  'New South Wales'=>'NSW', 'North Territory'=>'NT', 'South Australia'=>'SA', 
                  'Tasmania'=>'TAS', 'Western Australia' => 'WA','Queensland'=>'QLD', 'Victoira'=>'VIC'), $data['userstate']) }}

                  </div>
                  <div class="large-2 columns">
                    <label for="right-label" class=" right inline">Postcode:</label>
                  </div>
                  <div class="large-2 columns">
                    <input type="text" id="right-label" data-validate="required,number" name='postcode' value={{{ $data['userpostcode'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">TFN:</label>
                  </div>
                  <div class="large-6 columns">
                   <input type="text" id="right-label" data-validate="required,number" name='tfn' value={{{ $data['usertfn'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Occupation:</label>
                  </div>
                  <div class="large-6 columns">
                    <input type="text" id="right-label" data-validate="required,alpha" name='occupation' value={{{ $data['useroccuptaion'] or ""}}}>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Primary ID type:</label>
                  </div>
                  <div class="large-6 columns">
                    {{ Form::select('pidtype',array('Drivers License'=>'Drivers License',
                    'Birth Certificate'=>'Birth Certificate', 'Passport'=>'Passport', 'ABN'=>'ABN', 
                    'Citizenship number'=>'Citizenship number'), $data['userpidtype']) }}

              </div>
            </div>
          </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Primary ID Number:</label>
                  </div>
                  <div class="large-6 columns">
                    <input type="text" id="right-label" data-validate="required,alphaNumeric" name='pidnum' value={{{ $data['userpidnum'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Secondary ID type:</label>
                  </div>
                  <div class="large-6 columns">
                    {{ Form::select('sidtype',array('Drivers License'=>'Drivers License',
                    'Birth Certificate'=>'Birth Certificate', 'Passport'=>'Passport', 'ABN'=>'ABN', 
                    'Citizenship number'=>'Citizenship number'), $data['usersidtype']) }}
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Secondary ID Number:</label>
                  </div>
                  <div class="large-6 columns">
                    <input type="text" id="right-label" data-validate="required,alphaNumeric" name='sidnum' value={{{ $data['usersidnum'] or ""}}}>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="large-9 columns">
                  <div class="large-6 columns">
                    <label for="right-label" class="right inline">Self Introduction:</label>
                  </div>
                  <div class="large-6 columns">
                  {{ Form::textarea('description', $data['userdes'], array('id'=>'right-label', 'size'=> '30x5')) }}
                  </div>
              </div>
            </div>
           
           
           <div class="row">
             <div class="large-8 columns">
             
           <div class="right" id="submit_button"> 
                <input href="#" id='saveProfileBtn' class="secondary small button submit" type="submit">
           </div>

            <div class="right" id="cancel_button"> 
           <a href="profile" class="secondary small button">Cancel</a>
         </div>
           {{ Form::close() }}
             </div>
           </div>
          </div>
        </section>
      </div>
    </div>
  </div>




 <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>

  <script src="/foundation-5.4.0/js/vendor/jquery.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.js"></script>
  <script src="/foundation-5.4.0/js/loanApp.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.tab.js"></script>
  <script src="/foundation-5.4.0/js/verify.notify.js"></script>
  <script>
  $(document).foundation();
  getStep();
  enableBtns();
  </script> 

</body>
</html>
