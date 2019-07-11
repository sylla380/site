<?php require_once('inc/header.inc.php'); ?>
	<h1><?php echo $formation->formation; ?></h1>

	<div>
		<span>formation :</span>
		<?php echo $formation->formation; ?>
	</div>
	<div>
		<span>description :</span>
		<?php echo $formation->description; ?>
	</div>
	<div>
		<span>lieu :</span>
		<?php echo $formation->lieu; ?>
	</div>
	<div>
		<span>date :</span>
		<?php echo $formation->date_formation; ?>
	</div>
	

<hr><hr>

		<?php foreach($formation as $indice => $valeur): ?>
			<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
		<?php endforeach; ?>

</body>
</html>