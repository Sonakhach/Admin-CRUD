<?php
	session_start();
	
	$u=$_POST['Username'] ;
	$p=$_POST['pwd'];

		
	$c= new mysqli('localhost','root',"",'woodoo');
$f=$c->query("SELECT * FROM register "); 

While($y=mysqli_fetch_array($f)){
	
$a=$y['Username'];
$c=$y['pwd'];
	
	if ($a==$u AND $c==$p) {
		$_SESSION['admin']=$y['id'] ;header('location:usersite.php');}
		
	}
	if(!isset($_SESSION['admin'])){
	header('location:login.php?l=11');
}
if(isset($_POST['Username']) && empty($_POST['Username']) OR (isset($_POST['pwd']) && empty($_POST['pwd']))){
	header('location:login.php?l=1');
}

	
		



			
	
	
?>