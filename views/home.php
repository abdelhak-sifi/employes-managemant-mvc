<?php
    if(isset($_POST['find'])){
      $data=new EmployeesController();
      $employes=$data->findEmploye();
     
    }else{
      $data=new EmployeesController();
      $employes=$data->getAllEmployes();
    }
?>
<!--Home BEGIN Container-->
<div class="container">
   <div class="row">
       <div class="col-md-8 mx-auto">
       <?php include('views/includes/alerts.php'); ?>
        <div class="card">
         <div class="card-body be-light">
            <a href="<?php echo BASE_URL; ?>?page=add" class="btn btn-sm btn-primary mr-2">
                <i class="fa fa-plus"></i>
            </a>
            <a href="<?php echo BASE_URL; ?>?page=logout" title='Logout' class="btn btn-sm btn-primary mr-2">
                <i class="fa fa-logout"></i>
            </a>
            <form class="float-right d-flex flex-row" method="POST">
                  <input type="text" name="search" placeholder="Recherche">
                  <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fa fa-search"></i>
                  </button>
            </form>
          <table class="table table-striped table-hover">
           <thead>
           <tr>
             <th scope="col">ID</th>
             <th scope="col">Nom</th>
             <th scope="col">Prénom</th>
             <th scope="col">Matricule</th>
             <th scope="col">Département</th>
             <th scope="col">Poste</th>
             <th scope="col">Date Embauche</th>
             <th scope="col">Statut</th>
             <th scope="col">Action</th>
           </tr>
           </thead>
           <tbody>
            <?php foreach($employes as $employe):?>
                <tr>
                 <td scope="col"><?php echo $employe['id']?></td>
                 <td scope="col"><?php echo $employe['nom']?></td>
                 <td scope="col"><?php echo $employe['prenom']?></td>
                 <td scope="col"><?php echo $employe['matricule']?></td>
                 <td scope="col"><?php echo $employe['depart']?></td>
                 <td scope="col"><?php echo $employe['poste']?></td>
                 <td scope="col"><?php echo $employe['date_emb']?></td>
                 <td scope="col">
                    <?php if($employe['statut']=='1'):?>
                        Active
                    <?php else:?>
                        Inactive  
                    <?php endif; ?>
                 </td>
                 <td  width="2000">
                  <form action="?page=update" method="POST" class="mr-1" >
                    <input type="hidden" name="id" value="<?php echo $employe['id']?>">
                    <button class="btn btn-warning" ><i class="fa fa-edit"></i></button>
                  </form>
                  <form action="?page=delete" method="POST" class="mr-1" >
                    <input type="hidden" name="id" value="<?php echo $employe['id']?>">
                    <button class="btn btn-danger" ><i class="fa fa-trash"></i></button>
                  </form>
                 </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
         </table>
        </div>
       </div>  
    </div>
   </div>
</div>
<!--Home END Container-->