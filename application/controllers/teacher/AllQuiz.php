<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class AllQuiz extends App_Controller{	
	public function __construct(){
        parent ::__construct(); 
        is_logged_in();            
    }
    public function index(){		
	   return $this->render('admin/all_quiz');
    }
    public function quiz(){		
	   return $this->render('admin/quiz');
    }
}  