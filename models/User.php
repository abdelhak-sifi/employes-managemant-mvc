<?php 


class User{
    public static function add($data){
        $connect=DB::connect(); 
		$stmt=$connect->prepare('INSERT INTO users (fullname,username,password) values (:fullname,:username,:password)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':username',$data['username']);
		$stmt->bindParam(':password',$data['password']);
		
		if($stmt->execute()){
              return true;    
		}else{
			return 'error no user inserted';
		}
        $stmt->close();
		$stmt = null;
    } 

    public static function CheckUser($data){
        $username="'".$data['username']."'";
        $connect=DB::connect();
        $stmt=$connect->prepare("SELECT * FROM users WHERE username=".$username);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
		$stmt = null;
        
    }
}