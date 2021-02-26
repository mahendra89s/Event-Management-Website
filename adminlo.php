<?php 
 
    $servername = "localhost";
	$username = "id10875101_eventplanner";
	$password = "eventplanner";
	$dbname = "id10875101_event";
	
 
$con=mysqli_connect($servername,$username,$password,$dbname);
mysqli_select_db($con,$dbname);
 
if(isset($_GET['email'])){
    
    $email=$_GET['email'];
    $pass=$_GET['pass'];
    $password = md5($pass); 
    $sql="select * from admin where email='".$email."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("location:admin Demo/index.php");
    }
    else{
        echo "<script>alert('Incorrect Email or Password!!');document.location='admin_login.php'</script>";
		
        exit();
    }
        
}
?>