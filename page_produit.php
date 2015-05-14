<?php include("includes/header.php") ?>

	<?php if(isset($_GET['id']) && in_array($_GET['id'], array(1, 2, 3, 4))) : ?>
		<?php include("page_produit".$_GET['id'].".php") ?>
	<?php else : ?>
		<h3>Produit introuvable</h3>
	<?php endif; ?>


	<?php if(count($_SESSION['panier']) >= 4) : ?>

		<a class="popup-with-zoom-anim" href="#custom-content" style="display:none" ></a>
	    <div id="custom-content" class="zoom-anim-dialog mfp-hide">
	    	<h1>Bravo</h1>
	    	<p><a href="panier.php" >Accédez à votre panier</a> et découvrez le cadeau mistère !</p>
	    </div>

		<script type="text/javascript">
		 
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',

				fixedContentPos: false,
				fixedBgPos: true,

				overflowY: 'auto',

				closeBtnInside: true,
				preloader: false,

				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

			$('.popup-with-zoom-anim').trigger('click');
		});
	  
		</script>
	<?php endif; ?>

<?php include("includes/footer.php") ?>
