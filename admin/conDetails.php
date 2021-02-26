<?php
    
	$name = $_GET['name'];
	$email = $_GET['email'];
	$ph = $_GET['ph'];
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
	
	   

				$con->query("INSERT INTO ContactDetails (name,email,phno,txtMes)
					VALUES ('$name','$email', '$ph', '$txtMes');
				
				");
			    header("location:contactus.html");
            
	
	mysqli_close($con);
?>