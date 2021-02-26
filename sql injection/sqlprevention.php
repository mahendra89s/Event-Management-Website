<!DOCTYPE html>
<html>
<head>
	<title>sql prevention</title>
</head>
<body>
	<form method="post" action="">
		<input type="text"  name="email" placeholder="Enter Username" required>
		<input type="password"  name="password" placeholder="Enter Password" required>
    	<br>
		<input type="submit" value="Login" name="submit" class="submitbtn">
	</form>

</body>
</html>
<?php
$servername = "localhost";
$username = "id10875101_eventplanner";
$password = "eventplanner";
$dbname = "id10875101_event";
$con=mysqli_connect($servername,$username,$password,$dbname)or die("cannot connect");


if(isset($_POST["submit"])){

	$pre_stmt =$con->prepare("SELECT * FROM user_info WHERE email=? AND password=?");
	$pre_stmt-> bind_param("ss",$_POST["email"],$_POST["password"]);
	$pre_stmt->execute();
	$result =$pre_stmt->get_result();

	if($result->num_rows > 0){
		$row=$result->fetch_assoc();
		echo $row["email"];
	} 
}
?>