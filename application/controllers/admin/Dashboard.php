<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');
  
class Dashboard extends App_Controller{	
	public function __construct(){
        parent ::__construct();  
        is_logged_in();             
    }
    public function index(){	    
    	return $this->render('admin/dashboard');
    }
    public function students() {
    	return $this->render('admin/students');
    }
     public function teachers() {
    	return $this->render('admin/students');
    }

}