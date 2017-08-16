<?php defined('BASEPATH') OR exit('No direct script access allowed');
class App_Controller extends CI_Controller {
	protected $data = array();

	public function __construct() {
		parent::__construct();
		$this->data['pagetitle'] = config_item('name');
	}
    
    protected function auth(){
    	if(!$user_id = $this->session->userdata('user_id')){
    		return redirect(base_url() . 'login');  
    		exit;
    	}
    	// return $user_type;
    }

	protected function render($the_view = NULL, $template = 'master') {
		if ($template == 'json' || $this->input->is_ajax_request()) {
			header('Content-Type: application/json');
			echo json_encode($this->data);
		} elseif (is_null($template)) {
			$this->load->view($the_view, $this->data);
		} else {
			$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
			$this->load->view('templates/frontend/' . $template . '_view', $this->data);
		}
	}
}