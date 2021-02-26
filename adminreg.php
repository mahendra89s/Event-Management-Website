<?php
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$email = $_GET['email'];
	$pass1 = $_GET['pass'];
	$pass2 = $_GET['cpass'];
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
	if($pass1 == $pass2)
	{
	    $password = md5($pass1);
		$sql = "INSERT INTO `admin`(`fname`,`lname`, `email`, `pass`) VALUES('$fname','$lname','$email','$password');";
		if(mysqli_query($con,$sql))
		{
		echo "<script language='javascript'>alert('Registration Done')</script>";
		
		echo "<script>alert('Please Log In!!');document.location='admin_login.php'</script>";
		    
		}
		else
		{
		echo "<script language='javascript'>alert('Something went Wrong')</script>";
		}
	}else
	{
		echo "<script>alert('Password Not Match!!');document.location='admin_login.php'</script>";
		
	}
	
	mysqli_close($con);
?>