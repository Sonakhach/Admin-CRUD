<?php
session_start();

if(isset($_POST['approved']) && !empty($_POST['approved']) ) {
	$k=new mysqli('localhost','root',"",'woodoo');
	
$v=$_POST['approved'];
$w=$k->query( "INSERT INTO register (approved) VALUES ('$v') where id=".$_SESSION['admin'] );
		header("LOCATION:request.php");}
	?>
	
