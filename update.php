<?php
session_start();

if(isset($_POST['FirstName']) && !empty($_POST['FirstName']) || (isset($_POST['LastName']) && !empty($_POST['LastName'])) || isset($_POST['Email']) 
	&& !empty($_POST['Email']) || isset($_POST['Username']) && !empty($_POST['Username']) || isset($_POST['datee']) && !empty($_POST['datee']) || (isset($_POST['Gender'])
	 && !empty($_POST['Gender'])) || isset($_POST['pwd']) && !empty($_POST['pwd']) || isset($_POST['cpwd']) && !empty($_POST['cpwd']) || isset($_FILES['image']['name']) 
	&& !empty($_FILES['image']['name']) ) {
	$k=new mysqli('localhost','root',"",'woodoo');
	
$a=$_POST['FirstName'];
$b=$_POST['LastName'];
$c=$_POST['Email'];
$d=$_POST['Username'];
$e=$_POST['datee'];
$f=$_POST['Gender'];
$g=$_POST['pwd'];
$u=$_POST['cpwd'];
$l= $_FILES['image']['name'];
copy($_FILES['image']['tmp_name'],$_FILES['image']['name']);
$_SESSION['admin']=$_POST['id'];
$m="UPDATE register SET Email='$c',Username='$d',datee='$e',pwd='$g',cpwd='$u',image='$l' where Email='$c' ";
$w=$k->query( $m );

		header("LOCATION:usersite.php");}else{
		 header('LOCATION:usersite.php?error=0');
		}
	
	?>
	
