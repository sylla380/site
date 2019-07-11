
<?php require_once('inc/header.inc.php'); ?>

<section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2>Me <strong>Contacter</strong>! </h2>
            </div>
          </div>
          
          
          <div class="col-md-5 pl-md-5" id="section-contact">
          <?php foreach($contacts as $contact) :  ?>
            <h3 class="mb-5">Contact</h3>
            <ul class="site-contact-details">
              <li>
                <span class="text-uppercase">Email</span><?php echo htmlentities($contact->email);  ?>
              </li><br>
              <li>
                <span class="text-uppercase">Tel</span>
                <?php echo htmlentities($contact->tel);  ?>
              </li>
              <li>
                <span class="text-uppercase">reseau sociaux</span>
                <?php echo htmlentities($contact->reseau);  ?>
              </li>
             
            </ul>
          </div>

          <div class="col-md-7 mb-5 mb-md-0">
            <form action="" class="site-form">
              <h3 class="mb-5">Me contacter</h3>
              <div class="form-group">
                <input type="email" class="form-control px-3 py-4" placeholder="Votre Email">
                  <div class="form-group">
                    <input type="text" class="form-control px-3 py-4" placeholder="Votre Tel">
                  </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control px-3 py-4" placeholder="Votre reseau sociaux">
              </div>
              <div class="form-group mb-5">
                <textarea class="form-control px-3 py-4"cols="30" rows="10" placeholder="Ecrivez votre Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary  px-4 py-3" value="Envoyer un Message">
              </div>
            </form>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  <?php require_once('inc/footer.inc.php'); ?>


