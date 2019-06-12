<?php
namespace controller;

class AdminController
{
    private $db;

    public function __construct()
    {
        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\CompetenceEntityRepository;
    }

    public function index(){
        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $competences = $this->db->selectAll($orderby);

        include 'view/Admin/tables.php';
    }
}