// function getAge(dateString) {
//     var today = new Date();
//     //console.log(dateString);
//     var birthDate = new Date(dateString);
//     var age = today.getFullYear() - birthDate.getFullYear();
//     var m = today.getMonth() - birthDate.getMonth();
//     if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     //alert(age);
//     return age;
// }

$(document).ready(function() {
	console.log("start profile");

	var php_dob = "<?php Print($pdata['userdob']); ?>";

	// "<?php Print($MyPHPStringVar); ?>"
	console.log(php_dob);


         var dob = new Date(date);
         var today = new Date();

	    var age = today.getFullYear() - dob.getFullYear();
	    var m = today.getMonth() - dob.getMonth();
	    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
	        age--;
	    }
	    alert(age);
	    console.log(age);
	    $("#dob").write(age);
	    //return age;
    
});

function hi() {

    alert("hi world");

}