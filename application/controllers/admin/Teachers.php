<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class Teachers extends App_Controller{	
	public function __construct(){
        parent ::__construct();    
         is_logged_in();         
    }
    public function index(){		
	   return $this->render('admin/teachers');
    }

    public function store() {
       $data = array(
        'users_type' => 2,
        'name' =>  $this->input->post('name'),
        'email' =>  $this->input->post('email'),
        'password' => $this->input->post('password'),
        'dob' => $this->input->post('teacherdob'),
        'created_at' => date("Y-m-d H:i:s")
        );
      $this->db->insert('users', $data);
      return redirect(base_url() . 'admin/teachers' ); 
    }

    public function delete($id="") {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('users');
        return redirect(base_url() . 'admin/teachers' );  
    }
    public function form($id){
        $this->id = $this->uri->segment(4);
        return  $this->render('admin/form');
    }

    public function update() {  
        $id = 24;
       // $id = $this->uri->segment(4);   
       $data = array(
        'name' =>  $this->input->post('name'),
        'email' =>  $this->input->post('email'),
        'password' => $this->input->post('password'),
        'dob' => $this->input->post('tdob')
        );      
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return redirect(base_url() . 'admin/teachers' );          
    }

    public function block() {
        if(isset($_POST['block_teacher'])){ 
            echo $status = $this->input->post('block_teacher');
             echo $id = $this->input->post('id');
             $query = $this->db->get_where('users', array('status' => $status))->result();
             echo "<pre>";
             print_r($query);
             echo "</pre>";
             die;
            foreach($query as $row){
                $status_var = $row->status;
                if($status_var=='0'){
                  $status_state=1;
                }
                else{
                  $status_state=0;
                }
                $this->db->set('status', $status_state);
                $this->db->where('id', $id);
                $update = $this->db->update('users');
                if($update){
                  // return redirect(base_url() . 'admin/dashboard/teachers' );
                }
            }
        }
    }
}  