<?php
session_start();
require_once 'swiftmailer/lib/swift_required.php';
include "includes/config.php";

// some check
if(isset($_POST['status']) && in_array($_POST['status'], array('accepted', 'refused')))
{
	$_SESSION['end'] = true;

	$status = $_POST['status'];

	if($status == 'accepted')
	{
		$message = 'Une personne vient de vous accepter :)';
	}
	else
	{
		$message = 'Une personne vient de vous refuser :(';
	}
	
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
	  ->setUsername(GMAIL_SENDER)
	  ->setPassword(GMAIL_PASSWORD);

	$mailer = Swift_Mailer::newInstance($transport);

	$message = Swift_Message::newInstance('Refusé ou accepté ?')
	  ->setFrom(array(GMAIL_SENDER))
	  ->setTo(array(GMAIL_RECIEVER))
	  ->setBody($message);


	if(CAN_SEND_EMAIL == true)
	{
		$mailer->send($message);
	}
}

