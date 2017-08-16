<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $pagetitle; ?></title>
  <?php
$this->load->view('templates/frontend/_parts/master_top_includes');
$user_id = $this->session->userdata('user_id');
$user_name = $this->session->userdata('name');
?>
</head>
<body>

  <header>
    <nav class="navbar navbar-default">
           <?php 
            $user = $this->db->get_where('users', array('id' => $user_id))->row();;
           if(count($user) > 0): ?>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $appName = config_item('name'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <!-- <li><a href="#">Link</a></li>         -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><h4><?php echo $user_name; ?></h4> </li>
        <li><a href="<?php echo base_url() ?>logout">Logout</a></li>      
      </ul>
    </div>
  </div>
<?php else: ?>
  <a class="navbar-brand" href="#"><?php echo $appName = config_item('name'); ?></a>
 <?php endif; ?>
</nav>
  </header>