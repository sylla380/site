<?php require_once('init.inc.php');?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Portfolio &mdash; Sylla Mohamadou</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/animate.css">
    <link rel="stylesheet" href="public/css/flexslider.css">
    <link rel="stylesheet" href="public/fonts/icomoon/style.css">
    <link rel="stylesheet" href="view/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">    
  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
  
 <!-- header -->
   <header>
   
    <nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        

          <?php if (userConnect()){ 
            ?>
            <a class="navbar-brand" href="connexion.php?action=deconnexion">Déconnexion</a>
            <a class="navbar-brand" href="view/admin/admin.php">Admin</a>
          <?php  } else { ?>
          <a class="navbar-brand" href="inscription.php">Inscription</a>
          <a href="<?= URL ?>connexion.php" class="navbar-brand"></i>Connexion</a>
          <?php } ?>
        

     
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#section-home">Acceuil</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-about">Apropos</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-competences">Competences</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-resume">Formation</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-resume">Experiences</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
     </header> <!--fin header -->


