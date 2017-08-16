  <?php echo form_open('admin/teachers/blockTeacher'); ?>
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
      <button type="submit" name="block_teacher" id="block_teacher"  data-id = "<?php echo $row->id; ?>" value="<?php  echo  $row->status; ?>" > 
      <?php  echo ( $row->status ) ? 'Unblock' : 'block'; ?></button>
      </td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table> 
<?php echo form_close(); ?>