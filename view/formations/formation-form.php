<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="prenom">formation :</label><br>
		<input type="text" name="formation" id="formation" value="<?= $formation ?>"><br>

		<label for="description">Description :</label><br>
		<input type="text" name="description" id="description" value="<?= $description ?>"><br>

		<label for="lieu">lieu :</label><br>
		<input type="text" name="lieu" id="lieu" value="<?= $lieu ?>"><br>

		<label for="date_formation">date_formation :</label><br>
		<input type="text" name="date_formation" id="date_formation" value="<?= $date_formation ?>"><br>

		 

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>