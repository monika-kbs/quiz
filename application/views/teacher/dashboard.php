<div class="panel panel-primary" id="total_teacher">
	  <div class="panel-heading">
	    <h3 class="panel-title">Total Students</h3>
	  </div>
	  <div class="panel-body">
	   <?php echo $this->db->count_all_results('users'); ?>
	  </div>
	</div>
	<div class="panel panel-primary" id="total_students">
	  <div class="panel-heading">
	    <h3 class="panel-title">Total Quiz</h3>
	  </div>
	  <div class="panel-body">
	   <?php echo $this->db->count_all_results('quiz'); ?>
	  </div>
	 </div>

	<div class="panel panel-primary" id="total_quiz">
	  <div class="panel-heading">
	    <h3 class="panel-title">Others</h3>
	  </div>
	  <div class="panel-body">
	   Others
	  </div>
	</div>




