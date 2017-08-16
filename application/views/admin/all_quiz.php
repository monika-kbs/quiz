<div class="container" id="modal-add-new">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_new">Add New</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Quiz</h4>
        </div>
      <?php echo form_open('student/allQuiz/quiz', ['name' => 'addQuiz', 'id' => 'quizForm']); ?>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="quiz_name" name="quiz_name">
          </div>
          <div class="form-group">
            <label for="usr">Host Name</label>
              <select class="form-control" id="host_name" name="host_name">
              <option value="">Select host name. </option>
             <?php $query = $this->db->get_where('users',array('users_type' => 2));
                   foreach ($query->result() as $row): ?>
                <option value="<?php echo $row->users_type; ?>"> <?php echo $row->name; ?></option>
                <?php endforeach;?>
              </select>
          </div>
          <div class="form-group">
            <label for="usr">Class Name</label>
              <select class="form-control" id="class_name" name="class_name">
              <option value="">Select Class name. </option>
                <?php $query = $this->db->get_where('classes');
                   foreach ($query->result() as $row): ?>
                <option value="<?php echo $row->class_id; ?>"> <?php echo $row->class_name; ?></option>
                <?php endforeach;?>
              </select>
          </div>
          <div class="form-group">
            <label for="usr">Start Time:</label>
            <input type="text" class="form-control" id="start_time" name="start_time">
          </div>
          <div class="form-group">
            <label for="usr">End Time:</label>
            <input type="text" class="form-control" id="end_time" name="end_time">
          </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-primary">Add Quiz</button>
        </div>
      </div>
        <?php echo form_close(); ?>
      </div>      
    </div>
  </div> 
</div>
<?php echo form_open('student/allQuiz/quiz', 'name="myForm"'); ?>
<table id="quizTable" class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>QUIZ ID</th>
      <th>HOST ID</th>
      <th>CLASS ID</th>
      <th>NAME</th>
      <th>START TIME</th>
      <th>END TIME</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php 
     $query = $this->db->get_where('quiz');
     foreach ($query->result() as $row): ?>
    <tr>
      <td><?php echo $row->quiz_id; ?></td>
      <td><?php echo $row->host_id; ?></td>
      <td><?php echo $row->class_id; ?></td>
      <td><?php echo $row->quiz_name; ?></td>
      <td><?php echo $row->start_time; ?></td>
      <td><?php echo $row->end_time; ?></td>
      <td><a href="<?php echo base_url() ?>student/allQuiz/quiz?id=<?php echo $row->quiz_id;?>">Active</a></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table> 
<?php echo form_close(); ?>