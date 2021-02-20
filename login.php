<!DOCTYPE html>
<html>
<head>
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
	<title>login</title>
</head>
<body >
	<?php
session_start();
isset($_SESSION['admin'])	
?>
	<div class="container-fluid  " >
		<div class="first row col-lg-12">
			<div class="col-lg-2 col-lg-offset-5 marg-div">
				<H2 >
					LOGIN
				</H2>
				<a href="registr.php" class="text-secondary">Home/</a>
				<a href="login.php" class="text-warning">Login</a>
			</div>
			
		</div>	
			<div class="row col-lg-12 account-div ">
				<div class="col-lg-5 col-lg-offset-1">
					<h1 class="text-uppercase ">Login or create an account</h1>
					<p class="text-secondary"> New Customers</p>
					<hr>
					<p class="text-secondary">By creating an account with our stor,</p>					
						<a href="registr.php"><button type="button" class="btn btn-warning">Create an account</button></a>
				</div>	
				<div class="col-lg-5 account-divv ">
					
					<p class="text-secondary "> Registered Customers</p>
					<hr>
					<p class="text-secondary">If you have an account, please log in </p>
					<form action="user.php" method="POST">
						<div class="form-group">
   						   <label for="Username">Username*</label>
      						<input type="text" class="form-control" required="required"  name="Username">
   						 </div>
   						 <div class="form-group">
      						<label for="pwd">Password*</label>
   					   		<input type="password" class="form-control" required="required" name="pwd">
   						 </div>    					
     						 <label > Required  fields are marked*</label>
     						 <p></p>
    
   							 <button type="submit" class="btn btn-warning">LOGIN</button>
   							 <a>forget your password</a>
											
					</form>
				</div>	
			</div>
	</div>

</body>
</html> 