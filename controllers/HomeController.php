<?php

/**
  Author Abdelhak SIFI
 **/
class HomeController {
	
	public static function index($page){
		include('views/'.$page.'.php');
	}
}