<?php include("includes/header.php") ?>

	<form class="contact" action="" method="post">
		<div>
			<label for="contact_nom">Nom</label>
			<input type="text" name="nom" id="contact_nom"/>	
		</div>

		<div>
			<label for="contact_email">Email</label>
			<input type="text" name="email" id="contact_email"/>
		</div>
		<br/>
		<div>
			<label for="contact_message">Message</label>
			<textarea name="message" id="contact_message"></textarea>
		</div>

		<input type="submit" name="send_message" value="Envoyer"/>
	</form>

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