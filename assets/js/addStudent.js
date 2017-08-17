$(document).ready(function(){
  $("#quizForm").validate({
    rules : {
      Student_name : {
        required : true
      },
      email : {
        required : true
      },
      password : {
        required : true
      },
      studentDob : {
        required : true
      },
      roll_no : {
      required : true
      }
    },
    messages : {
      Student_name : {
        required : 'Please Enter Quiz name.'
      },
      email : {
        required : 'Please Select Host name.'
      },
      password : {
        required : 'Please Select Class name.'
      },
      studentDob : {
        required : 'Please Choose Start time.'
      },
      roll_no : {
        required : 'Please Choose End time.'
         }
      }
   });
});