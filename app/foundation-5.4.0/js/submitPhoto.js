function getPhoto() {
  console.log("submit button in function");

  var submitBtn = $('#submitPhoto');


  submitBtn.on('click', function(){
  	console.log("submit button in function");
    $.ajax({
    type:'POST',
       url: '/upload',
       dataType: 'json',
       success: function(data){
            window.location.href="http://deco3801-05.uqcloud.net/profile";
       }
    });
  });
}

