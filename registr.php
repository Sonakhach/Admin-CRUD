<!DOCTYPE html>
<html>
<head>
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style-reg.css">
	<title>register</title>
  <meta charset="utf-8">  
</head>
<body >
   <div >
<?php
session_start();


  if (isset($_GET['error'])){ echo 'ԼՐԱՑՐԵՔ ԴԱՇՏԵՐԸ';}
  
?>
</div>
	<div class="container-fluid  " >
		<div class="first row col-lg-12">
			<div class="col-lg-2 col-lg-offset-5 marg-div">
				<H2 >
					REGISTER 
				</H2>
				<a href="login.php" class="text-secondary">Home/</a>
				<a href="registr.php" class="text-warning">Register</a>
			</div>
			
		</div>	
			<div class="row col-lg-12 account-div ">
				<div class="col-lg-5 col-lg-offset-1">
					<h1 class="text-uppercase ">REGISTER ACCOUNT</h1>					
					<p class="text-secondary">By creating an account with our stor,</p>
					<hr>					
					<p class="text-secondary">Your Personal Details</p>
					<form action="baza.php" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
   						   <label for="First Name">First Name*</label>
      						<input type="text" class="form-control" required="required"  name="FirstName">
   						 </div>
   						 <div class="form-group">
   						   <label for="Last Name">Last Name*</label>
      						<input type="text" class="form-control" required="required"  name="LastName">
   						 </div>
   						 <div class="form-group">
   						   <label for="Email">Email*</label>
      						<input type="Email" class="form-control" required="required"  name="Email">
   						 </div>
   						 <div class="form-group">
   						   <label for="Username">Username*</label>
      						<input type="text" class="form-control" required="required"  name="Username">
   						 </div>
   						 <hr>
   						 <p>Your Address</p>
   						 <div class="form-group">
   						   <label for="DOB">DOB*</label>
      						<input type="date" class="form-control"   name="datee">
   						 </div>
   						 <div class="form-group">
   						   <label for="Gender">Gender*</label>
      						<select name="Gender">
      							<option value=""></option>

      							<option value="male">male</option>
      							<option value="female">female</option>      							
      						</select>
      					 </div>
      					 <hr>
      					 <p>Your Password</p>
   						 <div class="form-group">
      						<label for="pwd">Password*</label>
   					   		<input type="password" class="form-control" required="required" name="pwd">
   						 </div>    	
   						  <div class="form-group">
      						<label for="cpwd">Confirm Password*</label>
   					   		<input type="password" class="form-control" required="required" name="cpwd">
   						 </div>                
     						 <p > Required  fields are marked*</p>   
                      <div class="form-group">
                        <img src="avatar.png" class="avatar_div">                 
                        <input type="file" class=" avatar_div1"  name="image" value="APLOAD AVATAR" >
                     </div>	
                     <input type="submit" value="Create an account">					     									
						<!-- <button type="button" class="btn btn-warning text-uppercase form-control ">Create an account</button>						 -->
					</form>
				</div>	
				<div class="col-lg-5 account-divv ">
					
					<p class="text-secondary "> Registered Customers</p>
					<hr>
					<p class="text-secondary">If you have an account, please log in </p>
					<form action="user.php" method="POST">
						<div class="form-group">
   						   <label for="Username">Username*</label>
      						<input type="text" class="form-control"   name="Username">
   						 </div>
   						 <div class="form-group">
      						<label for="pwd">Password*</label>
   					   		<input type="password" class="form-control"  name="pwd">
   						 </div>    					
     						 <label > Required  fields are marked*</p>
     						 <p></p>
    
   							 <button type="submit" class="btn btn-warning">LOGIN</button>
   							 <label>forget your password</label>
											
					</form>
				</div>	
			</div>
     
	</div>

</body>
</html> 