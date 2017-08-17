$(document).ready(function(){
  $("#addTeacher").validate({
    rules : {
      teacher_name : {
        required : true
      },
      teacher_email : {
        required : true
      },
      teacher_password : {
        required : true
      },
      teacherDob : {
        required : true
      }
    },
    messages : {
      teacher_name : {
        required : 'Please Enter Teacher name.'
      },
      teacher_email : {
        required : 'Please Select  Email.'
      },
      teacher_password : {
        required : 'Please enter Password.'
      },
      teacherDob : {
        required : 'Please select Date Of Birth.'
      }
      }
   });
});