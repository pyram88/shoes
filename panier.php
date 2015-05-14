<?php include("includes/header.php") ?>
				
<!-- <h2 class="qui"> Mon panier</h2> -->

<div id="panier">
	<?php if (count($_SESSION['panier']) == 0) : ?>
		<h3>Oupsi, votre panier est vide !</h3>
	<?php endif; ?>


	<?php if (count($_SESSION['panier']) == 4): ?>
		<a class="cadeau-enable popup-with-zoom-anim" href="#custom-content">Cadeau</a>
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
		</tbody>
	</table>

	<?php if(count($_SESSION['panier']) >= 4) : ?>
	    <div id="custom-content" class="zoom-anim-dialog mfp-hide">
	    	<h1>Bravo</h1>
	    	<p><a href="panier.php" >Voici ma photo</p>
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