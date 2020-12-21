<?php 

/**
  Author Abdelhak SIFI
**/

 class Employee {
 	
 	static public function getAll(){
		$connect=DB::connect(); 
		$stmt=$connect->prepare('SELECT * FROM employes');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;

	 }
	
	 static public function getByOne($id){
		$connect=DB::connect(); 
		$stmt=$connect->prepare('SELECT * FROM employes where id='.$id);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
		$stmt = null;

	 } 
	 
	 static public function Add($data){
		$connect=DB::connect(); 
		$stmt=$connect->prepare('INSERT INTO employes (nom,prenom,matricule,depart,poste,date_emb,statut) values (:nom,:prenom,:matricule,:depart,:poste,:date_emb,:statut)');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':matricule',$data['matricule']);
		$stmt->bindParam(':depart',$data['depart']);
		$stmt->bindParam(':poste',$data['poste']);
		$stmt->bindParam(':date_emb',$data['date_emb']);
		$stmt->bindParam(':statut',$data['statut']);
		
		if($stmt->execute()){
              return true;    
		}else{
			return 'error no data inserted';
		}
        $stmt->close();
		$stmt = null;

	}

	static public function Update($data){
		$connect=DB::connect(); 
		$stmt=$connect->prepare('UPDATE employes SET nom=:nom,prenom=:prenom,matricule=:matricule,depart=:depart,poste=:poste,date_emb=:date_emb,statut=:statut WHERE id=:id');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':matricule',$data['matricule']);
		$stmt->bindParam(':depart',$data['depart']);
		$stmt->bindParam(':poste',$data['poste']);
		$stmt->bindParam(':date_emb',$data['date_emb']);
		$stmt->bindParam(':statut',$data['statut']);
		$stmt->bindParam(':id',$data['id']);
		
		if($stmt->execute()){
              return true;    
		}else{
			return 'error no data updated';
		}
        $stmt->close();
		$stmt = null;

	 }
	 
	 static public function Delete($data){
		$connect=DB::connect(); 
		$stmt=$connect->prepare('DELETE FROM employes WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		if($stmt->execute()){
			return true;    
	    }else{
		  return 'error no data updated';
	    }
	    $stmt->close();
	    $stmt = null;
	 }

	 static public function searchEmployee($data){
		$search=$data['search'];
		$connect=DB::connect(); 
		$query=$connect->prepare('SELECT * FROM employes WHERE nom LIKE ? OR prenom LIKE ?');
		$query->execute(array("%".$search."%","%".$search."%"));
		$results = $query->fetchAll();
	    if(count($results)>0){
            return $results ;
		}else{
			return 'error no data updated';
		}
        $query->close();
		$query = null;		
	}
	 

 } 