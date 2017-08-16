<div class="container" id="modal-add-new">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_new">Add New</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Teacher</h4>
        </div>
      <?php echo form_open('teacher/quiz/addQuiz', ['name' => 'addQuiz', 'id' => 'quizForm']); ?>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
           <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
           <div class="form-group">
            <label for="usr">Password:</label>
            <input type="text" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label for="usr">Dob</label>
            <input type="text" class="form-control" id="dob" name="dob">
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


<?php echo form_open('admin/dashboard/blockTeacher'); ?>
<table id="teachersTable" class="display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DOB</th>
      <th>ACTION</th>
    </tr>
  </thead>
    <tfoot>
      <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DOB</th>
      <th>ACTION</th>
       </tr>
    </tfoot>
  <tbody>
  <?php 
     $query = $this->db->get_where('users', array('users_type' => 2));
     foreach ($query->result() as $row): ?>
    <tr>
      <td><?php echo $row->id; ?></td>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $row->dob; ?></td>
      <td>
      <input type="hidden" name="id" value="<?php echo $row->id; ?>">
      <button type="submit" name="block_teacher"  value="<?php  echo  $row->status; ?>" > 
      <?php  echo ( $row->status ) ? 'Unblock' : 'block'; ?></button>
      </td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table> 
<?php echo form_close(); ?>