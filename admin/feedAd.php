<?php

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
				$sql="select * from ContactDetails ";
    
                $result=mysqli_query($con,$sql);
				if ($result->num_rows > 0) {
    // output data of each row
                while($row = $result->fetch_assoc()) {
                        echo "<b>Name:</b> " . $row["name"]. " || <b>Email:</b> " . $row["email"]. "||<b>Message:</b> " . $row["txtMes"]. "<br><br>";
                    }
} else {
    echo "0 results";
}
	
	
	mysqli_close($con);
?>