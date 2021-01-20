<?php

	$phone = $_POST["phone"];
	$message = $_POST["message"];

	send_sms($phone, $message);

	function send_sms($phone, $message) {
		$username = 'dexter_9';
		$password = '95931';
		$to = $phone;
		$from = 'SMS ALERT';
		$message = 'dear Student'.$message;
		$url = "http://Lifetimesms.com/plain?username=".$username."&password=".$password."&to=".$to."&from=".urlencode($from)."&message=".urlencode($message)."";
		//Curl Start
		$ch  =  curl_init();
		$timeout  =  30;
		curl_setopt ($ch,CURLOPT_URL, $url) ;
		curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
		$response = curl_exec($ch) ;
		curl_close($ch) ; 
		//Write out the response
		echo $response ;
	}


?>