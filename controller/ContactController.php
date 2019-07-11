<?php

namespace controller;

class ContactController{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\ContactEntityRepository;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$op = isset( $_GET['op'] ) ? $_GET['op'] : NULL;

		try{
			if( !$op || $op == 'list'){
				$this->listContacts();
			}
			elseif( $op == 'new' ){
				$this->saveContact();
			}
			elseif( $op == 'delete' ){
				$this->deleteContact();
			}
			elseif( $op == 'show'){
				$this->showContact();
			}

			//-------------------------------------------------
			// COORECTION 
			//-------------------------------------------------
			elseif( $op == 'update'){				
				$this->updateContact();
			}
			else{
				$this->showError("Page not found", "Page for operation ". $op ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listContacts(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$contacts = $this->db->selectAll($orderby);

		include 'view/contacts/contacts.php';
	}
	//-------------------------------------------------
	public function saveContact(){

		$title = 'Ajouter nouvelle contact';

		$contact ='';
		$email ='';
		$tel ='';
		$reseau ='';
		

		if( $_POST) {

			$contact = isset($_POST['contact']) ? $_POST['contact'] : NULL;
			$email = isset($_POST['email']) ? $_POST['email'] : NULL;
			$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
			$reseau = isset($_POST['reseau']) ? $_POST['reseau'] : NULL;
			

			try{

				$res = $this->db->insert();
				$this->redirect('index.php');
				return;
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}
		include 'view/contacts/contact-form.php';
	}

	//-------------------------------------------------
	public function deleteContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( !$id ){

			throw new Exception('Internal error.');
		}
		$res = $this->db->delete($id);

		$this->redirect('index.php');
	}

	//-------------------------------------------------
	public function showContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( ! $id ){

			throw new Exception('Internal error.');
		}
		$contact = $this->db->select($id);

		include 'view/contacts/contact.php';
	}













	//-------------------------------------------------
	// COORECTION 
	//-------------------------------------------------
	public function updateContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;
		if( ! $id ){
			throw new Exception('Internal error.');
		}
		$contact = $this->db->select($id);



		$contact ='';
		$email ='';
		$tel ='';
		$reseau ='';
		


		if( $_POST) {

			$contact = isset($_POST['contact']) ? $_POST['contact'] : NULL;
			$email = isset($_POST['email']) ? $_POST['email'] : NULL;
			$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
			$reseau = isset($_POST['reseau']) ? $_POST['reseau'] : NULL;
			

			try{

				$res = $this->db->update($id);
				$this->redirect('index.php');
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}
		include 'view/contacts/modif-contact.php';
	}
}