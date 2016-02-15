var isDesc = true;
var lendPreference;
var i, id;
var allLoans
function enableSearch() {
	$('#Search').on('click', function(){
		if(!validate_search()) {
			return false;
		}
		lendPreference = $('#pref_pop').serialize();
		console.log(lendPreference);
		console.log('saving');
		var parmaters = new Array(6);
		var names =["minAmount", "maxAmount", "minTerm", "maxTerm", "minRate", "maxRate"];
		for(i = 0; i < 6; i++) {
			var value = $('.'+names[i]).val();
			parmaters[i] = value;
		}
		$.ajax({
			type: 'POST',
			url:'lend/saveLend',
			dataype: 'json',
			data: lendPreference,
			success: function(json) {
				console.log('save lend pref succuss');
				set_url(parmaters);
				allLoans = json;
				display_result(json);
				$('.close_edit_pref').click();
			},
			error: function(obj, msg, err) {
				console.log(err);
			}
		});
	});
}

/**
 * after search, sort or filter, set url. So when user refresh page, borwser still
 *  display search result 
 */
function set_url(parmaters) {
	window.location.hash="#minLoan=" + parmaters[0]
	+"&maxLoan="+ parmaters[1] + "&minTerm=" + parmaters[2]
	+ "&maxTerm=" + parmaters[3] + "&minRate=" + parmaters[4]
	+ "&maxRate=" + parmaters[5] 
	console.log(window.location.hash);
};

function enableSortBtn() {
	var srcs = [
		"/foundation-5.4.0/img/icon-arrow-up.png",
		"/foundation-5.4.0/img/icon-arrow-down.png"
	];

	var order = "desc";
	var src ="/foundation-5.4.0/img/icon-arrow-down.png";
	$(".amount_sort, .rate_sort, .term_sort, .progress_sort, .weight_sort").css("cursor","pointer");
	$(".amount_sort, .rate_sort, .term_sort, .progress_sort, .weight_sort").on('click', function(){
		var field = $(this).attr('class');
		var index = field.indexOf('_');
		var type = field.substring(0, index);
		var isD = $(this).attr('data');
		console.log("type is " + type);
		if(isD == 'd') {
			isDesc = false;
			$(this).attr('data','a');
		} else {
			isDesc = true;
			$(this).attr('data','d');
		}
		if (isDesc == true) {
			order = "asc";
			src= "/foundation-5.4.0/img/icon-arrow-up.png";
		} else {  
			order = "desc";
			src = "/foundation-5.4.0/img/icon-arrow-down.png";
		}
		start_sort(type, order);
		$(this).find('.mark').attr("src", src);
		$(this).siblings().each(function(){
			$(this).find('.mark').attr('src', "/foundation-5.4.0/img/icon-arrow-down.png");	
		});

	})
}

function start_sort(type, order) {
	if(type.localeCompare('rate') == 0) {
		type = "pref_rate";
	}
	if(window.location.hash.localeCompare("") == 0) {
		lendPreference = "";
	} else {
		lendPreference = $("#pref_pop").serialize();		
	}
	console.log(lendPreference);
	var str= lendPreference + '&type='+ type +'&order='+ order;
	console.log(str);
	console.log(type, order);
	$.ajax({
		type:'POST',
		url:'/lend/sort',
		data: window.location.hash.substring(1) + "&type=" + type + "&order=" + order,
		//data: lendPreference + '&type='+ type +'&order='+ order,
		datatype: 'json',
		success: function(json) {
			console.log("sort success");
			allLoans = json;
			display_result(json);
			console.log("display success");
		},
		error: function(obj, msg, err){	
			console.log(msg, err);
			console.log("fail to post");
		}
	})
}

function display_result(json) {
		var i, size, total, pages;
		tbody = $('#results tbody');
		table = $("#results");
		tbody.empty(); //clear all existing search result
		size = json.results.length;
		console.log(size);
		total = json.total;
		if(total/15 == 0) {
			pages = total/15;
		} else {
			pages = Math.floor(total/15) + 1;
		}
		console.log("size of result are "+ size + " page is "+ pages);

		if(size == 0) {
			console.log("equals 0")
			tbody.append("<p> No result </p>");
		} else {
			for(i = 0; i < size; i++) {
				var obj =(json.results)[i];
				var resultStr = "<tr><td><a href='otherUsers/"+obj.user_id +"'>"+obj.fname+" "+obj.lname+"</a></td>"+"<td>$"+ obj.amount + "</td>"
								+ "<td>"+obj.purpose+"</td><td>"+obj.term+ " Months</td><td>"
								+ obj.pref_rate+"%</td><td> $" + obj.progress + " (" + (obj.progress/obj.amount).toFixed(2) + "%)</td><td>"
								+ (obj.weight).toFixed(2) +"</td><td>"
								+ "<a class='mkbid' data = "+ obj.loan_id + " data-reveal-id ='make_bid'> Make a Offer"
								+"</a></td></tr>"
 
				tbody.append(resultStr);	
			}
		}
};

function enableEnterKey(name) {
	$(document).keypress(function(e) {
			if(e.which == 13) {
				console.log("tag name is "+name);
				$("#"+name).click();
			}
		})
	}