<table class="table table-striped table-hover" id="usersTable" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DOB</th>
      <th>ROLL NO</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tfoot>
   <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DOB</th>
      <th>ROLL NO</th>
      <th>Actions</th>
    </tr>
  </tfoot>
  <tbody>
  <?php 
     $query = $this->db->get_where('users', array('users_type' => 1));
     foreach ($query->result() as $row): ?>
    <tr>
      <td><?php echo $row->id; ?></td>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $row->dob; ?></td>
      <td><?php echo $row->roll_no; ?></td>
      <td><button type="submit" name="block">Block</button></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table> 


