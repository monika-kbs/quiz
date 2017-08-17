<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Teacher</h4>
        </div>
      <?php echo form_open('admin/teachers/update', ['name' => 'addTeacher', 'id' => 'teacher']); ?>
        <?php    $id = $this->uri->segment(4);
               $query = $this->db->get_where('users', array('id' =>$id));
               foreach ($query->result() as $row): ?>
        <div class="modal-body">
          <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row->name; ?>">
          </div>
           <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
          </div>
           <div class="form-group">
            <label for="usr">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $row->password; ?>">
          </div>
          <div class="form-group">
            <label for="usr">Dob</label>
            <input type="text" class="form-control" id="teacherdob" name="tdob" value="<?php echo $row->dob; ?>">
          </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-primary">Update </button>
        </div>
      </div>
           <?php endforeach;?>
        <?php echo form_close(); ?>
      </div>      
</div>

