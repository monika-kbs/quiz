<?php
$this->load->view('templates/frontend/_parts/master_header_view');
?>
<div class="container-fluid master">
<div class="row">
	<div class="col-md-2">		
       <?php $this->load->view('templates/frontend/_parts/master_sidebar_view'); ?>
	</div>

	<div class="col-md-10">
		<?php echo $the_view_content; ?>
	</div>
</div>
</div>
<?php
$this->load->view('templates/frontend/_parts/master_footer_view');
?>