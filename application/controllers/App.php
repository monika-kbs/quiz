<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Faker\Factory as Faker;
use Carbon\Carbon;

class App extends CI_Controller {	
	public function fakeData() {
		$currentTime =  Carbon::now('Asia/Kolkata');
		$faker = Faker::create();
		for ($i=0; $i < 50; $i++) {
            $userData = array(
		      	'users_type' => $faker->randomElement([1,2]),
		        'name' => $faker->name,
		        'email' => $faker->email,
		        'password' => sha1('password'),
		        'roll_no' => $faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
		        'dob' =>$faker->date($format = 'Y-m-d', $max = 'now')
	        );
		    $this->db->insert('users', $userData);
		}
		/*
		insert classes into database
		 */
		  $sql = "INSERT INTO classes (class_id, class_name) VALUES(1,	'First'),(2,	'Second'),(3,	'Third'),
						(4,	'Fourth'),(5,	'Fifth'),(6,	'Sixth'),(7,	'Seventh'),(8,	'Eight'),(9,	'Ninth'),
						(10, 'Tenth')" ;
		  $this->db->query($sql);
		  /*
		insert subjects into database
		 */
		 $sql = "INSERT INTO subjects (sub_id, sub_name) VALUES(1,	'Math'),(2,	'Science'),(3,	'English'),
						(4,	'Physics'),(5,	'Chemistry'),(6,	'Hindi'),(7,	'I.T'),(8,	'S.S')" ;
		  $this->db->query($sql);  
		}

		public function dependentTables() {
			$faker = Faker::create();
				$currentTime =  Carbon::now('Asia/Kolkata');
				for ($i=0; $i < 10; $i++) {
		            $userData = array(
				        'host_id' => 3,
				        'class_id' => 1,
				        'quiz_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
				        'start_time' => $currentTime,
				        'end_time' => $currentTime
			        );
				    $this->db->insert('quiz', $userData);	

				     $userData = array(
				        'host_id' => 3,
				        'class_id' => 1,
				        'quiz_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
				        'start_time' => $currentTime,
				        'end_time' => $currentTime
			        );
				    $this->db->insert('quiz', $userData);	
				  $userData = array(
		      	'question' => $faker->sentence($nbWords = 6, $variableNbWords = true),		
		      	'quiz_id' => 4,        
	        );
		    $this->db->insert('questions', $userData);		    
			}
		}
	}

