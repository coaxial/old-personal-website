<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/swiftmailer/swift_required.php';

class apiResult {
	public $mailSent = false;
	public $senderEmail = 'error';
}

$email = Swift_Message::newInstance()
	->setSubject('An email from a visitor')
	->setFrom(array($_POST['senderEmail'] => $_POST['senderName']))
	->setTo(array('me@example.com' => 'Pierre-Yves Poujade'))
	->setBody($_POST['senderMessage'])
	;

$transport = Swift_SmtpTransport::newInstance('mail.example.com', 587, 'tls')
	->setUsername('username')
	->setPassword('password')
	;

$mailer = Swift_Mailer::newInstance($transport);

$result = $mailer->send($email);


$jsonResult = new apiResult();

if ($result) {
	$jsonResult->mailSent = true;
	$jsonResult->senderEmail = $_POST['senderEmail'];
}

echo json_encode($jsonResult);
?>