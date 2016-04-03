 
<h1 class="page-header">Login</h1>

</div>
	<div class="row">
		<div class="col-md-5">
			<form action="/access/user_login" method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="username" class="form-control" >
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="form_action" value="Login" class="btn btn-primary">
			</form>
	    </div>
	  </div>

	


<h1 class="page-header">Register</h1>
<div class="row">
	<div class="col-md-5">
		<form action="/access/user_login" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" >
			</div>
			<div class="form-group">
				<label>Alias</label>
				<input type="text" name="alias" class="form-control" >
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" >
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label>Password Confirmation</label>
				<input type="password" name="password_conf" class="form-control">
			</div>
			<div class="form-group">
				<label>Date of Birth</label>
				<input type="date" name="date_of_birth" class="form-control" placeholder="mm/dd/yyyy">
			</div>
			<input type="submit" name="form_action" value="Register" class="btn btn-primary">
		</form>
	</div>
</div>	
  
 



