<?php
  if(isset($_POST['submit'])){
	   $user=new UserController();
	   $user->CheckLogin();	
}
?>
<div class="container">
   <div class="row">
       <div class="col-md-8 mx-auto">
       <?php include('views/includes/alerts.php'); ?>
        <div class="card">
         <div class="card-body be-light">
            <!-- Default form login -->
<form method='POST' class="text-center border border-light p-5" >
   <p class="h4 mb-4">Sign in</p>

<!-- Email -->
<input type="text" name='username' id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" name='password' id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">



<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit" name='submit'>Login</button>

<!-- Register -->
<p>Not a member?
    <a href="<?php echo BASE_URL.'?page=register'?>">Register</a>
</p>
<!-- Social login -->
</form>
<!-- Default form login -->
        </div>
       </div>  
    </div>
   </div>
</div>
