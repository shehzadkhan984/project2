<?php
	/*$name = "From BBSU";
	
	$to = $_POST['to'];
	$subject =  "from BBSU Library Management";
	$body = $request."\n\nthis is an automated message plz dnt reply on these message.\n\n";
	mail ($to,$subject,$body);*/
	$to = $_POST['to'];
    $email_from = "info@BBSU.in";

    $full_name = 'Shehzad';
    $from_mail = $full_name.'<'.$email_from.'>';
    $request = $_POST['request'];


    $subject = "From BBSU Library Management";

    $message = $request."\r\n\r\n\r\n This is an automated message please dont reply on these message";
    $from = $from_mail;

    $headers = 'From: info@BBSU.com' . "\r\n" .
   'Reply-To: info@BBSU.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";        
    mail($to,$subject,$message,$headers);

?>