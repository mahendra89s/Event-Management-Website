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
		$mysql="insert into users (uid,fname,lname,pass,email ) select DISTINCT id,fname,lname,password,email from verification v WHERE NOT EXISTS (select uid,fname,lname,pass,email from users ve
              WHERE v.id = ve.uid)
		";
		$result1 = mysqli_query($conn, $mysql);
	echo "<script>alert('Please Log In!!');document.location='Login&sign.php'</script>";
	} else {
		$errorMessage = "Invalid OTP!";
	}	
} else if(empty($_POST["otp"])){
	$errorMessage = "Enter OTP!";	
}	
?>

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  
    <title>OTP Page</title>
    
    <style>
    
    body{
        background-color:#c1bdba;
    }
        #t1{
            margin-left:100px;
            margin-top:20px;
           
        }
        
        input[type=submit]{
            
            border-radius:0px;
            border: 0;
            width:25%;
            height:7%;
            background: #b71c1c;
             color: #ffffff;
             box-shadow: 2px 5px  40px black;
             font-size: 2rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            font-weight:bold;
        }
        
        
        input[type=text]{
            font-size: 22px;
  display: block;
  width: 50%;
  height: 5%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid white;
  color: #ffffff;
  border-radius: 0;
  outline:none;
 
        }
        
        #authenticateform{
             background-color:#263238;
             padding:1px 0px 20px 0px;
             margin:0 300px 0 300px;
             box-shadow: 5px 5px 10px;
            
        }
        #t2{
            margin-left:100px;
        }
        h4{
            text-align:center;
            color:red;
            font-size:20px;
        }
        @media only screen and (max-width: 800px) {
             #authenticateform{
             background-color:#263238;
             padding:1px 0px 20px 0px;
             margin:0 300px 0 25px;
             box-shadow: 10px 10px 30px;
             height:200px;
             width:300px;

        }
         #t2{
            margin-left:50px;
            padding:0 auto;
        }
         #t1{
            margin-left:40px;
            margin-top:50px;
           
        }
        h3{
            font-size:20px;
        }
         input[type=submit]{
            
            height:25px;
            font-size:10px;
        }
        input[type=text]{
            height:25px;
            font-size:10px;
 
        }
         body{
            background-color:#c1bdba;
        }
        }
    </style>
    
</head>
<body>
<div class="container">	
	<div class="col-md-12">   
	<h2 style="text-align:center;color:#263238;">Email Verification VIA OTP</h2>	
	</div>
	<div class="col-md-6" id="cont">                    
		<div class="panel panel-info" >
			
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><h4><?php echo $errorMessage; ?></h4></div>                            
				<?php } ?>
				<form id="authenticateform" class="form-horizontal" role="form" method="POST" action="">  					
					<div style="margin-bottom: 25px" class="input-group" id="t1">
						<label class="text-success" style="font-size:30px;color:white;"><h3><b>Check your email for OTP:</b></h3></label>
						<input type="text" class="form-control" id="otp" name="otp" placeholder="One Time Password" autocomplete="off" >                       
					</div>                          
					<div style="margin-top:10px" class="form-group" id="t2">                               
						<div   >
						  <input type="submit" name="authenticate" value="Submit" class="btn btn-success">						  
						</div>
					</div>                                
				</form>   
			</div>                     
		</div>  
	</div>
</div>	


</body>
<?php include('inc/footer.php');?>




  