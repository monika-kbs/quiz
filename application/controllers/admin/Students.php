<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class Students extends App_Controller{	
	public function __construct(){
        parent ::__construct(); 
         is_logged_in();            
    }
    public function index(){		
	   return $this->render('admin/students');
    }
    public function addStudent() {
       $data = array(
        'name' =>  $this->input->post('name'),
        'email' =>  $this->input->post('email'),
        'password' => $this->input->post('password'),
        'dob' => $this->input->post('dob'),
        'roll_no' => $this->input->post('roll_no')
        );
       echo "<pre>";
       print_r($data);
       echo "</pre>";
       die;
      $this->db->insert('users', $data);
      return redirect(base_url() . 'teacher/quiz' ); 
    }
}    