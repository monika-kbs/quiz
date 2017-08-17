<div class="row">
    <div class="col-md-2">

    </div>  
    <div class="col-md-8">  
    <?php echo form_open('login', ['id' => 'loginForm', 'class' => 'form-horizontal']); ?>
    <?php if($this->session->flashdata('invalid_credential')):?>
      <div class="alert alert-dismissible alert-danger" id="bs-alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><?php echo $this->session->flashdata('invalid_credential'); ?></strong>
      </div>      
    <?php endif;?>    
    <div class="form-group">
      <label for="inputEmail">Email</label>
        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>      
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
    </div>
    <div class="form-group">      
        <button type="submit" class="btn btn-primary">Login</button>      
    </div>
   <?php echo form_close(); ?>
    </div>
  
    <div class="col-md-2">
      
    </div>
</div>
