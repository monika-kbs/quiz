<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class Quiz extends App_Controller{	
	public function __construct(){
        parent ::__construct();  
        is_logged_in();           
    }
    public function index(){		
	   return $this->render('student/allQuiz');
    }
    public function quiz(){       
       return $this->render('student/quiz');
    }
    public function back(){      
       return redirect(base_url() . 'student/Quiz' );
    }
}  