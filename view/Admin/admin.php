<?php require_once('../../inc/adminHeader.inc.php');?>
  
  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
            <a href="TabCompetence.php"><i class="fas fa-fw fa-brain"></i></a>
              </div>
              <div class="display-4">Competences</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="TabCompetence.php">
              <span class="float-left">Voir Détails</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <a href="TabExperience.php"><i class="fas fa-fw fa-file"></i></a>
              </div>
              <div class="display-4">Experience</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="TabExperience.php">
              <span class="float-left">Voir Détails</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <a href="TabFormation.php"><i class="fas fa-fw fa-book"></i></a>
              </div>
              <div class="display-4">Formation</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="TabFormation.php">
              <span class="float-left">Voir Détails</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
    </div>

  </div>

  <!-- /.container-fluid -->

<?php require_once('../../inc/adminFooter.inc.php');?>
