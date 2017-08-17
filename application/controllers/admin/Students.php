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

    public function store() {
       $data = array(
        'users_type' => 1,
        'name' =>  $this->input->post('name'),
        'email' =>  $this->input->post('email'),
        'password' => $this->input->post('password'),
        'dob' => $this->input->post('dob'),
        'roll_no' => $this->input->post('roll_no'),
        'created_at' => date("Y-m-d H:i:s")
        );
       $this->db->insert('users', $data);
       return redirect(base_url() . 'teacher/quiz' ); 
    }
    public function update($id="") {
       $data = array(
        'name' =>  $this->input->post('name'),
        'email' =>  $this->input->post('email'),
        'password' => $this->input->post('password'),
        'dob' => $this->input->post('dob'),
        'roll_no' => $this->input->post('roll_no'),
        'created_at' => date("Y-m-d H:i:s")
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
    public function delete($id="") {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('users');
        return redirect(base_url() . 'admin/students' );  
    }
}    