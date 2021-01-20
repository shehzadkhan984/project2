$('document').ready(function(){
 var username_state = false;
 var email_state = false;
 $('#cnic').on('blur', function(){
  var cnic = $('#cnic').val();
  if (cnic == '') {
  	cnic_state = false;
  	return;
  }
  $.ajax({
    url: 'AddStudent.php',
    type: 'post',
    data: {
    	'cnic_check' : 1,
    	'cnic' : cnicc,
    },
    success: function(response){
      if (response == 'taken' ) {
      	username_state = false;
      	$('#cnic').parent().removeClass();
      	$('#cnic').parent().addClass("form_error");
      	$('#cnic').siblings("span").text('Sorry... CNIC already taken');
      }else if (response == 'not_taken') {
      	username_state = true;
      	$('#cnic').parent().removeClass();
      	$('#cnic').parent().addClass("form_success");
      	$('#cnic').siblings("span").text('CNIC available');
      }
    }
  });
 });		
  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'AddStudent.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $('#reg_btn').on('click', function(){
 	var username = $('#username').val();
 	var email = $('#email').val();
 	var password = $('#password').val();
 	if (username_state == false || email_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: 'register.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : email,
      		'cnic' : cnic,
      		
      	},
      	success: function(response){
      		alert('user saved');
      		
      		$('#email').val('');
      		$('#cnic').val('');
      	}
      });
 	}
 });
});