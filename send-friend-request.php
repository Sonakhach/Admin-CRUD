<!-- useri ejum el mi hat link /send-friend-request?my_id={sender_id}&friend_id={user_id} 
(es user_id-n en verevi where-i user_id-na)
send-friend-request fayli mej el GET-ov stanum es user_id-n u sender_id-n u grancum es 
xosqi orinak friend_requests table-um
karelia mi hat el approved syunak pahel, vortex cuyc kta yndunel en zaprosy te che
u amen useri ejum karelia cuyc tal iran uxarkvac friend requestnery select * from 
friend_requests where friend_id={my_id} and approved='no' -->
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>

<body >
  <?php
  session_start();
  $my_id = $_POST['my_id']; 
  $friend_id = $_POST['friend_id']; 
if(isset($_GET['my_id']) && isset($_GET['friend_id']) ){
 $k=new mysqli('localhost','root',"",'woodoo');
 $a=
// $m="INSERT INTO register (approved) VALUES ('$  ')";
// $w=$k->query( $m );
    // header("LOCATION:u1.php");}else{
    //  header('LOCATION:send-friend-request.php');
    }
  
  ?>

<a style="float:right;" href="login.php">ԴՈՒՐՍ ԳԱԼ</a>
 <div class="form-group">
 						<form action=" Approved.php" method="POST">
   						   <label for="approved">Approved//@nkerutjan hraver
      						<select name="approved">
      							<option value=""></option>

      							<option value="0">0</option>
      							<option value="1">1</option>      							
      						</select>
      						</label>
      					</form>
      					 </div>

</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="request.js"></script>
</body>
</html>

 <?php
// 	session_start();
	
	
// 	if(isset($_GET['id'])) {echo $_GET['id'];	}
    

		
// // 	$c=new mysqli('localhost','root',"",'woodoo');
// // $f=$c->query("SELECT * FROM  register where id=".$user_id);

// //  // var_dump($f);
// //  while($y=mysqli_fetch_array($f)){	
// // 	echo 'First Name  '.$y['FirstName']."<br>";
// // 	echo 'Last Name '.$y['LastName']."<br>";	
// // 	echo 'Նկար '.$y['image']."<br>";
// // echo "<img style='width: 200px;	height:200px;' src='".$y['image']."'>"."<br>";
// // echo "<hr>";

// // 
	
// // 	}

 ?> 