$(document).ready(function(){
  $("#loginForm").validate({
    rules : {
      email : {
        required : true,
        email : true
      },
      password : {
        required : true
      }
    },
    messages : {
      email : {
        required : 'Please enter your email address.',
        email : 'Please enter valid email address.'
      },
      password : {
        required : 'Please enter your password.'
         }
      }
   });
});