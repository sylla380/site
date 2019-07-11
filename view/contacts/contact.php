<?php require_once('inc/header.inc.php'); ?>
	<h1><?php echo $contact->contact; ?></h1>

	<div>
		<span>email:</span>
		<?php echo $contact->email; ?>
	</div>
	<div>
		<span>tel :</span>
		<?php echo $contact->tel; ?>
	</div>
	<div>
		<span>reseau sociaux :</span>
		<?php echo $contact->reseau; ?>
	</div>
	
	

<hr><hr>

		<?php foreach($contact as $indice => $valeur): ?>
			<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
		<?php endforeach; ?>

</body>
</html>