<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>usersite</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="usersite.css">
</head>
<body>
<a style="float:right; margin-right: 20px; " href="login.php">ԴՈՒՐՍ ԳԱԼ</a>
<a style="float:right; margin-right: 20px; " href="request.php">friend</a>

<div class="col-lg-12 row" >
	<div  class="col-lg-6">
<?php
	session_start();
	if(!isset($_SESSION['admin'])){
	 header("location:registr.php?error=4");
}
	$k=new mysqli('localhost','root',"",'woodoo');
	$w=$k->query("SELECT * FROM  register ");
	echo '<h1>'.'bari galust'.'&nbsp'.($_SESSION['admin']).'</h1>'.'<hr>';?>
	</div>
	<div class="col-lg-4 col-lg-offset-2   ">
        	<p class="text-secondary">   <ins >Update >>></ins>  Your Personal Details</p>
					<form action="update.php" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
   						    <label for="First Name">First Name*</label>
      						<input type="text" class="form-control" id="First Name"   name="FirstName">
                           										 

   						 </div>
   						 <div class="form-group">
   						   <label for="Last Name">Last Name*</label>
      						<input type="text" class="form-control" id="Last Name"    name="LastName">
                   											 

   						 </div>
   						 <div class="form-group">
   						   <label for="Email">Email*</label>
      						<input type="Email" class="form-control"  for="Email" required="required"   name="Email">
                   													 

   						 </div>
   						 <div class="form-group">
   						   <label for="Username">Username*</label>
      						<input type="text" class="form-control" for="Username" required="required"  name="Username">
                   														 

   						 </div>
   						 <hr>
   						 <p>Your Address</p>
   						 <div class="form-group">
   						   <label for="DOB">DOB*</label>
      						<input type="date" class="form-control" for="DOB" required="required"  name="datee">
                   													 

   						 </div>
   						 <div class="form-group">
   						   <label for="Gender">Gender*</label>
      						<select name="Gender"   id="Gender">
      							<option value=""></option>
      							<option value="male">male</option>
      							<option value="female">female</option>      							
      						</select>
                   													 

      					 </div>
      					 <hr>
      					 <p>Your Password</p>
   						 <div class="form-group">
      						<label for="pwd">Password*</label>
   					   		<input type="password" class="form-control" id="pwd" required="required"   name="pwd">
                   												 

   						 </div>    	
   						  <div class="form-group">
      						<label for="cpwd">Confirm Password*</label>
   					   		<input type="password" class="form-control" id="cpwd" required="required"  name="cpwd">
                   												 

   						 </div>                
     						 <p > Required  fields are marked*</p>   
                      <div class="form-group">
                        <img src="avatar.png" class="avatar_div">                 
                        <input type="file" class=" avatar_div1"  name="image" required="required"  value="APLOAD AVATAR" >
                     </div>	
                     <input type="submit" value=" update account">											 
					</form>      
    </div>

  
</div>


</body>

</html>