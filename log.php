<?php 
 
    $servername = "localhost";
	$username = "id10875101_eventplanner";
	$password = "eventplanner";
	$dbname = "id10875101_event";
	
 
$con=mysqli_connect($servername,$username,$password,$dbname);
mysqli_select_db($con,$dbname);
session_start();
 
if(isset($_GET['email'])){
    
    $email=$_GET['email'];
    $pass=$_GET['pass'];
    $password = md5($pass); 
    $sql="select * from users where email='".$email."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['User']=$_GET['email'];
        header("location:landingpg.php");
    }
    else{
        echo "<script>alert('Incorrect Email or Password!!');document.location='Login&sign.php'</script>";
		
        exit();
    }
        
}
?>