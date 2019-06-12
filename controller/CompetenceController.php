<?php

namespace controller;

class CompetenceController{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\CompetenceEntityRepository;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){

        header('Location : '.$location);
    }
    //---------------------------------------------------------------------------------//
    public function handleRequest(){

        $op = isset($_GET['op']) ? $_GET['op'] : Null;

        try{

            if( !$op || $op == 'list'){
                $this->listCompetence();
            }
            elseif( $op == 'new'){

                $this->saveCompetence();
            }
            elseif( $op == 'delete'){

                $this->deleteCompetence();
            }
            elseif( $op == 'show'){

                $this->showCompetence();
            }
            elseif($op == 'update'){

                $this->updateCompetence();
            }
            else{

                $this->showError( "Page not found", 'Page for operation'. $op .'was not found.');
            }
        }
        catch(Exception $e){

            $this->showError("Application erro", $e->getMessage() );
        }
    }
    //---------------------------------------------------------------------------------//
    public function listCompetence(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $competences = $this->db->selectAll($orderby);

        include 'view/competences/competences.php';
    }
    //---------------------------------------------------------------------------------//
    public function saveCompetence(){

		$title = 'Add new contact';

		$name= '';
		$capacite = '';
		$photo = '';

		if( $_POST ){

			$name = isset( $_POST['name']) ? $_POST['name'] : NULL;
			$capacite = isset( $_POST['capacite']) ? $_POST['capacite'] : NULL;
			$photo = isset( $_POST['photo']) ? $_POST['photo'] : NULL;
			

			try{
				$res = $this->db->insert();
				$this->redirect('comp.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
		}
		include 'view/competences/competence-form.php';
	}
    //---------------------------------------------------------------------------------//
    public function deleteCompetence(){
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if (!$id) {
            
            throw new Exception('Internal error.');
        }
        $res = $this->db->delete($id);

        $this->redirect('comp.php');
    }
    //---------------------------------------------------------------------------------//
    public function showCompetence(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $contact = $this->db->select($id);

		include 'view/competences/competence.php';
    }
//---------------------------------------------------------------------------------//

    public function updateCompetence(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if(!$id){
            
            throw new Exception('Internal error.');
        }
        $contact = $this->db->select($id);

        $title = 'Add new contact';

		$name = '';
		$capacite = '';
		$photo = '';

		if( $_POST ){

			$name = isset( $_POST['name']) ? $_POST['name'] : NULL;
			$capacite = isset( $_POST['capacite']) ? $_POST['capacite'] : NULL;
			$photo = isset( $_POST['photo']) ? $_POST['photo'] : NULL;

			try{
				$res = $this->db->update($id);
				$this->redirect('comp.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
        }

        
		include 'view/competences/editeCompetence.php';

    }
}