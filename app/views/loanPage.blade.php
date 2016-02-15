<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MoneyLink - The real P2P finance hub - Registration</title>
	<link rel="stylesheet" href="static/style/style.css" />
	<script type="text/Javascript" src="/staticjs/site.js"></script>
    <script type="text/javascript" src="/static/js/jquery-1.10.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="static/js/jquery.validate.js"></script>
</head>

<body text="#333" link="#666" vlink="#666" alink="#0099CC" onload="disableSubmit()">
<div id="main_sub">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="http://www.fundz.net">MoneyLink</a> <small>The real P2P finance hub</small> </h1>
      </div>
      <div id="navtop">
        <?php include '/var/www/htdocs/MoneyLink/app/views/inc/nav.php'; ?>
      </div>
    </div>
    <!-- end header -->
    <div class="clr"></div>
    <div class="content">
    <div class="description">
          <div class="bt_1">
			<p><span class="ft_14">User Profile</span> </p>       
          </div>
		<div class="bt_2">
   
<!-- 
          {{ Form::open(array('action'=>'HomeController@doLogin','name'=>'logForm','id'=>'logForm')) }}
         {{ Form::label('Username','Username') }}
         {{ Form::text('Username',null,array('class'=>'required','id'=>'txtbox','size'=>'25')) }}
         {{ Form::label('Password','Password') }}
         {{ Form::password('Password',null,array('class'=>'required password','id'=>'txtbox','size'=>'25')) }}
         {{ Form::submit('Login',null,array('id'=>'doLogin3','class'=>'buttondetail')) }}
         {{ Form::close() }} -->
    
          {{ Form::open(array('action'=>'LoanAppController@saveLoanApp','name'=>'regForm','id'=>'regForm')) }}

        <!--  <form action="register.php" method="post" name="regForm" id="regForm" > -->
            <table width="400" border="0" cellpadding="1" cellspacing="1" class="forms" align="center">
                <tr> 
                  <td height="50" colspan="2"><h2>Edit Lend Preferences</h2></td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Amount<span class="required">*</span>
                    <br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    
                    {{ Form::text('amount',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Term<span class="required">*</span>
                    <br>
                  
                    {{ Form::text('term',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}

                </tr>
                <tr> 
                  <td style="font-weight: bold;">Prefered Rate<span class="required">*</span>
                    <br>
                  
                    {{ Form::text('pref_rate',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}

                </tr>
                <tr>
                  <td style="font-weight: bold;">Loan purpose<span class="required">*</span>
                    <br>
                    {{ Form::select('purpose', array('Car'=>'car', 'House'=> 'House')) }}
                </tr>
                <td style="font-weight: bold;">Loan Description<span class="required">*</span>
                    <br>
                    {{ Form::textarea('description',null, array('class'=>'descrption')) }}
                </tr>
                <tr>
                  <td colspan="2">
                         <br>
                          {{ Form::submit('saveLoanApp',null,array('id'=>'saveLoanApp','value'=>'save','type'=>'submit')) }}
                        <!--  <input name="doRegister" type="submit" id="doRegister" value="Register"> -->
                  </td>
                </tr>
            </table>
            <!-- </form> -->
            {{ Form::close() }}
          </div>
        </div>
    </div>	
<br />     <!-- end content --> 
  </div>
  <div class="clr"></div>&nbsp;
</div>
<!-- end main -->
<div id="footer">
  <div class="main_resize">
    <div id="navbot">
      <div id="navbot">
      <ul class="menusm">
      	<li><a href="index.php" class="active" title="Home">Home</a> </li>
        <li><a href="aboutus.php" title="About MoneyLink">About MoneyLink</a> </li>
        <li><a href="contact.php" title="Contact Us">Contact Us</a> </li>
        <li><a href="register.php" title="Register">Register</a> </li>
        <li><a href="privacy.html">Privacy Policy</a> </li>
        <li><a href="terms.html">Terms of Use</a> </li>
      </ul>
      <div class="clr"></div>
    </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <div class="footer_script">
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
<!-- end footer -->
<div class="footer_bottom">
  <div class="main_resize">
    <div class="logo">
    </div>
    <div class="footer_banners"> 
    
     </div>
    <div class="clr"></div>
    <div class="footer_text">
      
      <div class="clr"></div>
    </div>
  </div>
</div>
<!-- end footer_bottom -->

</body>
</html>
