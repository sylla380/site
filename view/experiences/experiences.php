
<?php require_once('inc/header.inc.php'); ?>
<!-- .section -->
  <div class="col-md-6">
    <section class="site-section bg-light " id="section-resume">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>Mon <strong>Experiences</strong></h2>
            </div>
          </div>
         
          <?php foreach($experiences as $experience) :
            $id = $experience->id_experience;
            if(($id % 2) == 0):
          ?>
		        <div class="col-md-6">
              <div class="resume-item mb-4">
                <span class="date"><span class="icon-calendar"></span><?php echo htmlentities($experience->date_experience);  ?></span>
                <h3><?php echo htmlentities($experience->experience);  ?></h3>
                <p><?php echo htmlentities($experience->description);  ?></p>
                <span class="school"><?php echo htmlentities($experience->lieu);  ?></span>
              </div>
            </div>
            <?php else: ?>
            <div class="col-md-6">
              <div class="resume-item mb-4">
                <span class="date"><span class="icon-calendar"></span><?php echo htmlentities($experience->date_experience);  ?></span>
                <h3><?php echo htmlentities($experience->experience);  ?></h3>
                <p><?php echo htmlentities($experience->description);  ?></p>
                <span class="school"><?php echo htmlentities($experience->lieu);  ?></span>
              </div>
            </div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </section> <!-- .section -->
  </div>
</div> <!-- fermeture div row page formation -->


