<?php require_once 'includes/header.php'; ?>



<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Add New User</li>
		</ol>
    
        <div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-plus"></i> Add Username</div>
			</div> <!-- /panel-heading -->
        </div>
        
        <div class="panel-body">        
            
        <form action="php_action/addUsername.php" method="post" class="form-horizontal" id="addUsernameForm">
					<fieldset>
						<legend>Add Username</legend>

						<div class="addUsenrameMessages"></div>			

						<div class="form-group">
					    <label for="username" class="col-sm-2 control-label">New Username</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
					    </div>
					  </div>
            </fieldset>
        </form>
                        
                        <form action="php_action/addPassword.php" method="post" class="form-horizontal" id="addPasswordForm">
					<fieldset>
						<legend>Add Password</legend>

						<div class="addPasswordMessages"></div>
					  <div class="form-group">
					    <label for="password" class="col-sm-2 control-label">New password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="cpassword" class="col-sm-2 control-label">Confirm Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
					    </div>
					  </div>
                        
                        <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					    	<input type="hidden" name="user_id" id="user_id" value="<?php echo $result['id'] ?>" /> 
					      <button type="submit" class="btn btn-success" data-loading-text="Loading..." id="changeUsernameBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes </button>
					    </div>
                            
					  </div>
					</fieldset>
				</form>
        </div>
    </div>
</div>

        
        
<?php require_once 'includes/footer.php'; ?>