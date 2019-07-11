<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="email">email :</label><br>
		<input type="email" name="email" id="email" value="<?= $email ?>"><br>

		<label for="tel">tel :</label><br>
		<input type="text" name="tel" id="tel" value="<?= $tel ?>"><br>

		<label for="reseau">Reseau sociaux :</label><br>
		<input type="text" name="reseau" id="reseau" value="<?= $reseau ?>"><br>

		

		 

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>