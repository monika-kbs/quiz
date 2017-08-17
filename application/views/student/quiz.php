<a href="<?php echo(base_url() . 'student/quiz/back' )?>" class="btn btn-primary" >Back</a>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Id</th>
      <th>Question</th>
    </tr>
  </thead>
  <tbody>
  <?php echo form_open('student/quiz/store/', 'name="myForm"'); ?>
  <?php  
     $query = $this->db->get_where('questions', array('quiz_id' => 330 ));
     foreach ($query->result() as $row): ?>
    <tr>
      <td><?php echo $row->ques_id; ?></td>
      <td><?php echo $row->question; ?></td>
    </tr>
    <tr>
      <td></td>
      <td>A  <input type="radio" name="option[<?php echo $row->ques_id; ?>]" value="A" /><?php echo $row->A; ?> <br></td>
    </tr>
    <tr>
      <td></td>
      <td>B  <input type="radio" name="option[<?php echo $row->ques_id; ?>]" value="B" /><?php echo $row->B; ?> <br></td>
    </tr>
    <tr>
      <td></td>
      <td>C  <input type="radio" name="option[<?php echo $row->ques_id; ?>]" value="C" /><?php echo $row->C; ?> <br></td>
    </tr>
    <tr>
      <td></td>
      <td>D <input type="radio" name="option[<?php echo $row->ques_id; ?>]" value="D" /><?php echo $row->D; ?> <br>
    </tr>
   <?php endforeach;?>
    <tr>
      <td></td>
      <td><button class="btn btn-primary" type="submit" name="submit" >Submit</button></td>
    </tr>
  <?php echo form_close(); ?>
   </tbody>

</table> 



 