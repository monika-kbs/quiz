$(document).ready(function(){
  $("#teacher_valid").validate({
    rules : {
      name : {
        required : true
      },
      email : {
        required : true
      },
      password : {
        required : true
      },
      tdob : {
        required : true
      }
    },
    messages : {
      name : {
        required : 'Please Enter Teacher name.'
      },
      email : {
        required : 'Please Enter  Email.'
      },
      password : {
        required : 'Please Enter Password.'
      },
      tdob : {
        required : 'Please Select Date Of Birth.'
      }
      }
   });
});