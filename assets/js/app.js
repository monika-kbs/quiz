$(document).ready(function(){
	$("#bs-alert").fadeTo(2000, 2000).slideUp(2000, function(){
		$("#bs-alert").slideUp(2000);
	});
	$('#usersTable').DataTable();
	$('#quizTable').DataTable();
	$('#teachersTable').DataTable();

    jQuery('#start_time').datetimepicker();
    jQuery('#end_time').datetimepicker();

    $("#block_teacher").click(function(e){
    	$.post('teacher/teachers/blockTeacher', {name : $("#name").val()}, function(response, status, xhr) {
			$("#response").text(response);
		});
	});

});    
 
     


