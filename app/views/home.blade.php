<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="/foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="/foundation-5.4.0/css/css_self.css">
  <style>
    #LoginBox {
      display:none;
      padding:0px 2px;
    }
    #RegBox {
      display: none;
      padding: 0px 2px;
    }
    #errorLogin {
      margin: 0px 2px;
      
    }
    .errorList {
      list-style: none;
      color:black;
      font-size:14px;
    }
    .errorList li {
      display:block;
      height:22px;
      line-height:22px;
    }
    .errorList img{
      margin:0px 3px;
    }
    #errorMsg {
      margin:0px 3px; 
    }
  </style>
</header>
<body>

  <!-- navigation bar -->
  <?php include '/var/www/htdocs/MoneyLink/app/views/template/nav.php'; ?>
<div class="row" id="row_height">
  <div class="large-12 columns">
    <div id="back_pic">
      <div class="right">
        <div id="login">
          <!-- login and register box -->

          <ul class="tabs" data-tab role="tablist">
            <li class="tab-title active" role="presentational"><a href="#panel2-1" id="login_title" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Member Login</a></li>
            <li class="tab-title" role="presentational"><a href="#panel2-2" class ='regTab' id="login_title" role="tab" tabindex="0"aria-selected="false" controls="panel2-2">Register</a></li>
          </ul>

          <div class="tabs-content bottom" id="login_tab">
            <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
              
              <!-- <form> -->
               {{ Form::open(array('action'=>'HomeController@doLogin','name'=>'logForm','id'=>'loginForm')) }}
                <div class="row">
                  <div class="large-12 columns">
                  {{ Form::label('Username','Username',array('id'=> 'label')) }}
                  {{ Form::text('Username',null,array('class'=>'required','id'=>'txtbox')) }}
                    <!-- <label id="label">Username:
                      <input type="text"/>
                    </label> -->
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                  {{ Form::label('Password','Password',array('id'=>'label')) }}
                  {{ Form::password('Password',null,array('class'=>'required password','id'=>'txtbox')) }}
                   <!--  <label id="label">Password:
                      <input type="text"/> 
                    </label> -->
                  </div>
                </div>
                <p id="label">
                {{ Form::checkbox('remember_me') }} remember me
                <a href="password/reminder" id="pw">Forgot password?</a>
                 <div id = 'LoginBox'>
                 <ul class ='errorList'>
                 </ul>
                 </div>
                  <a href="#" id='loginBtn' class="secondary small button expand">Login</a></p>
            
               <!-- {{ Form::submit('Login',null,array('id'=>'doLogin3','class'=>'buttondetail')) }} -->
               {{ Form::close() }}
               <!--  </form> -->
              </section>

              <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
                {{ Form::open(array('action'=>'HomeController@doRegister','name'=>'regForm','id'=>'regForm')) }}

                <!-- <form> -->
                  <div class="row">
                    <div class="large-12 columns">
                        {{ Form::label('Email Address*','Email Address*',array('id'=>'label')) }}
                          <!-- <input type="text" id="right-label"> -->
                           {{ Form::text('user_email',null,array('id'=>'right-label','size'=>'30','class'=>'required email')) }}
                          
                    </div>
                  </div>


                  <div class="row">
                    <div class="large-12 columns">
                        {{ Form::label('Password*','Password*',array('id'=>'label')) }}
                         <!--  <input type="text" id="right-label"> -->
                          {{ Form::password('pwd',null,array('id'=>'right-label','class'=>'required password','minlength'=>'5')) }}
                    </div>
                  </div>
                  

                  
                     <p id="label">{{ Form::checkbox('terms',null, false) }} 
                     <!-- <input id="checkbox1" type="checkbox"><label for="checkbox1" id="label"> -->
                     I accpet terms and conditions
                 
                   <!--   {{ Form::submit('Register',null,array('id'=>'doRegister','value'=>'Register','type'=>'submit')) }} -->
                      <div id = 'RegBox'>
                      <ul class = 'errorList'>
                      </div>
                       <a href="#" id='regBtn' class="secondary small button expand">Register</a></p>
                  
                   
                 {{ Form::close() }}
              <!--  </form> -->
             </section>

           </div>
         </div>
       </div>
     </div>
   </div>
 </div>


 <div class="row">

  <div class="large-8 columns">
    <h4>The real Peer-to-Peer finance hub:</h4>
    <p>MoneyLink is the latest in peer-to-peer financing.  We use a complex matching engine to ensure you get the best possible loan experience.</p>
    <p>With no bank playing intermediary users get a better deal, both as a lender and a borrower.  So why not sign up today and find the solution to your financial worries. </p>
  </div>

  <div class="large-4 columns">
    <h1 id="word1">MoneyLink</h1>
    <h4 id="word2">MOST TRUSTED</h4>
    <p id="word3">LOAN PROVIDER</p>
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
  <script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
    <script src="../foundation-5.4.0/js/loanApp.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script> 
  <script>
  $(document).foundation();
  getStep();
  enableBtns();
  /*$(document).keypress(function(e) {
    if(e.which == 13) {
      $('#loginForm').submit();
    }
  });*/
  </script> 
  <script>
  $('#loginBtn').on('click', function(event) {
    $('#LoginBox').hide();
    $.ajax({
      type:'post',
      data:$('#loginForm').serialize(),
      datatype: 'json',
      url:'/login',
      success: function(json) {
        console.log(json);
        $('#LoginBox').show();
        var text = "";
        if(json.error == '-1') {
        for(key in json.messages) {
          text += "<li><img src ='/foundation-5.4.0/img/error.png' width='12' height='12'>"
          text += json.messages[key];
          text += "</li>"
        }
        $('#LoginBox .errorList').html(text);
      } else if(json.error == '-2') {
        text += "<li><img src ='/foundation-5.4.0/img/error.png' width='12' height='12'>";
        text += json.messages;
        text += "</li>"
        $('#LoginBox .errorList').html(text);
      } else {
        window.location.href = "http://deco3801-05.uqcloud.net/mytransaction";
      }
        
      },
      error: function(x, e, t) {
        console.log(x, e, t)
      }

    })
  });
  $('#regBtn').on('click', function(event){
    //event.preventDefault();
    $.ajax({
      type:'post',
      data:$('#regForm').serialize(),
      dataType :'json',
      url :'doRegister',
      success:function(json) {
        console.log(json.error);
        if(json.error != '0') {
            $('#RegBox').show();
            $('.errorList').empty();
           var text = "";
           for(key in json.messages) {
              text += "<li><img src ='/foundation-5.4.0/img/error.png' width='12' height='12'>";
              text += json.messages[key];
              text += "</li>";
           }
           $('.errorList').html(text);
        } else {
          console.log("changing");
          window.location.href = "http://deco3801-05.uqcloud.net/register_comf";
         // window.location.replace("http://deco3801-05.uqcloud.net/register_comf");
        }
      }
    })
  })
  </script>
</body>
</html>
