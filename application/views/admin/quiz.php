<?php echo form_open('student/allQuiz/back', 'name="myForm"'); ?>
<button type="submit" class="btn btn-primary"  name="back" >Back</button>
<?php form_close(); ?>
<?php echo form_open('student/allQuiz/quiz', 'name="myForm"'); ?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Id</th>
      <th>Question</th>
    </tr>
  </thead>
  <tbody>
  <?php 
     $query = $this->db->get_where('questions', array('quiz_id' => 2));
     foreach ($query->result() as $row): ?>
    <tr>
      <td><?php echo $row->ques_id; ?></td>
      <td><?php echo $row->question; ?></td>
    </tr>
    <tr>
      <td></td>
      <td>A  <input type="radio" name="gender" value="male" checked>Option A<br></td>
    </tr>
    <tr>
      <td></td>
      <td>B  <input type="radio" name="gender" value="male" checked>Option B<br></td>
    </tr>
    <tr>
      <td></td>
      <td>C  <input type="radio" name="gender" value="male" checked>Option C<br></td>
    </tr>
    <tr>
      <td></td>
      <td>D  <label><input type="radio" name="gender" value="male" checked>Option D<br></label>
      <button class="btn btn_primary" type="submit" name="save" id="save" >Save</button></td>   
    </tr>
  <?php endforeach;?>
    <tr>
      <td></td>
      <td><button class="btn btn-primary" type="submit" name="submit" >Submit</button></td>
    </tr>
  </tbody>

</table> 

<?php echo form_close(); ?>


 