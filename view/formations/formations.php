
<?php require_once('inc/header.inc.php'); ?>
<!-- .section -->
<div class="row">  
	<div class="col-md-6">
		<section class="site-section bg-light " id="section-resume">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-5">
						<div class="section-heading text-center">
							<h2>Mes <strong>formations</strong></h2>
						</div>
					</div>
			
					<div class="col-md-12">
						<?php foreach($formations as $formation) :  ?>
							<div class="resume-item mb-4">
								<span class="date"><span class="icon-calendar"></span><?php echo htmlentities($formation->date_formation);  ?></span>
								<h3><?php echo htmlentities($formation->formation);  ?></h3>
								<p><?php echo htmlentities($formation->description);  ?></p>
								<span class="school"><?php echo htmlentities($formation->lieu);  ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section> <!-- .section -->
	</div>

