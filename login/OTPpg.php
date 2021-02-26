<?php 
    $conn= new mysqli('localhost', 'id10875101_eventplanner', 'eventplanner', 'id10875101_event');


$errorMessage = '';
if(!empty($_POST["authenticate"]) && $_POST["otp"]!='') {
	$sqlQuery = "SELECT * FROM otp_exp WHERE OTP='". $_POST["otp"]."' AND is_expired!=1 AND NOW() <= DATE_ADD(created_at, INTERVAL 1 MINUTE)";
	$result = mysqli_query($conn, $sqlQuery);
	$count = mysqli_num_rows($result);
	if(!empty($count)) {
		$sqlUpdate = "UPDATE otp_exp SET is_expired = 1 WHERE OTP = '" . $_POST["otp"] . "'";
		$result = mysqli_query($conn, $sqlUpdate);
		$mysql="insert into users (uid,fname,lname,email,pass ) select id,fname,lname,email,password from verification ";
			$result1 = mysqli_query($conn, $mysql);
	echo "<script>alert('Please Log In!!');document.location='Login&sign.php'</script>";
	} else {
		$errorMessage = "Invalid OTP!";
	}	
} else if(!empty($_POST["otp"])){
	$errorMessage = "Enter OTP!";	
}	
?>

<head>
    <title>OTP Page</title>
    
    
</head>
<body>
<div class="container">	
	<div class="col-md-12">   
	<h2>Email Verification VIA OTP</h2>	
	</div>
	<div class="col-md-6" id="cont">                    
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title" style="text-align:center;font-size:30px;">Enter OTP</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="authenticateform" class="form-horizontal" role="form" method="POST" action="">  					
					<div style="margin-bottom: 25px" class="input-group">
						<label class="text-success" style="text-align:center;font-size:30px;">Check your email for OTP:</label>
						<input type="text" class="form-control" id="otp" name="otp" placeholder="One Time Password" >                       
					</div>                          
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="authenticate" value="Submit" class="btn btn-success">						  
						</div>
					</div>                                
				</form>   
			</div>                     
		</div>  
	</div>
</div>	

<script>
    
</script>
</body>
<?php include('inc/footer.php');?>




  