<?php
if(!defined('BASEPATH') ) exit('No direct script access allowed');

class Dashboard extends App_Controller{   
    public function __construct(){
        parent ::__construct(); 
        is_logged_in();            
    }
    public function index(){   
    return $this->render('teacher/dashboard');     
    }
    public function back(){      
       return redirect(base_url() . 'student/Quiz' );
    }
    public function mailer() {
        require_once "vendor/autoload.php";
        $mail = new PHPMailer;
        $mail->SMTPDebug = 3;                              // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'monii5686@gmail.com';                 // SMTP username
        $mail->Password = 'kindle@123';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                   // TCP port to connect to
        $mail->setFrom('monii5686@gmail.com', 'Mailer');
        $mail->addAddress('test@yopmail.com', 'Joe User');     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}  