function disableStep() {
	var nextBtn = $('.nextForm');
	nextBtn.off('click');
}
function getStep() {
	var forms = $('.applications section');
	var formId = new Array("#form1","#form2","#form3");
	var nextBtn = $('.nextForm');  //get the 'next' button
	var prevBtn = $('.prevForm');
	var index=0;
	var submitBtn = $(' .confirmBtn');
	var tabList = $('ul#application_tablist li'); 
	var cancelBtn = $(' .cancelBtn');

	nextBtn.on('click', function() {	
		for(i=0; i<forms.length; i++) {
			var className= $(forms[i]).attr('class');
			if (className.indexOf('active')!= -1) {
				index =i;
			}
		}
		var form = $(forms[index]).find('form');
		console.log(formId[index]);
		var isvalidate = validate_form(index + 1);
		if(!isvalidate) {
			console.log('validate fail');
			return false;
		}
		/* swicht tabs and forms */
		$(forms[index]).removeClass('active');
		$(forms[index+1]).addClass('active');
		$(tabList[index]).removeClass('active');
		$(tabList[index+1]).addClass('active');

	});
	prevBtn.on('click', function(){
		console.log('ready for run prev ')
		for(var i=0; i<forms.length; i++) {
			var className= $(forms[i]).attr('class');
			if (className.indexOf('active')!= -1) {
				index =i;
			}
		}
		console.log("prev is "+ index);
		$(forms[index]).removeClass('active');
		$(forms[index-1]).addClass('active');
		$(tabList[index]).removeClass('active');
		$(tabList[index-1]).addClass('active');
		
	});
	/* sned loan application information to back end through Ajax*/
	submitBtn.on('click', function() {
		console.log("button works");
		var info = $('#form1,#form2,#form3').serialize();
		console.log(info);
		$.ajax({
			type:'POST',
			url:"/submitLoan",
			datatype:'json',
			data:info,
			success:function(json) {
				setTimeout(function() {
					window.location.href="http://deco3801-05.uqcloud.net/confirm";
				}, 1000);
			}
		})
	});

	/* cancel loan application information to back end through Ajax*/
	cancelBtn.on('click', function() {
		console.log("cancel button works");
		var info = document.getElementById("loanId").innerHTML;
		//document.getElementById("loanId").innerHTML;
		console.log(info);
		$.ajax({
			type:'POST',
			url:"/cancelLoan",
			datatype:'json',
			data:{loanId:info},
			success:function(json) {
					window.location.href="http://deco3801-05.uqcloud.net/borrow";
			}
		})
	});	
}

function enableBtns() {
	
	/*search mathcing application*/
	/*$('#Search').on('click', function() {
		$('#pref_pop').submit();
	});*/
	/*save profile */
	$('#saveProfileBtn').on('click', function() {
		$('#ProfileForm').submit();
	});
	/*enable logain btn*/
	/*$('#loginBtn').on('click',function() {
		$('#loginForm').submit();
		//sreturn false;
	});*/
	/*enable register btn*/
	/*$('#regBtn').on('click',function() {
		$('#regForm').submit();
	});*/
}



