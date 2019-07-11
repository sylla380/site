<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="prenom">Nom :</label><br>
		<input type="text" name="formation" id="formation" value="<?= $formation ?>"><br>

		<label for="niveau">Niveau :</label><br>
		<input type="text" name="niveau" id="niveau" value="<?= $description ?>"><br>

		<label for="image">image :</label><br>
		<input type="text" name="image" id="image" value="<?= $image ?>"><br>

		

		 

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>