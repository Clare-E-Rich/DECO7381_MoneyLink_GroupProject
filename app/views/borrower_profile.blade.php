<!DOCTYPE html>
<header>
	<link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="../foundation-5.4.0/js/getAgeJS.js"></script>


</header>
<body>


	<! navigation bar -->

	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
		       <a href="/mytransaction"><img id="logo" src="../foundation-5.4.0/img/logos.png"></a>
		       <a href="/mytransaction"><img id="font" src="../foundation-5.4.0/img/font.png"></a>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<!-- <li class="toggle-topbar menu-icon"><a href="home"><span>Menu</span></a></li> -->
		</ul>
		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<li><a href="/profile" id="welcome">Welcome {{{ $pdataa['userfname'] or "" }}}</a></li> 
				<li><a href="/logout"><img id="logout" src="../foundation-5.4.0/img/logout_w.png"></a></li>

				</ul>
			</section>
		</nav>


		<div class="row">
			<div class="large-12 columns">
				<ul class="inline-list" id="tab-area">
					<li id="active_title"><a>{{ $pdata['userfname'] or "" }}'s Profile</a></li>
				</ul>
			</div>
		</div>


		
		<div class="row">
			<div class="large-12 columns">
				<div class="tabs-content" id="main_tab">
					<div class="large-3 columns">
						<img src="../foundation-5.4.0/profilePic/{{$pdata['userid']}}/{{$pdata['userid']}}.JPEG" onerror="this.src='../foundation-5.4.0/img/profile_pic.png'" alt="Profile picture" class="profile_pic"/>
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
								<div class="dt1">Location:</div>
								<div class="capital dd1">{{$pdata['usersuburb']}}, {{$pdata['userstate']}}</div>
								<div class="dt1">Occupation:</div>
								<div class="capital dd1">{{ $pdata['useroccupation'] or "" }}</div>
							</div>
							<div class="large-6 columns">
								<div class="dt1">Gender:</div>
								<div class="capital dd1">{{ $pdata['usergender'] or "" }}</div>
								<div class="dt1">Age:</div>
								<div class="capital dd1">{{ $age }}</div>
							</div>
						</div>
						<h4 id="title_bg">Comments</h4>
						<!-- <ul> -->
							@if(isset($comments))
							@foreach($comments as $com)
							@if($com->commenter_id != $pdataa['userid'])
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
							@else
							<div class="row">
							<div class="large-11 columns border_bottom">
							<div class="large-2 columns border_top">
							<img class="profile_size" src="../foundation-5.4.0/profilePic/{{$com->commenter_id}}/{{$com->commenter_id}}.JPEG" onerror="this.src='../foundation-5.4.0/img/profile_pic.png'" alt="Profile picture" class="profile_pic"/>
							</div>
							<div class="large-10 columns margin border_top">
							<a class="capital" href="/myprofile">{{ $com -> fname }} {{ $com -> lname }}</a> 
							<div class="right">{{ date( "d/m/Y", strtotime ( $com -> time_stamp ) ) }}</div><br>
							
							<div class="large-8 columns margin2">
								<div class="word_wrap">{{ $com -> comment }}</div>
								</div>
								<div class="right">
									<a class="secondary tiny button" href= {{ '/deleteComment/'.$com->comment_id.'/'.$pdata['userid']}}>Delete</a>
								</div>
								</div>
								</div>
								</div>
							@endif
							@endforeach
							@endif
						
						<div class="row">
						<div class="large-11 columns border_bottom">
						<h5 class="border_top">Leave a Comment</h5>
						{{ Form::open(array('action'=>'UserProfileController@addComment','name'=>'regForm','id'=>'regForm')) }} 
						<div hidden>{{ Form::text('userid', $pdata['userid'] ,array( 'id'=>'right-label','class'=>'required username','minlength'=>'3' )) }} </div>
						<div hidden>{{ Form::text('commenter', $pdataa['userid'] ,array( 'id'=>'right-label','class'=>'required username','minlength'=>'3')) }} </div>
						{{ Form::textarea('comment', null, array('id'=>'right-label', 'size'=> '25x5')) }}
						{{ Form::submit('Submit',array('id'=>'makeComment','class'=>'button','value'=>'save','type'=>'submit')) }}
						{{ Form::close() }}
						</div>
						</div>
					</div>
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
							<li><a href="about" id="bottom_links">About MoneyLink</a></li>
							<li><a href="hworks" id="bottom_links">How MoneyLink works</a></li>
							<li><a href="#" id="bottom_links">Privacy Policy</a></li>
							<li><a href="#" id="bottom_links">Term of Use</a></li>
						</ul>
					</div>
				</div>
			</footer>

			<script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
			<script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
			<script src="../foundation-5.4.0/js/loanApp.js"></script>
			<script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
			<script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
			<script src="../foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
			<script>
			$(document).foundation();
			getStep();
			enableBtns();
			</script>   
		</body>
		</html>
