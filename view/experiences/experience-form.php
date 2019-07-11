<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="experience">experience :</label><br>
		<input type="text" name="experience" id="experience" value="<?= $experience ?>"><br>

		<label for="description">Description :</label><br>
		<input type="text" name="description" id="description" value="<?= $description ?>"><br>

		<label for="lieu">lieu :</label><br>
		<input type="text" name="lieu" id="lieu" value="<?= $lieu ?>"><br>

		<label for="date_experience">date :</label><br>
		<input type="text" name="date_experience" id="date_experience" value="<?= $date_experience ?>"><br>

		 

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>