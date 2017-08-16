$(document).ready(function(){
  $("#quizForm").validate({
    rules : {
      quiz_name : {
        required : true
      },
      host_name : {
        required : true
      },
      class_name : {
        required : true
      },
      start_time : {
        required : true
      },
      end_time : {
      required : true
      }
    },
    messages : {
      quiz_name : {
        required : 'Please Enter Quiz name.'
      },
      host_name : {
        required : 'Please Select Host name.'
      },
      class_name : {
        required : 'Please Select Class name.'
      },
      start_time : {
        required : 'Please Choose Start time.'
      },
      end_time : {
        required : 'Please Choose End time.'
         }
      }
   });
});