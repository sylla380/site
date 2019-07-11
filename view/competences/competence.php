<?php require_once('inc/header.inc.php'); ?>
	<h1><?php echo $competence->nom; ?></h1>

	<div>
		<span>nom :</span>
		<?php echo $competence->nom; ?>
	</div>
	<div>
		<span>niveau :</span>
		<?php echo $competence->niveau; ?>
	</div>
	<div>
		<span>image :</span>
		<?php echo $competence->image; ?>
	</div>
	

<hr><hr>

		<?php foreach($competence as $indice => $valeur): ?>
			<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
		<?php endforeach; ?>

</body>
</html>