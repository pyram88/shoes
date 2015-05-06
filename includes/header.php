<?php
session_start();
//$_SESSION['panier'] = array();

// Ajout au panier
if(isset($_POST['addPanier']))
{
	if(isset($_POST['pointure']) && is_numeric($_POST['pointure'])  && $_POST['pointure'] > 0)
	{
		$panier['pointure'] = $_POST['pointure'];
		$panier['nomProduit'] = $_POST['nomProduit'];
		$_SESSION['panier'][$_POST['refProduit']] = $panier;
		$_SESSION['flash']['confirm'] = 'Article ajouté à votre panier';
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
	}
}

//print_r($_SESSION['panier']);
//print_r($_SESSION['flash']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/shoes.css"/>
		<script type="text/javascript" src="js/site.js"></script>
		<title> Choose the Shoes </title>
	</head>
	<body>
		<div id="main">
				<div id="title1">
					<h1> Choose the shoes</h1>
					<p id="sous-titre"> Ou les méandres d'une fille qui chaussait du 41</p>
				</div>
			<nav>
				<ul id="menu">
					<li>
						<a href="merciqui.php">Merci qui?</a>
					</li>
					
					<li>
						<a href="contact.php">Contact</a>
					</li>					

					<li>
						<a href="panier.php">Panier <?php if (isset($_SESSION['panier'])){ echo '('.count($_SESSION['panier']).')'; } ?></a>
					</li>	

					<li>
						<a href="profil.php">Compte</a>
					</li>	

					<li>
						<a href="index.php">Accueil</a>
					</li>
				</ul>
				</br>
			</nav>
			<div class="merge-header"></div>


			<!-- Flash error / confirm messages -->

			<?php if(isset($_SESSION['flash']['confirm'])) : ?>
				<div class='confirm'><?php echo $_SESSION['flash']['confirm'] ?></div>
			<?php unset($_SESSION['flash']['confirm']); ?>
			<?php endif; ?> 

			<?php if(isset($_SESSION['flash']['error'])) : ?>
				<div class='error'><?php echo $_SESSION['flash']['error'] ?></div>
			<?php unset($_SESSION['flash']['error']); ?>
			<?php endif; ?> 