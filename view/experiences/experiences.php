<?php require_once('inc/header.inc.php');?>


    <div class="section" id="experience">
        <div class="container cc-experience">
            <div class="h4 text-center mb-4 title">Experience</div>
            <?php foreach ($experiences as $ex) : ?>
            <div class="card">
            <div class="row">
                <div class="col-md-3 bg-danger" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                    <p><?php echo htmlentities($ex->date);?></p>
                    <div class="h5">
                        <?php echo htmlentities($ex->nomEntreprise);?>
                    </div>
                </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                    <div class="h5"><?php echo htmlentities($ex->poste);?></div>
                    <p><?php echo htmlentities($ex->description);?></p>
                </div>
                </div>
            </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>



