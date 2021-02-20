
<?php
	session_start();
	$user_id = $_GET['id'];	
		
	$c=new mysqli('localhost','root',"",'woodoo');
$f=$c->query("SELECT * FROM  register where id=".$user_id );
 while($y=mysqli_fetch_array($f)){	
	echo 'First Name  '.$y['FirstName']."<br>";
	echo 'Last Name '.$y['LastName']."<br>";		
	echo 'Նկար '.$y['image']."<br>";
	echo "<img style='width: 200px;	height:200px;' src='".$y['image']."'>"."<br>";
	echo 'Ընկեր '.$y['approved']."<br>";
?>
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
	?>

<a href="send-friend-request.php?my_id=<?php echo ($_SESSION['admin'])?>&friend_id=<?php echo $user_id?>"   style="float:right;   cursor:pointer;margin-top:-40px;" > send friend request
 	
 </a>
  <?php
  
if(isset($_SESSION['admin']) && isset($user_id) ){

 $f=$c->query("SELECT * FROM  register where id=".$user_id."and id=".($_SESSION['admin']) );
 while($y=mysqli_fetch_array($f)){	
	
	echo 'Ընկեր '.$y['approved']."<br>";
    // header("LOCATION:u1.php");}else{
    //  header('LOCATION:request.php');
    }
  
  ?>
 
	<?php
	
	}

 ?> 

