<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$phno = $_GET['ph'];
	$txtMes = $_GET['txtMes'];
	
	// Database Connection code
	$servername = "localhost";
	$username = "id10875101_eventplanner";
	$password = "eventplanner";
	$dbname = "id10875101_event";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	            if(isset($_GET['submit'])) {
				$sql="CALL concd ('$name','$email', '$phno', '$txtMes')";
				
				if(mysqli_query($con,$sql)){
			    header('location:contactus.html');
				}else{ echo"Fail";}
	            }
	mysqli_close($con);			
?>