<?php
$id=$_POST['id'];
$data=new EmployeesController();
$employe=$data->getEmploye($id);

if(isset($_POST['submit'])){
    $newemp=new EmployeesController();
    $newemp->UpdateEmploye($id);
    
  }

?>
<!--Add BEGIN Container-->
<div class="container">
   <div class="row">
       <div class="col-md-8 mx-auto">
        <div class="card">
        <div class="card-header">Modifier un employé</div>
         <div class="card-body be-light">
            <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondry mr-2">
                <i class="fa fa-home"></i>
            </a>
            <form method="POST">
               
              <div class="mb-3">
                <label  class="form-label">Nom <span style="color :red">*</span></label>
                <input type="hidden" class="form-control" id="" name="id" value="<?php echo $employe['id'];?>">
                <input type="text" class="form-control" id="" name="nom" value="<?php echo $employe['nom'];?>">
              </div>
              <div class="mb-3">
                <label  class="form-label">Prénom <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="prenom" value="<?php echo $employe['prenom'];?>">
              </div>
              <div class="mb-3">
                <label  class="form-label">Matricule <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="matricule" value="<?php echo $employe['matricule'];?>">
              </div>
              <div class="mb-3">
                <label  class="form-label">Département <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="depart" value="<?php echo $employe['depart'];?>">
              </div>
              <div class="mb-3">
                <label  class="form-label">Poste <span style="color :red">*</span></label> 
                <input type="text" class="form-control" id="" name="poste" value="<?php echo $employe['poste'];?>">
              </div>
              <div class="mb-3">
                <label  class="form-label">Date Embauche <span style="color :red">*</span></label>
                <input type="date" class="form-control" id="" name="date_emb" value="<?php echo $employe['date_emb'];?>">
              </div>
              <div class="mb-3">
              <label  class="form-label">Status <span style="color :red">*</span></label>
              <select class="form-select" aria-label="Default select example" name="statut">
                <option value="0" <?php if($employe['statut']=='0')echo 'selected'?>>Inactive</option>
                <option value="1" <?php if($employe['statut']=='1')echo 'selected'?>>Active</option>
              </select>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Valide</button>
            </form>
        </div>
       </div>  
    </div>
   </div>
</div>
<!--Home END Container-->