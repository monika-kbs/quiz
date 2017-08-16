<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');
class Login extends App_Controller {  
  public function __construct(){
      parent ::__construct(); 
        auth();
  }
    /**
     * Check Authentication
     * Validation
     */
  public function index(){    
  if($this->input->method() == "post"){     
      $config = array(  
          array(
                  'field' => 'password',
                  'label' => 'Password',
                  'rules' => 'required'
          ),       
          array(
                  'field' => 'email',
                  'label' => 'Email',
                  'rules' => 'required|valid_email'
          )
       );
        $this->form_validation->set_rules($config);
       if($this->form_validation->run() == FALSE){
            return $this->render('auth/login');
        }      
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email, 'password' => sha1($password)])->row();
      if(count($user) > 0){
         $userSessionData = array(
          'user_id' => $user->id,
          'users_type' => $user->users_type,
          'name'=> $user->name,
          'logged_in' =>TRUE
          );                                       
         $this->session->set_userdata($userSessionData);  
         $user_id = $this->session->userdata('user_id');
         $users_type = $this->session->userdata('users_type');
         $user = $this->db->get_where('ci_sessions', array('data' => $user_id))->result();

          if (count($query) == "" && $users_type == 3){
              return redirect(base_url() . 'admin/index' );
          }           
          elseif(count($query) == "" && $users_type == 2){
              return redirect(base_url() . 'login' );
          }
          elseif(count($query) == "" && $users_type == 1){
              return redirect(base_url() . 'login' );
          }
          else{
            return redirect(base_url() . 'login' );
          }
      }
      $this->session->set_flashdata('invalid_credential', 'Invalid username or password');
     return redirect(base_url() . 'login');    
    }
    return $this->render('auth/login', 'auth');
  } 
}
