<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class LogOut extends App_Controller {  
  public function __construct(){
      parent ::__construct(); 
   }
   
  public function index(){
    $this->session->sess_destroy();
    return redirect(base_url() . 'login' );
  }
}