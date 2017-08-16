<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mailer extends CI_Controller {	
	public function index() {
		$mail = new PHPMail4er;

		$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'localhost';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'root';                 // SMTP username
		$mail->Password = 'root';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('monii5686@gmail.com', 'Mailer');
		$mail->addAddress('monii5686@gmail.com');               // Name is optional
		$mail->addReplyTo('rafaela.dooley@smith.com', 'Information');       
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
