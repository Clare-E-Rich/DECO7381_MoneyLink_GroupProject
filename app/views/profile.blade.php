<!DOCTYPE html>
<header>
	<link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
	function imgError(image) {
	    image.onerror = "";
	    image.src = "../foundation-5.4.0/img/profile_pic.png";
	    return true;
	}
    </script>
    <style>
    	.errorMsg {
    		color:red;
    		visibility: hidden;
    	}
    </style>
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


	<div class="row">
		<div class="large-12 columns">
				<ul class="inline-list" id="tab-area">
					<li id="title"><a href="mytransaction">My Transaction</a></li>
					<li id="active_title"><a href="profile">My Profile</a></li>
					<li id="title"><a href="borrow">Borrow Money</a></li>
					<li id="title"><a href="lend">Lend Money</a></li>
				</ul>
			</div>
		</div>


		<div id="changePwd" class="reveal-modal small" data-reveal>
		<div class="row">
				<div class="large-12 columns">
				<form id ='pwdForm' method="post">
				<label>old passwrod</label> <span class = 'errorMsg'>error</span>
				<input type='password' name = "origin"/>
				<label>new passwrod</label> <span class = 'errorMsg'>error</span>
				<input type='password' name = "new"/>
				<label>type new password again </label> <span class = 'errorMsg'>error</span>
				<input type ='password' name = 'new2'/>
				<a href="#" class = 'button small change' onclick="myFunction()">Change password</a>

<script>
function myFunction() {
    alert("Are you sure to change your password?");
}
</script>
				</form>
				</div>
		</div>
		<a class="close-reveal-modal close_form">&#215;</a> 
		</div>

				<div class="row">
					<div class="large-12 columns">
						<div class="tabs-content" id="main_tab">
                    
                    <div class="right" id="apply_button"> 

						<a href="editprofile" class="small secondary button edit_button">Edit Profile</a>
						<a href ='#' data-reveal-id ='changePwd' class = 'small secondary button edit_button'> Change password </a> 
					</div>
					<div class="large-3 columns">
						<img src="../foundation-5.4.0/profilePic/{{$id}}/{{$id}}.JPEG" onerror="this.src='../foundation-5.4.0/img/profile_pic.png'" alt="Profile picture" class="profile_pic" />
                   </br>


          
						<a href="editprofile" data-reveal-id="myModal" class="small tiny round button">Upload Profile Picture</a>
						@include('upload_picture')

				    </div>

					<div class="large-4 columns">
						<h2 class="capital">{{ $pdata['userfname'] or "" }} {{ $pdata['userlname'] or "" }}</h2>
					</div>
					<div class="large-12 columns">
						<h4 id="title_bg">Introduction</h4>
						<p>{{ $pdata['userdes'] or "" }}</p>
						<h4 id="title_bg">Personal Information</h4>
						<div class="dl1">
						<div class="large-6 columns">
								<div class="dt1">Gender:</div>
								<div class="capital dd1">{{ $pdata['usergender'] or "" }}</div>
								<div class="dt1">Age:</div>
								<div class="capital dd1">{{ $age }}</div>
							</div>
							<div class="large-6 columns">
								<div class="dt1">Location:</div>
								<div class="capital dd1">{{$pdata['usersuburb']}}, {{$pdata['userstate']}}</div>
								<div class="dt1">Occupation:</div>
								<div class="capital dd1">{{ $pdata['useroccupation'] or "" }}</div>
							</div>
							
						</div>
						<h4 id="title_bg">Comments</h4>
						<!-- <ul> -->
							@if(isset($comments))
							@foreach($comments as $com)
							<div class="row">
							<div class="large-11 columns border_bottom">
							<div class="large-2 columns border_top">
								<img class="profile_size" src="../foundation-5.4.0/profilePic/{{$com->commenter_id}}/{{$com->commenter_id}}.JPEG" onerror="this.src='../foundation-5.4.0/img/profile_pic.png'" alt="Profile picture" class="profile_pic"/>
							</div>
							<div class="large-10 columns margin border_top">
								<a class="capital" href= {{ '/otherUsers/'.$com-> commenter_id }}>{{ $com -> fname }} {{ $com -> lname}}</a>
								<div class="right">
									{{ date( "d/m/Y", strtotime ( $com -> time_stamp ) ) }}
								</div><br>
								<div class="word_wrap">{{ $com -> comment }}</div>
								
								
							</div>
							</div>
							</div>
							@endforeach
							@endif
					</div>
						
				</div>
			</div>

</div>

 <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>

	<script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
	<script src="../foundation-5.4.0/js/loanApp.js"></script>
	<script src="../foundation-5.4.0/js/submitPhoto.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
	<script src="../foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
	<script>
	$(document).foundation();
	
	getPhoto();
	getStep();
	enableBtns();
	
	</script>   
	<script>
	function imgError(image) {
	    image.onerror = "";
	    image.src = "../foundation-5.4.0/img/profile_pic.png";
	    return true;
	}

	$('.change').on('click', function(event) {
		event.preventDefault();
		$.ajax({
			type:'POST',
			url: '/password/change',
			data:$('#pwdForm').serialize(),
			datatype: 'json',
			success: function(json) {
				display_error(json);
			}
		});
	});

	function display_error(message) {
		var code = parseInt(message.code);
		switch(code) {
			case 0:
				$('.close_form').click();
			case 1:
				showError(code);
			case 3:
				showError(code);
		}
	}

	function showError(code) {
		var errors = $('.errorMsg');
		var content = "";
		switch(code) {
			case 1:
				content = "Wrong password.";
				break;
			case 2:
				content = "password is not same.";
		}
		$(errors[code-1]).text(content);
		$(errors[code-1]).css('visibility','visible');
	}
    </script>
</body>
</html>
