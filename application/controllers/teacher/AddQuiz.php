<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class AddQuiz extends App_Controller{	
	public function __construct(){
        parent ::__construct(); 
        is_logged_in();            
    }
    public function index() {
        $data = array(
        'host_id' =>  $this->input->post('host_name'),
        'class_id' =>  $this->input->post('class_name'),
        'quiz_name' => $this->input->post('quiz_name'),
        'start_time' => $this->input->post('start_time'),
        'end_time' => $this->input->post('end_time')
        );
      $this->db->insert('quiz', $data);
      return redirect(base_url() . 'quiz/allQuiz' );
    }   
}  