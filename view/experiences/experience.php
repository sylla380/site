<?php require_once('inc/header.inc.php'); ?>
	<h1><?php echo $experience->experience; ?></h1>

	<div>
		<span>experience :</span>
		<?php echo $experience->experience; ?>
	</div>
	<div>
		<span>description :</span>
		<?php echo $experience->description; ?>
	</div>
	<div>
		<span>lieu :</span>
		<?php echo $experience->lieu; ?>
	</div>
	<div>
		<span>date :</span>
		<?php echo $experience->date_experience; ?>
	</div>
	

<hr><hr>

		<?php foreach($experience as $indice => $valeur): ?>
			<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
		<?php endforeach; ?>

</body>
</html>