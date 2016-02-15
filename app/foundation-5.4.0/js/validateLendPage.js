/*
	validation rules:
	 	1. no empty inputs
	 	2. All inputs must be digits
		3. minLoan must less than maxLaon, so does other similar inputs
		4. The propose amount must not greater than loan amount
*/

function validate_mkbid(max) {
	var isValide = true;
	var invest = $('.invest').val();
	var num = Math.floor(invest);
	var errorMsg = "";
	var error = $('.errorMsg');

	if(!invest) {
		isValide = false;
		errorMsg = "The field shouldn't be empty";
	}
	if(!invest.match(/^\d+$/)) {
		isValide = false;
		errorMsg = "You must input digit(s)"
	}
	if(num > max) {
		isValide = false;	
		errorMsg = "The invest less than " + max;
	}	
	error.css({
		'color': 'red',
		'padding': '0 8px'
	});
	error.text(errorMsg);
	return isValide;
};

function validate_search() {
	var isValide = true;
	var names = ['minLoan', 'maxLoan', 'minTerm', 'maxTerm', 'minRate', 'maxRate'];
	var requires = new Array();
	var i;
	var errorMsg;
	for(i = 0; i < 6; i++) {
		requires[i]= $('.'+names[i]).val();
		var input = requires[i];
		if(input == "") {
			isValide = false;
			errorMsg = "The field shouldn't be empty";
			break;
		}
		if(!invest.match(/^\d+$/)) {
			isValide = false;
			errorMsg = "You must input digit(s)";
			break;
		}
	}
	var minLoan = Math.floor(requires[0]);
	var maxLoan = Math.floor(requires[1]);
	var minTerm = Math.floor(requires[2]);
	var maxTerm = Math.floor(requires[3]);
	var minRate = Math.floor(requires[4]);
	var maxRate = Math.floor(requires[5]);
	if(minLoan < 0 || maxLaon < 0) {
		isValide = false;
	}
	if(minLoan > maxLaon) {
		isValide = false;
		errorMsg = "The min loan must less than max loan";
	}
	if(minTerm > maxTerm) {
		isValide = false;
		errorMsg = "The min term must less than max term";
	}
	if(minRate > maxRate) {
		isValide = false;
		errorMsg = "The min rate must less than max rate";
	}

}

function is_number(value) {
	var isNumber = true; 
	if(value == "") {
		isNumber = false;
	}
	if(! value.match(/^\d*(\.\d+)?$/)) {
		isNumber = false;
	}
	return isNumber;
}
function is_month(value) {
	var isMonth = true;
	if(value == "") {
		return isMonth;
	}
	if(!value.match(/^0[1-9]|1[01]/)) {
		isNumber = false;
	}
	return isMonth;
}
function is_year(value) {
	var isYear = true;
	console.log('year is '+ value)
	if(value == "") {
		isYear = false;
	};
	if(! value.match(/^[0-9]{1,2}$/)) {
		isNumber = false;
	}
	return isYear;
}

function generate_error_msg(code) {
	var msg = "<span class='errorMsg'>";
	var end = "</span>";
	var content;
	switch(code){
		case 1:
			content = "Pleasn input valide positive numbers."
	}
	msg += content;
	msg += "</span>";
	return msg;
}

function validate_search() {
	var inputs = $('.searchForm :input');
	var isValide = true;
	var size = inputs.length;
	console.log(size);
	for(var i=1; i < size; i++) {
		if(!is_number($(inputs[i]).val())) {
			var e = $(inputs[i]).parent().siblings().find('.errorMsg');
			e.text("Use digits only");
			e.css('visibility','visible');
			isValide = false;
		}
		if(i == 1 || i == 3 || i == 5) {
			console.log('i is '+ i);
			console.log($(inputs[i]).val(), $(inputs[i+1]).val());
			if(parseInt(($(inputs[i]).val())) > parseInt(($(inputs[i+1]).val()))) {
				var e = $(inputs[i]).parent().siblings().find('.errorMsg');
				e.text("min should less than max");
				e.css('visibility','visible');
				isValide = false;
			}
		}
	}                    
	return isValide;
}

function validate_form(formIndex) {
	var inputs = $('#form'+formIndex+' :input');	
	var isValide = true;
	var size = inputs.length;

	$('#form'+formIndex+' .errorMsg').text("");
	$('#form'+formIndex+' .errorMsg').css('visibility','hidden');
	if(formIndex == 1) {
		for(var i = 0; i < 3; i++) {
			 if(!is_number($(inputs[i]).val())) {
				var e = $(inputs[i]).parent().siblings().find('.errorMsg');
				e.text("Use digits only");
				e.css('visibility','visible');
				isValide = false;	 	
			}
		}
	} else if(formIndex == 2) {
		for(var i = 0; i < size; i++) {
			 if(!is_number($(inputs[i]).val())) {
				var e = $(inputs[i]).parent().siblings().find('.errorMsg');
				e.text("Use digits only");
				e.css('visibility','visible');
				isValide = false;	 	
			}
		}
	} else if(formIndex == 3) {
		var residence = $(inputs[1]).val();
		var months = [3, 5, 10, 12];
		for(var i=0; i < 4; i++) {
			if(!is_year($(inputs[months[i]-1]).val())) {
				var e = $(inputs[months[i-1]]).parent().siblings().find('.errorMsg');
				e.text("Use digits only");
				e.css('visibility','visible');
				isValide = false;	 	
			}
		}
		for(var i=0; i < 4; i++) {
			if(!is_month($(inputs[months[i]]).val())) {
				var e = $(inputs[months[i]]).parent().siblings().find('.errorMsg');
				e.text("Please enter valide month");
				e.css('visibility','visible');
				isValide = false;	 	
			}
		}
	}

	if(isValide) {
		$('#form'+formIndex+' .errorMsg').text("");
		$('#form'+formIndex+' .errorMsg').css('visibility','hidden');
	}
	return isValide;
}
