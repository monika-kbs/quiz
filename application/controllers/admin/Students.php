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
}    