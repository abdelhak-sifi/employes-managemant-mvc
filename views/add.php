<?php
    if(isset($_POST['submit'])){
      $newemp=new EmployeesController();
      $newemp->AddEmploye();
    }        
?>
<!--Add BEGIN Container-->
<div class="container">
   <div class="row">
       <div class="col-md-8 mx-auto">
        <div class="card">
        <div class="card-header">Ajouter un employé</div>
         <div class="card-body be-light">
            <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondry mr-2">
                <i class="fa fa-home"></i>
            </a>
            <form method="POST">
              <div class="mb-3">
                <label  class="form-label">Nom <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="nom" placeholder="">
              </div>
              <div class="mb-3">
                <label  class="form-label">Prénom <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="prenom" placeholder="">
              </div>
              <div class="mb-3">
                <label  class="form-label">Matricule <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="matricule" placeholder="">
              </div>
              <div class="mb-3">
                <label  class="form-label">Département <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="depart" placeholder="">
              </div>
              <div class="mb-3">
                <label  class="form-label">Poste <span style="color :red">*</span></label> 
                <input type="text" class="form-control" id="" name="poste" placeholder="">
              </div>
              <div class="mb-3">
                <label  class="form-label">Date Embauche <span style="color :red">*</span></label>
                <input type="text" class="form-control" id="" name="date_emb" placeholder="">
              </div>
              <div class="mb-3">
              <label  class="form-label">Status <span style="color :red">*</span></label>
              <select class="form-select" aria-label="Default select example" name="statut">
                <option selected>Open this select menu</option>
                <option value="0">Inactive</option>
                <option value="1">Active</option>
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