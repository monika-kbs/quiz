<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class Quiz extends App_Controller{	
	public function __construct(){
        parent ::__construct();  
        is_logged_in();           
    }
    public function index(){		
	    return $this->render('student/quiz');
    }
    public function store(){  
        $answer = $this->input->post('option');
        foreach(array_keys($answer) as $key => $value){
            print $value."<br>";
            $data = array(
            'answer' =>  $value,
            'ques_id' => $ques_id
            );
        $this->db->insert('answers', $data);
        }
        print_r(implode(', ' , $answer[0]));
        /*
         check Answers
         */
         $query = $this->db->get_where('questions',array('answer'=>$answer,'ques_id'=>$ques_id))->row();
        if($query){
             $this->db->insert('answers', array('correct_ans'=>1));
        }
        return redirect(base_url() . 'student/quiz/index' );
    }

    public function back(){      
       return redirect(base_url() . 'student/AllQuiz' );
    }
}  