<?php require_once('inc/header.inc.php'); ?>
		
		
		<table class="competences">
			<thead>
      <section class="site-section" id="section-about">
      <div class="container">
        

        <div class="row pt-5">
          <div class="col-md-3 mb-3">
            <div class="section-heading" id=section-competences>
              <h2>Mes <strong>Competences</strong></h2>
            </div>
          </div>
          <div class="col-md-9">
          <?php foreach($competences as $competence) :  ?>
            <div class="skill">
             <h3><?php echo $competence->nom; ?></h3>
              <div class="progress">
			        	<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60" style="width: <?php echo $competence->niveau; ?>%">
                    <span class="sr-only"></span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
					</div>
					
            
				
		
				
		
			</thead>
		
			
		</table>
	</body>
</html>






