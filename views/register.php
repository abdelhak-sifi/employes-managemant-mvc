<?php
  if(isset($_POST['submit'])){
	   $user=new UserController();
	   $user->register();	
}
?>
<div class="container">
   <div class="row">
       <div class="col-md-8 mx-auto">
       <?php include('views/includes/alerts.php'); ?>
        <div class="card">
         <div class="card-body be-light">
            <form method='POST'>
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    		</div>
			    	</div>
			        <div class="col-xs-6 col-sm-6 col-md-6">
			    	    <div class="form-group">
			    			<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    		</div>
			    	</div>
			    </div>

			           <div class="form-group">
			    			<input type="email" name="username" id="email" class="form-control input-sm" placeholder="User Name">
			    		</div>

			    		<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
			    					<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    				</div>
			    			</div>
			    		<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
			    					<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    				</div>
			    		 </div>
			    			</div>
			    			
			    <input type="submit" name='submit' value="Register" class="btn btn-info btn-block">
			    <div class="card-footer">
                    <a href="<?php echo BASE_URL.'?page=login'?>" class="btn btn-link">Login</a>
                </div>		
			</form>
        </div>
       </div>  
    </div>
   </div>
</div>
<!--Home END Container-->