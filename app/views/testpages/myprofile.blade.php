
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MoneyLink - The real P2P finance hub - Registration</title>
	<link rel="stylesheet" href="static/style/style.css" />
    <script type="text/javascript" src="static/js/jquery-1.10.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="static/js/jquery.validate.js"></script>
    <script type="text/Javascript" src="static/js/site.js"></script>
</head>

<body text="#333" link="#666" vlink="#666" alink="#0099CC">
<div id="main_sub">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="/">MoneyLink</a> <small>The real P2P finance hub</small> </h1>
      </div>
      <div id="navtop">
        <?php include app_path().'/views/inc/nav.php'; ?>
      </div>
    </div>
    <!-- end header -->
    <div class="clr"></div>
    <div class="content">
    	<p style="text-align: right;">Welcome {{{ $usermail }}} <a href="/logout">Logout</a></p>
        <p style="text-align: right; font-weight: bold; padding: 15px 100px 0 0">Rank:</p><div style="float: right; margin: -20px 5px 0 0;">
				</div>
      <div id="bottomcontent">
    <div id="navtabs">
            <ul>
              	<li><a href="#" style="text-decoration: none;background-color: #cccccc;	color: #252525;	border-left: #ccc 1px solid;">My Profile</a></li>
            </ul>                        
    	</div>
        <div class="clr"></div>
        <div id="subcontent">
        <p>Here you can make changes to your profile. Please note that you will not be able to proceed until you have updated your complete profile.</p>
        <div id="col1">
        <div href="myprofile_form.blade.php"><h3>Column 1</h3></div> 
                
        <p> Name: {{{ $userfname }}} {{{ $userlname }}} </p>
        <p> Address: {{{ $userstreetno }}} {{{ $userstreet }}} {{{ $usersuburb }}} {{{ $userpostcode }}} </p>
        <p> Phone Number: {{{ $userphone }}} </p>
        </div>
        <div id="col2">
         <h3 class="titlehdr">Profile</h3>
         {{ Form::open(array('action'=>'UserProfileController@saveProfile','name'=>'regForm','id'=>'regForm')) }} 
        <table width="400" border="0" cellpadding="1" cellspacing="1" class="forms" align="center">
                <tr> 
                  <td height="50" colspan="2"><h2>User Profile</h2></td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">First Name<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('fname',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Last Name<span class="required">*</span>
                    <br>
                  
                    {{ Form::text('lname',null,array('id'=>'user_name','class'=>'required username','minlength'=>'5')) }}

                </tr>
                <tr> 
                  <td style="font-weight: bold;">Street Number<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('streetno',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Street Name<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('street',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Suburb/city<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('suburb',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Post Code<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('postcode',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Date of birth<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('dob',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Phone number<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('phone',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Tax File Number<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('tfn',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Primary ID type<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('pidtype',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Primary ID Number<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('pidnum',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Secondary ID type<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('sidtype',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr> 
                  <td style="font-weight: bold;">Secondary ID Number<span class="required">*</span><br>
                        <span style="color:red; font: bold 12px verdana; " id="checkid" ></span>
                    {{ Form::text('sidnum',null,array('id'=>'user_name','class'=>'required username','minlength'=>'3')) }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                         <br>
                          {{ Form::submit('saveProfile',null,array('id'=>'saveProfile','value'=>'save','type'=>'submit')) }}
                        <!--  <input name="doRegister" type="submit" id="doRegister" value="Register"> -->
                  </td>
                </tr>
            </table>
            <!-- </form> -->
            {{ Form::close() }}

        </div>
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
          <li><a href="contact" id="bottom_links">Contact Us</a></li>
          <li><a href="about" id="bottom_links">About MoneyLink</a></li>
          <li><a href="hworks" id="bottom_links">How MoneyLink works</a></li>
          <li><a href="#" id="bottom_links">Privacy Policy</a></li>
          <li><a href="#" id="bottom_links">Term of Use</a></li>
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
