<?php include("includes/header.php") ?>

	<?php if(isset($_GET['id']) && in_array($_GET['id'], array(1, 2, 3, 4))) : ?>
		<?php include("page_produit".$_GET['id'].".php") ?>
	<?php else : ?>
		<h3>Produit introuvable</h3>
	<?php endif; ?>

<?php include("includes/footer.php") ?>
