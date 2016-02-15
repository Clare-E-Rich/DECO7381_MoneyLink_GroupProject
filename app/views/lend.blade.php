<!DOCTYPE html>
<header>
	<link rel="stylesheet" href="/foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" href="/foundation-5.4.0/css/css_self.css">
	<style>
	.pages {
		display: table;
		/*position:relative;*/
		text-align: center;
		margin: 0 auto;
		padding: 0 0;
	}	
	.pages li {
		float:left;
		display:inline-block;
		list-style: none;
		margin: 0 auto;
	}
	.errorMsg {
		color:red;
		visibility: hidden;
		text-align: left;
	}
	.searchCol {
		padding:0px 5px;
	}
	}
	</style>
	<script>
	function imgError(image) {
	    image.onerror = "";
	    image.src = "../foundation-5.4.0/img/profile_pic.png";
	    return true;
	}
	</script>
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
				<li><a href="logout"><img id="logout" src="/foundation-5.4.0/img/logout_w.png"></a></li>

			</ul>
		</section>
	</nav>


	<div class="row">
		<div class="large-12 columns">
			<ul class="inline-list" id="tab-area">
				<!-- <div class="large-3 columns" id="active_tab_bg"> -->
				<li id="title"><a href="mytransaction">My Transaction</a></li>
				<!-- </div>
				<div class="large-3 columns" id="tab_bg"> -->
					<li id="title"><a href="myprofile">My Profile</a></li>
					<!-- </div>
					<div class="large-3 columns" id="tab_bg"> -->
						<li id="title"><a href="borrow">Borrow Money</a></li>
					<!-- </div>
					<div class="large-3 columns" id="tab_bg"> -->
						<li id="active_title"><a href="lend">Lend Money</a></li>
						<!-- </div> -->
					</ul>
				</div>
			</div>

			<div id="make_bid" class="reveal-modal" data-reveal>
				<div class="large-12 columns">

					<! tab titles -->

					<!---------------------------------- make a bid -------------------------->

<!-- <div class="row" >
	<div class="large-12 columns"> -->

		<! tab titles -->

		<! make bid page -->
<!--       <div class="row">  
	<div class="large-12 columns"> -->



<div class="bidform">
		<div class="row">
			<div class="large-4 columns">
			<div class="right">
				<img class='profile_size profilePic' onError = "imgError(this)"  src="/foundation-5.4.0/img/profile_pic.png" alt="Profile picture" class="profile_pic"/>
            </div>
            </div>

            <div class="large-8 columns ">
				<h4 class="border_top bidName"></h4>
			</div>
		</br>
	</br>
</br>

<div class="row">
 <div class="bidtable">
            <table class="bidtable1" style="width:60%">
                      <tr>
                      <td align =center>Loan Amount:</td>
                      <td class="bidAmount"></td>
                  </tr>

                  <tr>
                      <td align =center>Loan Purpose:</td>
                      <td class="bidPurpose"></td>
                  </tr>

                  <tr>
                      <td align =center>No. of Offers:</td>
                      <td class="bidBiders"></td>
                  </tr>

                  <tr>
                      <td align =center>Requested Interest Rate:</td>
                      <td class="bidPrefRate"></td>
                  </tr>

                  <tr>
                      <td align =center>Request Term:</td>
                      <td class="bidTerm"></td>
                  </tr>

                  <tr>
                      <td align =center>Progress:</td>
                      <td class="bidProgress"></td>
                  </tr>
                  </table>

						</div>
						</div>
						
  <hr width=390 class="haha" >
					</div>
				



<!--             </div>
</div> -->
<!-- </div> -->
<form id="bid_form">
<div class="row">  
			<div class="bidFormSub">
				<span id = 'limit' style = "display:block; padding: 0 24px; margin: 0 auto;text-align: center;"></span>
				<div class="row" id="rowBid">

					<div class="large-6 large columns margin2">
						<label for="right-label" class="right inline">Offer Amount:</label>
					</div>
					<div class="large-3 large columns">
						<input type="text" id="right-label" class= "invest" name="amount">
					</div>
					
					<span class = "errorMsg"></span>
				</div>
			</div>
</div>

		<!-- </form> -->

<div class="row">
	<div class="large-9 columns right"> 
	<a href="#" class="secondary small button">Cancel</a>
		<a href="#" class ="secondary small button bid" id = "submit_bid">Submit</a>
	</div>
</div>
</form>

</div>
	</div>
	<a class="close-reveal-modal close_mkbid">&#215;</a> 
</div>
</div>
</div> 
</div>



<!---- edit perference ---->
<div class="row">
	<div class="large-12 columns">
		<div class="tabs-content" id="main_tab">
			<div class="inline list">
<!-- 				<h3 id="loan_header">My Loan Portfolio:</h3>
 -->			<h3 id = "loan_header"> Search Loans</h3>	
 				{{ Form::open(array('id'=>'pref_pop', 'class'=>'searchForm' )) }}
				<div class="row">
					<div class="large-10 columns">
						<div class="large-3 columns">
							<div class="right inline">
								Loan ($):
							</div>
						</div>
						<div class="large-1 columns">
							<div class="right inline">Min:</div>
						</div>
						<div class="large-2 columns">
							<!-- <input type="text" id="right-label"> -->
							{{ Form::text('minLoan',null, array('id'=> 'right-label', 'class'=>'minAmount')) }}
						</div>
						<div class="large-1 columns">
							<div class="right inline">Max:</div>
						</div>
						<div class="large-2 columns">
							<!-- <input type="text" id="right-label"> -->
							{{ Form::text('maxLoan',null, array('id'=> 'right-label', 'class'=>'maxAmount')) }}
						</div>
						<div class='large-3 columns searchCol'>
							<span class = "errorMsg">error message </span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-10 columns">
						<div class="large-3 columns">
							<div class="right inline">
								Term (months):
							</div>
						</div>
						<div class="large-1 columns">
							<div class="right inline">Min:</div>
						</div>

						<div class="large-2 columns">
							<!-- 	<input type="text" id="right-label"> -->
							{{ Form::text('minTerm',null, array('id'=> 'right-label', 'class'=> 'minTerm')) }}
						</div>
						<div class="large-1 columns">
							<div class="right inline">Max:</div>
						</div>
						<div class="large-2 columns">
							<!-- 	<input type="text" id="right-label"> -->
							{{ Form::text('maxTerm',null, array('id'=> 'right-label', 'class'=> 'maxTerm')) }}
						</div>
						<div class='large-3 columns searchCol'>
							<span class = "errorMsg"> </span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-10 columns">
						<div class="large-3 columns">
							<div class="right inline">
								Rate (%):
							</div>
						</div>
						<div class="large-1 columns">
							<div class="right inline">Min:</div>
						</div>

						<div class="large-2 columns">
							<!-- 	<input type="text" id="right-label"> -->
							{{ Form::text('minRate',null, array('id'=> 'right-label', 'class'=> 'minRate')) }}
						</div>
						<div class="large-1 columns">
							<div class="right inline">Max:</div>
						</div>
						<div class="large-2 columns">
							<!-- 	<input type="text" id="right-label"> -->
							{{ Form::text('maxRate',null, array('id'=> 'right-label', 'class'=> 'maxRate')) }}
						</div>
						<div class='large-3 columns searchCol'>
							<span class = "errorMsg"> </span>
						</div>
					</div>
				</div>
				<div class="large-3 columns" style="display:block; float:right;">
						<div id="apply_button"> 
							<!-- {{ Form::button('Save',array('id'=>'submit_button','class'=>'secondary small button')) }} -->
							<a href="#" id='Search' class="secondary small button">Search</a>
						</div>
					</div>
				{{ Form::close() }}

										
				</div>
				<hr/>
				
				<table id = 'results'>
					<thead>
						<tr>
							<th width="180">Applicant</th>
							<th class = 'amount_sort'> Amount <img src="/foundation-5.4.0/img/icon-arrow-down.png" width="15" height="15" /></th>
							<th>Purpose</th>
							<th class = 'term_sort'>Term <img src="/foundation-5.4.0/img/icon-arrow-down.png" width="15" height="15" /></th>
							<th class = 'rate_sort'>Rate <img src="/foundation-5.4.0/img/icon-arrow-down.png" width="15" height="15" /></th>
							<th class = 'progress_sort'>Progress <img src="/foundation-5.4.0/img/icon-arrow-down.png" width="15" height="15" /></th>
							<th class = 'weight_sort'>Weight<img src="/foundation-5.4.0/img/icon-arrow-down.png" width="15" height="15"/> 
							<img src="/foundation-5.4.0/img/question.png" width="12" height="12"
							title = "Higher weight means higher credit socres"/>
							</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@if(isset($allLoan))
						@foreach($allLoan as $result)
						<tr>
							<td>{{ $result-> email }}</td>
							<td>{{ $result-> amount }}</td>
							<td>{{ $result-> purpose }}</td>
							<td>{{ $result-> term }}</td>
							<td>{{ $result-> pref_rate }}</td>
							<!-- 	<td>{{ HTML::link('#','make a bid',array('class'=> 'mkbid','data'=> $result-> loan_id)) }} -->
							<td>{{ HTML::linkRoute('makebid','make bid',$result->loan_id,array('class'=>'mkbid', 'data'=>$result-> loan_id, 'data-reveal-id'=>"make_bid")) }} </td>  
						</tr>
						@endforeach
						@endif
						
						@if(isset($resul))
						@foreach($results as $result)
						<tr>
							<td>{{ $result-> fname }} {{ $result-> lname }}</td>
							<td>{{ $result-> amount }}</td>
							<td>{{ $result-> purpose }}</td>
							<td>{{ $result-> term }}</td>
							<td>{{ $result-> pref_rate }}</td>
							<td>{{ HTML::link('#',array('class'=> 'mkbid','data'=>$result-> loan_id)) }}
								<<td>{{ HTML::linkRoute('makebid','make bid',$result->loan_id,array('class'=>'mkbid')) }} </td> 
							</tr>z
							@endforeach
							@endif

						</tbody>

					</table>

				</div>
			</div>
		</div>
	</div>
</div>


 <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>

<script src="/foundation-5.4.0/js/vendor/jquery.js"></script>
<script src="/foundation-5.4.0/js/foundation/foundation.js"></script>
<script src="/foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
<script src="/foundation-5.4.0/js/foundation/foundation.tab.js"></script>
<script src="/foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
<script src="/foundation-5.4.0/js/loanApp.js"></script>
<script src="/foundation-5.4.0/js/resultFilter.js"></script>
<script src="/foundation-5.4.0/js/validateLendPage.js"></script>
<script>
$(document).foundation();
getStep();
enableBtns();
enableSearch();
enableSortBtn();
		//enableEnterKey("Search");
		</script>   
		<script type = "text/javascript">
	 //var allLoans;

	//console.log(allLoans.loans.length);
	queryString = "";
	var id ;
	function parse_paramater(url) {
		var paramters = url.split('=');
		var isAllLoan = false;
		var i;
		for(i = 0; i < paramters.length; i++) {
			if(localeCompare(paramters[i],"minLoan") == 0) {
				isAllLoan = true;
				return isAllLoan;
			}
		}
		return isAllLoan;
	}

	function parse_url2(currentUrl) {
		var index = currentUrl.indexOf("#");
		if(index == -1 ){
			console.log("to alloan");
			get_allLoan(0);
		} else {
			var paramters = currentUrl.substring(index+1);
			//console.log("paramters is " + paramters	);
			if(paramters == "") {
				get_allLoan(0);
			} else if(parse_paramater(paramters)) {
				searech_loan(paramters);
			} else {
				var page = paramters.split('=');
				get_allLoan(page[1]);
			}
		}
	}
	

	window.onload = function(){
		parse_url3();
		parse_url2(window.location.href);
	}
	
	function get_allLoan(page) {
		console.log("execute get alloan");
		$.ajax({
			type: 'POST',
			url: '/lend/allLoans',
			datatype:'json',
			data:{'page': page},
			success: function(json) {
				/*console.log(json);*/
				allLoans = json;
				display_result(json);
				/*console.log(allLoans);*/
			}
		});
	}

	function search_loans(uri) {
		console.log(uri);
		query = uri;
		//query = uri.substring(1);
		//console.log("query string is " + query);
		$.ajax({
			type: 'POST',
			url:'/lend/search',
			data: query,
			datatype: 'json',
			success: function(json) {
				allLoans = json;
				display_result(json);
			}
		})
	}
	var max; 
	$('#results').on('click','.mkbid', function(){
		id = $(this).attr('data');
		var index = $(this).parent().parent().index();
		var dds = $('#make_bid dd');
		var size = dds.length;
		//console.log("allLoans is " + allLoans);
		var amount = allLoans.results[index].amount;
		var progress = allLoans.results[index].progress;
		var imgSrc = "../foundation-5.4.0/profilePic/"+ allLoans.results[index].user_id
		+"/" + allLoans.results[index].user_id + ".JPEG";
		$('.profilePic').attr('src', imgSrc);
		$('.bidName').text("Applicant: " + allLoans.results[index].fname+ " "+
			allLoans.results[index].lname);		
		$('.bidAmount').text("$"+allLoans.results[index].amount);
		$('.bidPurpose').text(allLoans.results[index].purpose);
		$('.bidBiders').text(allLoans.results[index].biders);
		$('.bidPrefRate').text(allLoans.results[index].pref_rate+"%");
		$('.bidTerm').text(allLoans.results[index].term+" months");
		$('.bidProgress').text("$"+allLoans.results[index].progress);

		$("#limit").text("You can offer no more than $"+ (amount-progress));
		//enableEnterKey("submit_bid");
		max = amount - progress;
	})
	//console.log("id is  " + id);

	/*submit bid*/
	$('#submit_bid').on('click', function(event){
		event.preventDefault();
		if(!validate_mkbid(max)) {
			return null;
		};
		var url = window.location.href;
		/*console.log("url is "+url , id);
		console.log("start submit");*/
		$.ajax({
			type:'POST',
			url:'/mkbid/'+id,
			datatype:'json',
			data:$('#bid_form').serialize(),
			success:function(json) {
				console.log(json);
				//console.log("success");
				$('.close_mkbid').click();
				parse_url2(url);
				//console.log("clicked close");
			},
			error: function(obj,err, status) {
				//console.log("status is" + status);
			}
		})
	})

	function parse_url3() {
		var hash = window.location.hash;
		console.log("hash is "+ hash);
		if(hash == "") {  //no hash
			console.log("hash is empty")
			return null;
		} 
		var query = hash.substring(1);
		console.log("query is " + query);
		if(query == "") { //has hashtag but nothing
			return null;
		}
		/* has query parameters */
		var parameters = query.split("=");
		var size = parameters.length;
		var isAllLoan = true;
		for(var i= 0; i < size; i++) {
			if(localeCompare(parameters[i],  "minAmount") == 0) {
				isAllLoan = false;
				break;
			}
		}
		if(isAllLoan) {
			var page = parameters[1]
			//get_allLoan(page);
			return;
		} else {
			//search_loans(query);
		}
	}
	</script>
</body>
</html>
