<?php
  $user=new UserController();
  $user->Logout();	
  Redirect::to('?page=home');
?>