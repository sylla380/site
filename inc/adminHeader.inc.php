<?php require_once('init.inc.php');?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrateur</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- Page level plugin CSS-->
  <link href="<?= URL;?>public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= URL;?>public/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="admin.php">Administrateur</a>

  </nav>

  <div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="admin.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="TabCompetence.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Competences</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="TabExperience.php">
      <i class="fas fa-fw fa-table"></i
      <span>Experiences</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="TabFormation.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Formations</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="TabContact.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Contact</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo URL; ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Retour sur le site</span></a>
  </li>
  
</ul>