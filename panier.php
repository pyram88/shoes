<?php include("includes/header.php") ?>
				
<!-- <h2 class="qui"> Mon panier</h2> -->

<div id="panier">
	<?php if (count($_SESSION['panier']) > 0) : ?>
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
	<?php else : ?>
		<h3>Oupsi, votre panier est vide !</h3>
	<?php endif;	 ?>
</div>

<?php include("includes/footer.php") ?>