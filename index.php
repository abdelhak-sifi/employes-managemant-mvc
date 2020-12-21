<?php
require_once'./autoload.php';
require_once'./views/includes/header.php';
require_once'./controllers/HomeController.php';

$pages=['home','add','delete','update','register','login','logout'];

if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
	if (isset($_GET['page'])) {
		if(in_array($_GET['page'],$pages)){
			$page=$_GET['page'];
			HomeController::index($page);
		}
		else{
		  include('views/includes/404.php');
		}
	}else{
		HomeController::index('home');
	}
	require_once'./views/includes/footer.php';
}
else if(isset($_GET['page']) &&$_GET['page']=='register'){
	HomeController::index('register');
}
else{
    HomeController::index('login');
}

?>