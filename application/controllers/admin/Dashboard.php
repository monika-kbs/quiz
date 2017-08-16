<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');
  
class Dashboard extends App_Controller{	
	public function __construct(){
        parent ::__construct();  
        is_logged_in();             
    }
    /*
    Load admin dashboard
     */
    public function index(){	    
    	return $this->render('admin/dashboard');
    }
}