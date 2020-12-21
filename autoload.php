<?php 

require_once 'bootstrap.php';
session_start();
spl_autoload_register('autoload');

function autoload($class_name){
    $array_paths= [
    	'database/',
    	'app/classes/',
    	'controllers/',
    	'models/',
    ];

    $parts = explode('\\',$class_name);
    $name=array_pop($parts);

    foreach ($array_paths as $path) {
        $file=sprintf($path.'%s.php',$name);
        if (is_file($file)) {
            include_once $file;
        }
    }
}