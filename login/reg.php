<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
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
	   	$sql = $con->query("SELECT id FROM verification WHERE email='$email'");
			if ($sql->num_rows > 0) {
			echo "<script>alert('Email Already Taken!!');document.location='Login&sign.php'</script>";
			} else {
				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);
                $otp = rand(100000,999999);
				$hashedPassword = md5($pass1); 
               
               

				$con->query("INSERT INTO verification (fname,lname,email,password,isEmailConfirmed,token)
					VALUES ('$fname','$lname', '$email', '$hashedPassword', '0', '$token');
				
				
				");
				$con->query("INSERT INTO otp_exp(OTP,is_expired,created_at,email) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "','" . $email . "')
				
				");
                
                require 'PHPMailer/PHPMailer.php';
			    $mail = new PHPMailer();
                
                $mail->setFrom('EventPlanner@gmail.com','EventPlanner');
                $mail->addAddress($email, $fname);
                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = "
                    One Time Password for  authentication is:<br/><br/> $otp
                ";

                if ($mail->send()){
                    header("location:OTPpg.php");
                }
                else
                    $msg = "Something wrong happened! Please try again!";
			}
		
	}else
	{
		echo "<script>alert('Password Not Match!!');document.location='Login&sign.php'</script>";
		
	}
	
	mysqli_close($con);
?>