<?php
session_start();
include 'includes/config.php';
include 'includes/post.php';
require_once 'swiftmailer/lib/swift_required.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/shoes.css"/>
		<script type="text/javascript" src="js/site.js"></script>
		<title> Choose the Shoes </title>
		
		<!-- jquery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>

		<!-- popup -->
		<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css"> 
		<script src="magnific-popup/dist/jquery.magnific-popup.js"></script>
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
						<a href="panier.php"><img class="icon3" src="image/icon3.png" alt="cart"/>Panier <?php if (isset($_SESSION['panier'])){ echo '('.count($_SESSION['panier']).')'; } ?></a>
					</li>	

					<li>
						<a href="profil.php"><img class="icon2" src="image/icon2.png" alt="account"/>Compte</a>
					</li>	

					<li>
						<a href="index.php"><img class="icon1" src="image/home.png" alt="home"/>Accueil</a>
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