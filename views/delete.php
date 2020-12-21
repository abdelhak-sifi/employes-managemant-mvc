<?php

if(isset($_POST['id'])) :
   $data=new EmployeesController();
   $employe=$data->deleteEmploye();
else:
    header('Location:'.BASE_URL);  
endif; 
