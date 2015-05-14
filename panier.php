<?php include("includes/header.php") ?>
				
<!-- <h2 class="qui"> Mon panier</h2> -->

<div id="panier">
	<?php if (isset($_SESSION['panier']) && count($_SESSION['panier']) == 0) : ?>
		<h3>Oupsi, votre panier est vide !</h3>
	<?php endif; ?>


<<<<<<< HEAD
	<?php if (count($_SESSION['panier']) == 4): ?>
		<a class="cadeau-enable popup-with-zoom-anim" href="#custom-content2">Cadeau</a>
=======
	<?php if (isset($_SESSION['panier']) && count($_SESSION['panier']) == 4): ?>
		<a class="cadeau-enable popup-with-zoom-anim" href="#custom-content">Cadeau</a>
>>>>>>> 004ddfe67d2fc31d7afb98e639caa5267d90592e
	<?php else: ?>
		<a class="cadeau-disable" >Cadeau</a>
	<?php endif; ?>

	<table>
		<thead>
			<tr>
				<th></th>
				<th>Produit</th>
				<th>Pointure</th>
				<th>Prix</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php if (isset($_SESSION['panier'])): ?>
			<?php foreach ($_SESSION['panier'] as $refProduit => $produit) : ?>
				<tr>
					<td><img src="image/image<?php echo $refProduit ?>.jpg" /></td>
					<td><?php echo $produit['nomProduit'] ?></td>
					<td><?php echo $produit['pointure'] ?></td>
					<td>Gratuit</td>
					<td>
						<form action="" method="post">
							<input type="hidden" name="id" value="<?php echo $refProduit ?>" />
							<input type="submit" name="deletePanier" value="supprimer"/>
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		</tbody>
	</table>

	<?php if(isset($_SESSION['panier']) && count($_SESSION['panier']) >= 4) : ?>
	    <div id="custom-content2" class="zoom-anim-dialog mfp-hide">
		    <div id="popup-content">
		    	<h1 class="offre_speciale">Recevez gratuitement ce cadeau un peu empoisonné!</h1>
		    	<p id="popup_text">Cliquez sur oui pour offrir une nouvelle vie à ce petit être esseulé :)</br></br><p> 
		    	<img class="me" src="image/moi.jpg" alt="ridiculité"/>
		    	
		    	<ul id="choix">
			    	<li><a class="lien_panier" href="panier.php"> Oui j'accepte!</a></li>
			    	<li><a class="lien_panier" href="panier.php"> Non, je ne suis pas intéressé(e)</a></li>
		   		</ul>
		    </div>
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
		});
	  
		</script>
	<?php endif; ?>
		
</div>

<?php include("includes/footer.php") ?>