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
    public function blockTeacher() {
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