<?php require_once('inc/header.inc.php'); ?>
<?php require_once('inc/home.inc.php');?>
<?php require_once('inc/about.inc.php');?>

<?php

require_once 'Autoload.php';


$controller = new controller\CompetenceController();
$controller->handleRequest();

$controller = new controller\FormationController();
$controller->handleRequest();

$controller = new controller\ExperienceController();
$controller->handleRequest();


$controller = new controller\ContactController();
$controller->handleRequest();




?>





