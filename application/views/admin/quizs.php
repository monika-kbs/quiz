<?php echo form_open('admin/quiz', 'name="myForm"'); ?>
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
      <td><a href="">Active</a></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table> 
<?php echo form_close(); ?>