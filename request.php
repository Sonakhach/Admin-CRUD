  
  <?php
//   session_start();
// 	if(!isset($_SESSION['admin'])){
// 	 header("location:registr.php?error=4");
// }
// 	$k=new mysqli('localhost','root',"",'woodoo');
// 	$w=$k->query("SELECT * FROM  register ");
// 	echo '<h1>'.'bari galust'.'&nbsp'.($_SESSION['admin']).'</h1>'.'<hr>';  
// while($y=mysqli_fetch_array($w)){	
// 	echo 'First Name  '.$y['FirstName']."<br>";
// 	echo 'Last Name '.$y['LastName']."<br>";	
// 	echo 'Նկար '.$y['image']."<br>";
// echo "<img style='width: 200px;	height:200px;' src='".$y['image']."'>"."<br>";
// echo "<hr>";

// }
 ?> 
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>

<body >
	<div class="col-lg-12 row" >
	<div  class="col-lg-6">
<?php
	session_start();
	if(!isset($_SESSION['admin'])){
	 header("location:registr.php?error=4");
}
	echo '<h1>'.'bari galust'.'&nbsp'.($_SESSION['admin']).'</h1>'.'<hr>';?>
	</div>
	<div class="col-lg-4 col-lg-offset-2   ">
        <a style="float:right;" href="login.php">ԴՈՒՐՍ ԳԱԼ</a>
<?php
	$c=new mysqli('localhost','root',"",'woodoo');
	
	$f=$c->query("SELECT * FROM  register ");
$z=0;
while($y=mysqli_fetch_array($f)){ $z++?>
	
	<a href="u1.php?id=<?php echo $y['id'] ?>">user<?php echo $z ?></a>
	
		
	<?php
}
 ?> 
	<!-- <div > -->
<?php
	
$f=$c->query("SELECT * FROM  register ");
while($y=mysqli_fetch_array($f)){
	echo 'Id  '.$y['id']."<br>";	
	echo 'Անուն  '.$y['FirstName']."<br>";
	echo 'Ազգանուն '.$y['LastName']."<br>";	
	echo 'Սեռը '.$y['Gender']."<br>";
	echo 'Նկար '.$y['image']."<br>";
	echo "<img style='width:200px;height:200px;' src='".$y['image']."'>";
	echo 'Ընկեր  '.$y['approved']."<br>";?>
 <form action="Approved.php" method="POST">
    <div class="radio">
    	<div>
       <label>send-friend-request </label>	
       </div>	
      <label><input type="radio" name="approved" value="1">Yes </label>
    </div>
    <div class="radio">
      <label><input type="radio" name="approved" value="0">No </label>
    </div>
    <div >
      <input type="submit" value="send">
    </div>
   
  </form>
 
	<?php

	echo "<hr>";

	
}
 ?> 
  	
    <!-- </div> -->

 
</div>


</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="request.js"></script>
</body>
</html>