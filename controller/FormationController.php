<?php

namespace controller;

class FormationController{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\FormationEntityRepository;
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
                $this->listFormation();
            }
            elseif( $op == 'new'){

                $this->saveFormation();
            }
            elseif( $op == 'delete'){

                $this->deleteFormation();
            }
            elseif( $op == 'show'){

                $this->showFormation();
            }
            elseif($op == 'update'){

                $this->updateFormation();
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
    public function listFormation(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $formations = $this->db->selectAll($orderby);

        include 'view/formations/formations.php';
    }
    //---------------------------------------------------------------------------------//
    public function saveFormation(){

		$title = 'Add new contact';

		$nomFormation= '';
		$date = '';
		$poste = '';
		$ville = '';

		if( $_POST ){

			$nomFormation = isset( $_POST['nomFormation']) ? $_POST['nomFormation'] : NULL;
			$date = isset( $_POST['date']) ? $_POST['date'] : NULL;
			$poste = isset( $_POST['poste']) ? $_POST['poste'] : NULL;
			$ville = isset( $_POST['ville']) ? $_POST['ville'] : NULL;
			

			try{
				$res = $this->db->insert();
				$this->redirect('form.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
		}
		include 'view/formations/formation-form.php';
	}
    //---------------------------------------------------------------------------------//
    public function deleteFormation(){
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if (!$id) {
            
            throw new Exception('Internal error.');
        }
        $res = $this->db->delete($id);

        $this->redirect('form.php');
    }
    //---------------------------------------------------------------------------------//
    public function showFormation(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $contact = $this->db->select($id);

		include 'view/formations/formation.php';
    }
//---------------------------------------------------------------------------------//

    public function updateFormation(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if(!$id){
            
            throw new Exception('Internal error.');
        }
        $contact = $this->db->select($id);

        $title = 'Add new contact';

		$nomFormation= '';
		$date = '';
		$poste = '';
		$ville = '';

		if( $_POST ){

			$nomFormation = isset( $_POST['nomFormation']) ? $_POST['nomFormation'] : NULL;
			$date = isset( $_POST['date']) ? $_POST['date'] : NULL;
			$poste = isset( $_POST['poste']) ? $_POST['poste'] : NULL;
			$ville = isset( $_POST['ville']) ? $_POST['ville'] : NULL;

			try{
				$res = $this->db->update($id);
				$this->redirect('form.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
        }

        
		include 'view/formations/editeFormation.php';

    }
}