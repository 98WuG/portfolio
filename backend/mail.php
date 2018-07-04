<?php

// Load secret data (email address, captcha secret)
$ini_array = parse_ini_file("config.ini");
$myemail = $ini_array["email"];
$secret = $ini_array["secret"];

// Get form data
$name = stripslashes($_POST["name"]);
$email = stripslashes($_POST["email"]);
$subject = stripslashes($_POST["subject"]);
$message = stripslashes($_POST["message"]);
$captcha = $_POST["captcha"];

// Return sending status
echo isValid($captcha, $secret, $myemail, $name, $email, $subject, $message);

// Check for validity of captcha
function isValid($captcha, $secret, $myemail, $name, $email, $subject, $message)
{

	// Build POST data JSON
	$post_data = http_build_query(
		array(
			'secret' => $secret,
			'response' => $captcha,
			'remoteip' => $_SERVER['REMOTE_ADDR']
		)
	);

	// Build POST request
	$opts = array('http' =>
		array(
			'method' => 'POST',
			'header' => 'Content-type: application/x-www-form-urlencoded',
			'content' => $post_data
		)
	);

	// Send POST request and read result
	$context = stream_context_create($opts);
	$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
	$result = json_decode($response);

	// If successful, send email
	// Else, error code 1
	if($result->success == true) {
		return sendEmail($myemail, $name, $email, $subject, $message);
	} else if($result->success == false) {
		return 1;
	}
}

// Send email
function sendEmail($myemail, $name, $email, $subject, $message)
{
	// Email data
	$to			= $myemail;
	$subject	= "Contact form on " . time() . ": " . $subject . " from " . $email;
	$message	= "Name: ". $name . "<br>" .
		"Email: " . $email . "<br>" .
		"Subject: " . $subject . "<br>" .
		"Message: " . $message . "<br>";
	$headers	= "From: form@geraldwu.com" . "\r\n" .
		"MIME-Version: 1.0\r\n" .
		"Content-Type: text/html; charset=ISO-8859-1\r\n" .
		"X-Mailer: PHP/" . phpversion();

	// Send email and read status
	$status = mail($to, $subject, $message, $headers);

	// Return successful, otherwise error code 2
	if( $status == true ) {
		return 0;
	} else {
		return 2;
	}
}


?>
