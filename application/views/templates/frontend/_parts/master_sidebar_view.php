<aside>
  <p><ul class="nav nav-pills nav-stacked">
  <?php  $users_type = $this->session->userdata('users_type'); ?>
  <?php if($users_type == 3): ?>
   <li class="<?php if(current_url() == site_url("admin/dashboard")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>admin/dashboard">Dashboard</a></li>
   <li class="<?php if(current_url() == site_url("admin/dashboard/teachers")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>admin/dashboard/teachers">Teachers</a></li>
   <li class="<?php if(current_url() == site_url("admin/dashboard/students")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>admin/dashboard/students">Students</a></li> 
   

   <?php elseif($users_type == 2):?>
   <li class="<?php if(current_url() == site_url("student/students")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>student/students">Students</a></li> 
   <li class="<?php if(current_url()== site_url("quiz/allQuiz")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>quiz/allQuiz">Quiz</a></li>

   <?php elseif($users_type == 1):?>
   <li class="<?php if(current_url()== site_url("student/allQuiz")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>student/allQuiz">Quiz</a></li>
  <?php endif; ?>
  </p>
</aside>