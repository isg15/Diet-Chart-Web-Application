<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Login</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet" type="text/css" 
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		  <div class="login-box">
			<div class="row">
			  <div class="col-md-6 login-left">
			    <h2>Login</h2><br>
				<form action="index.php" method="post">
				<?php include('errors.php'); ?>
				  <div class="form group">
				    <label><b>Username</b></label>
					<input type="text" name="user" class="form-control" required>
			      </div><br>
				  <div class="form group">
				    <label><b>Password</b></label>
					<input type="password" name="password" class="form-control" required>
			      </div><br>
				  <button type="submit" class="btn btn-primary" name="login_user">Login</button>
				</form><br>
				<p>
				Not a member yet? <a href="Signup.php">Sign up</a>
				</p>
			  </div>
			
				
			  </div>
			 </div>
			</div>
			
	</body>
	

</html>