<?php

class Session{

    public static function set($type,$message){
            setcookie($type,$message,time()+5,"/");
    }

    public static function get(){

    }
}

?>