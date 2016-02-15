//this function pops open a larger image in a hidden div when the thumbnail is moused over
function Large(obj)
{
    var imgbox=document.getElementById("imgbox");
    imgbox.style.visibility='visible';
    var img = document.createElement("img");
    img.src=obj.src;
    img.style.width='600px';
    img.style.height='500px';
    //this method captures the mouse click event on the popup div and calls the out function
    if(img.addEventListener){
        img.addEventListener('click',Out,false);
    } else {
        document.getElementById("imgbox").style.visibility='hidden';
    }             
    imgbox.innerHTML='<div id="imgclose">Click the image to close</div>';
    imgbox.appendChild(img);
}
//this function hides the div on mouse click of the popup div
function Out()
{
    document.getElementById("imgbox").style.visibility='hidden';
}

function validateForm(){
		var fname = document.getElementById("fname").value;
		var lname = document.getElementById("lname").value;
		if (fname == null || fname == ""){
			alert("First name is required");
			document.additemform.fname.focus();
			return false;
		}
		if (lname == null || lname == ""){
			alert("Last Name is required");
			document.additemform.lname.focus();
			return false;
		}
		
}