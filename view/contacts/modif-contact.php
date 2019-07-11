<?php require_once('inc/header.inc.php'); ?>
	<form method="POST" action="">
		<label for="email">Experience :</label><br>
		<input type="email" name="email" id="email" value="<?= $contact->email ?>"><br>

		<label for="tel">tel :</label><br>
		<input type="text" name="tel" id="tel" value="<?= $contact->tel ?>"><br>

		<label for="reseau">reseau sociaux :</label><br>
		<input type="text" name="reseau" id="reseau" value="<?= $contact->reseau ?>"><br>

		
		<label for="date_formation">Date  :</label><br>
		<input type="text" name="date_formation" id="date_formation" value="<?= $contact->date_formation ?>"><br>

		

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>