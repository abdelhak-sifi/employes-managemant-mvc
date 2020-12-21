<?php

class UserController{

    public function register(){
        if(isset($_POST['submit'])){
            $options=['cost'=> 12];
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
			$data=[
				'fullname'=>$_POST['first_name'].' '.$_POST['last_name'],
				'username'=>$_POST['username'],
				'password'=>$password,
			];
			$resultat=User::add($data);
			if($resultat===true){
				Session::set('success','User Ajouté');
				Redirect::to('?page=login');
			}else{
				echo $resultat;
			}
		}
    }

    public function CheckLogin(){
        if(isset($_POST['submit'])){
            $options=['cost'=> 12];
			$data=['username'=>$_POST['username'],			];
            $resultat=User::CheckUser($data);
            //']);die();
            if($resultat['username']==$_POST['username'] && password_verify($_POST['password'],$resultat['password'])){
                $_SESSION['logged']=true;
                $_SESSION['username']=$resultat->username;
				Redirect::to('?page=home');
            }	
			else{
                Session::set('error','username or password not correct');
				echo Redirect::to('?page=login');
			}
		}
    }
}