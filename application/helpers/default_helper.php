<?php
if(!function_exists('is_logged_in'))    
{
    function is_logged_in(){
	    $CI =& get_instance();
	    $is_logged_in = $CI->session->userdata('user_id');
	    if(!isset($is_logged_in) || $is_logged_in != true){
	    echo 'You don\'t have permission to access this page.';  
	    redirect(base_url() . 'login' );  
	    die();      
	    }       
    }
}
if(!function_exists('auth')){
	function auth(){
	  $CI =& get_instance();
      $is_logged_in = $CI->session->userdata('user_id');
      $users_type = $CI->session->userdata('users_type');
      if( !$is_logged_in == "" && $users_type == 3){
          redirect(base_url() . 'admin/dashboard');
          die();  
      }
      elseif(!$is_logged_in == "" && $users_type == 2){
      	  redirect(base_url() . 'teacher/dashboard');
          die();  
      }
      elseif(!$is_logged_in == "" && $users_type == 1){
      	  redirect(base_url() . 'student/AllQuiz');
          die();  
      }
	}
}

if (!function_exists('dd')) {
	function dd($data, $var_dump = false) {
	echo "<pre>";
	if ($var_dump) {
	var_dump($data);
	} else {
	print_r($data);
	}
	echo "</pre>";
	die;
	}
}
if (!function_exists('dump')) {
	function dump($data, $var_dump = false) {
	echo "<pre>";
	if ($var_dump) {
	var_dump($data);
	} else {
	print_r($data);
	}
	echo "</pre>";
	}
}
function getTinyUrl($url) {
	if (strpos($url, 'http') !== 0) {
	$url = 'http://' . $url;
	}
	$gettiny = curl('http://tinyurl.com/api-create.php?url=' . $url);
	if (isset($gettiny) && !empty($gettiny)) {
	return $gettiny;
	}
	return false;
}
if(!function_exists('_log'))
{
 function _log($data, $logType = "INFO") {
     $file = FCPATH . "application/logs/logs.log";      
     if (count($data) && file_exists($file) && is_writable($file)) {
       $data = (is_array($data) || is_object($data)) ? json_encode($data) : $data;
       $dayTime = date('D h:i');
       $content = "[" . $logType . "] [" . $dayTime . "]" . PHP_EOL . PHP_EOL . $data . PHP_EOL . PHP_EOL;
       file_put_contents($file, $content, FILE_APPEND);
     }
 }
}
function timeago($date) {
    $timestamp = strtotime($date);     
    $strTime = array("second", "minute", "hour", "day", "month", "year");
    $length = array("60","60","24","30","12","10");
    $currentTime = time();
    if($currentTime >= $timestamp) {
     $diff     = time()- $timestamp;
     for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
     $diff = $diff / $length[$i];
     }
     $diff = round($diff);
     return $diff . " " . $strTime[$i] . "(s) ago ";
    }
 }
if (!function_exists('css')) {
	function css($file) {
	return site_url() . 'assets/css/' . $file;
	}
}

if (!function_exists('js')) {
	function js($file) {
	return site_url() . 'assets/js/' . $file;
	}
}

if (!function_exists('asset')) {
	function asset($file) {
	return site_url() . '/assets/' . $file;
	}
}

if (!function_exists('url')) {
	function url($uri = '', $protocol = NULL) {
	   return site_url($uri, $protocol);
	}
}