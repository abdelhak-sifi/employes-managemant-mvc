<?php

/**
  Author Abdelhak SIFI
 **/
class EmployeesController {
	
	public function getAllEmployes(){
		$employes=Employee::getAll();
		return $employes; 
	}

	public function getEmploye($id){
		$employe=Employee::getByOne($id);
		return $employe; 
	}

	public function AddEmploye(){
		if(isset($_POST['submit'])){
			$data=[
				'nom'=>$_POST['nom'],
				'prenom'=>$_POST['prenom'],
				'matricule'=>$_POST['matricule'],
				'depart'=>$_POST['depart'],
				'poste'=>$_POST['poste'],
				'date_emb'=>$_POST['date_emb'],
				'statut'=>$_POST['statut']
			];
			$resultat=Employee::add($data);
			if($resultat===true){
				Session::set('success','Employé Ajouté');
				Redirect::to('?page=home');
			}else{
				echo $resultat;
			}
		}
	}

	public function updateEmploye($id){
		if(isset($_POST['submit'])){
			$data=[
				'id'=>$id,
				'nom'=>$_POST['nom'],
				'prenom'=>$_POST['prenom'],
				'matricule'=>$_POST['matricule'],
				'depart'=>$_POST['depart'],
				'poste'=>$_POST['poste'],
				'date_emb'=>$_POST['date_emb'],
				'statut'=>$_POST['statut']
			];
			$resultat=Employee::Update($data);
			if($resultat===true){
				Session::set('success','Employé Modefié');
				Redirect::to('?page=home');
			}else{
				echo $resultat;
			}
		}
	}

	public function deleteEmploye(){
		
			$data['id']=$_POST['id'];
			$resultat=Employee::Delete($data);
			if($resultat===true){
				Session::set('success','Employé Supprimé');
				Redirect::to('?page=home');
			}else{
				echo $resultat;
			}
		
	}

	public function findEmploye(){
		if(isset($_POST['search'])){
				$data=['search'=>$_POST['search']];
		}
		$employee=Employee::searchEmployee($data);
		return $employee; 
	}

	public function Logout(){
		session_destroy();
	}
}