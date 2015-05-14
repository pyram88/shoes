<?php
// Ajout au panier
if(isset($_POST['addPanier']))
{
	if(isset($_POST['pointure']) && is_numeric($_POST['pointure'])  && $_POST['pointure'] > 0)
	{
		if(isset($_SESSION['panier'][$_POST['refProduit']]))
		{
			$_SESSION['flash']['error'] = 'Article déja présent dans votre panier';
		}
		else
		{
			$panier['pointure'] = $_POST['pointure'];
			$panier['nomProduit'] = $_POST['nomProduit'];
			$_SESSION['panier'][$_POST['refProduit']] = $panier;
			$_SESSION['flash']['confirm'] = 'Article ajouté à votre panier';
		}
	}
	else
	{
		$_SESSION['flash']['error'] = 'Veuillez indiquer votre pointure';
	}
}

// Suppression panier
if(isset($_POST['deletePanier']))
{
	if(isset($_POST['id']) && isset($_SESSION['panier'][$_POST['id']]))
	{
		unset($_SESSION['panier'][$_POST['id']]);
		$_SESSION['flash']['confirm'] = 'Article supprimé de votre panier';

		// clear panier
		if(count($_SESSION['panier']) == 0)
		{
			unset($_SESSION['panier']);
		}
	}
}

// Envoie message contact
if(isset($_POST['send_message']))
{
	if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']))
	{

		$message = 'Email : '.$_POST['email'].'<br/>';
		$message .= 'Nom : '.$_POST['nom'].'<br/><br/>';
		$message .= $_POST['message'];


		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
		  ->setUsername(GMAIL_SENDER)
		  ->setPassword(GMAIL_PASSWORD);

		$mailer = Swift_Mailer::newInstance($transport);

		$message = Swift_Message::newInstance('Nouveau contact')
		  ->setFrom(array(GMAIL_SENDER))
		  ->setTo(array(GMAIL_RECIEVER))
		  ->setBody($message, 'text/html');


		if(CAN_SEND_EMAIL == true)
		{
			if($mailer->send($message)){
				$_SESSION['flash']['confirm'] = 'Message envoyé avec succès';
			}else{
				$_SESSION['flash']['error'] = 'Un problème est survenu';
			}
		}
		else
		{
			$_SESSION['flash']['confirm'] = 'Message envoyé avec succès';	
		}
	}
}