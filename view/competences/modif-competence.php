<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="email">email :</label><br>
		<input type="text" name="email" id="email" value="<?= $competence->email ?>"><br>

		<label for="tel">tel :</label><br>
		<input type="text" name="tel" id="tel" value="<?= $competence->tel ?>"><br>

		<label for="reseau">reseau :</label><br>
		<input type="text" name="reseau" id="reseau" value="<?= $competence->reseau ?>"><br>

		
		

		

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>