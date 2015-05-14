<?php include("includes/header.php") ?>
	

	<div class="merki">
		<p id="merci">
		Envie de nous envoyer un petit message? Vous êtes au bon endroit!</br>Nous sommes impatients de vous lire!
		</p>
	</div>

	<div id="main_contact">
		<img class="img_contact" src="image/contactme.png" alt="contact_me"/>
		<form class="contact" action="" method="post">
			<div>
				<label for="contact_nom">Nom</label>
				<input type="text" name="nom" id="contact_nom" placeholder="Indiquez votre nom"/>	
			</div>

			<div>
				<label for="contact_email">Email</label>
				<input type="text" name="email" id="contact_email" placeholder="Votre adresse mail"/>
			</div>
			<br/>
			<div>
				<label for="contact_message">Message</label>
				<textarea name="message" id="contact_message" placeholder="Que voulez-vous nous dire?"></textarea>
			</div>

			<input type="submit" name="send_message" value="Envoyer"/>
		</form>
	</div>

	<script type="text/javascript">
	$('form').on('submit', function(e)
	{
		var nom = $('input[name="nom"]').val();
		var email = $('input[name="email"]').val();
		var message = $('textarea').val();

		if(nom == '' || email == '' || message == '')
		{
			e.preventDefault();	
		}
		});
	</script>

<?php include("includes/footer.php") ?>