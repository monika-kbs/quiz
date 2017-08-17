<aside>
  <p><ul class="nav nav-pills nav-stacked">
  <?php  $users_type = $this->session->userdata('users_type'); ?>
  <?php if($users_type == 3): ?>
   <li class="<?php if(current_url() == site_url("admin/dashboard")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>admin/dashboard">Dashboard</a></li>
   <li class="<?php if(current_url() == site_url("admin/teachers")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>admin/teachers">Teachers</a></li>
   <li class="<?php if(current_url() == site_url("admin/students")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>admin/students">Students</a></li> 
   <li class="<?php if(current_url() == site_url("admin/quiz")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>admin/quiz">Quiz</a></li>    

   <?php elseif($users_type == 2):?>
   <li class="<?php if(current_url() == site_url("teacher/dashboard")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>teacher/dashboard">Dashboard</a></li> 
   <li class="<?php if(current_url()== site_url("teacher/students")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>teacher/students">Students</a></li>
   <li class="<?php if(current_url()== site_url("teacher/quiz")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>teacher/quiz">Quiz</a></li>

   <?php elseif($users_type == 1):?>
    <li class="<?php if(current_url() == site_url("student/dashboard")) { echo 'list active'; } else{ echo 'list'; }?>"><a href="<?php echo base_url() ?>student/dashboard">Dashboard</a></li> 
   <li class="<?php if(current_url()== site_url("student/AllQuiz")) { echo 'list active'; } else{ echo 'list'; } ?>"><a href="<?php echo base_url() ?>student/AllQuiz">Quiz</a></li>
  <?php endif; ?>
  </p>
</aside>