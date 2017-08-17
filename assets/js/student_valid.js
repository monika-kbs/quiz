$(document).ready(function(){
  $("#student_valid").validate({
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
      dob : {
        required : true
      },
      roll_no : {
      required : true
      }
    },
    messages : {
      name : {
        required : 'Please Enter Student name.'
      },
      email : {
        required : 'Please Select Email address.'
      },
      password : {
        required : 'Please enter Password.'
      },
      dob : {
        required : 'Please Choose Date of Birth.'
      },
      roll_no : {
        required : 'Please enter Roll No.'
         }
      }
   });
});