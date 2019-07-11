<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="experience">Experience :</label><br>
		<input type="text" name="experience" id="experience" value="<?= $experience->experience ?>"><br>

		<label for="description">description :</label><br>
		<input type="text" name="description" id="description" value="<?= $experience->description ?>"><br>

		<label for="lieu">lieu :</label><br>
		<input type="text" name="lieu" id="lieu" value="<?= $experience->lieu ?>"><br>

		
		<label for="date_formation">Date  :</label><br>
		<input type="text" name="date_formation" id="date_formation" value="<?= $experience->date_formation ?>"><br>

		

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>