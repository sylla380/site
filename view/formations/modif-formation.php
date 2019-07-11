<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="formation">Formation :</label><br>
		<input type="text" name="formation" id="formation" value="<?= $formation->formation ?>"><br>

		<label for="description">description :</label><br>
		<input type="text" name="description" id="description" value="<?= $formation->description ?>"><br>

		<label for="lieu">lieu :</label><br>
		<input type="text" name="lieu" id="lieu" value="<?= $formation->lieu ?>"><br>

		
		<label for="date_formation">Date  :</label><br>
		<input type="text" name="date_formation" id="date_formation" value="<?= $formation->date_formation ?>"><br>

		

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>