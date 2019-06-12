<?php require_once('inc/header.inc.php');?>


    <div class="section" id="formation">
        <div class="container cc-experience">
            <div class="h4 text-center mb-4 title">Formation</div>
            <?php foreach ($formations as $form) : ?>
            <div class="card">
            <div class="row">
                <div class="col-md-3 bg-danger" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                    <p><?php echo htmlentities($form->date);?></p>
                    <div class="h5">
                        <?php echo htmlentities($form->nomFormation);?>
                    </div>
                </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                    <div class="h5"><?php echo htmlentities($form->poste);?></div>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                </div>
                </div>
            </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>



<?php require_once('inc/footer.inc.php');?>

