<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/1ec2e96fdf.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>
    <title>ADMIN</title>
    <style>
             
    </style>
  </head>
  <body>
    <div class="main-container">
      <!--header -->
      <header class="header">
        <h2>ADMINISTRATION PANEL</h2>
      </header>
      <!--header -->

      <!--Navigation Bar side -->
      <div class="side-nav">
          <nav>
            <ul class="navbar-nav" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#dashboard">
                  <span><i class="fas fa-tachometer-alt"></i></span>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pay">
                  <span><i class="far fa-hourglass"></i></span>
                  <span>Payment</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#Fed">
                  <span><i class="far fa-comments"></i></span>
                  <span>Feedback</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#reply">
                  <span><i class="fas fa-reply-all"></i></span>
                  <span>Reply Queries</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
      <!--Navigation Bar side -->
      <div class="tab-content">
        <!--DashBoard content -->
        <div class="container tab-pane active" id="dashboard">
          <div class="panel">
            <div class="panel panel-info">
              <div class="panel-heading">Number Of Users</div>
              <div class="panel-body">
                               
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
				$sql="select count(*) as total from bookevent";
                $result=mysqli_query($con,$sql);
                $data=mysqli_fetch_assoc($result);
                echo $data['total'];
	            mysqli_close($con);
?>
 
              </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">Events Organized</div>
              <div class="panel-body">
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
				$sql="select count(DISTINCT eventtype) as total from bookevent";
                $result=mysqli_query($con,$sql);
                $data=mysqli_fetch_assoc($result);
                echo $data['total'];
	            mysqli_close($con);
?>
              </div>
            </div>
          </div>
        </div>
        <!--DashBoard content -->
            
       
        
<!-- Payment-->
<div class="container tab-pane fade" id="pay">

<div class="form-container" style="margin-top:0px;">
<table class="table table-bordered" >
<tr>
<th>Bid</th>
<th>Event Type</th>
<th>Eventplace</th>
<th>No. of Guests</th>
<th>Date</th>
<th>Equipment</th>
<th>Food</th>
<th>Light</th>
<th>Flowers</th>
<th>Chairs</th>
<th>Email</th>
</tr>
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


$sql = "SELECT `bid`, `eventtype`, `eventplace`, `no_guests`, `date`, `equip`, `food`, `light`, `flowers`, `chair`,`email` FROM `bookevent`  ";
$result=mysqli_query($con,$sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["bid"]. "</td><td>" . $row["eventtype"] . "</td><td>"
. $row["eventplace"]. "</td><td>" . $row["no_guests"]. "</td><td>" . $row["date"]. "</td><td>" . $row["equip"]. "</td><td>" . $row["food"]. "</td><td>" . $row["light"]. "</td><td>" . $row["flowers"]. "</td><td>" . $row["chair"]. "</td><td>" . $row["email"]. "</td></tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

?>
</table>

          </div>
         
        </div>

        <!-- Payment-->

        
        <!--Feedback -->
        <div class="tab-pane container fade" id="Fed">
          <div class="form-container" style="margin-top:0px;">
              <h1 style="margin-left:380px;font-size:50px;">USERS FEEDBACK:</h1><hr><br>
              
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
                       
                      echo "<div style='margin-left:370px;border:1px solid #333333;width:400px;text-align:left;font-size:20px;background-color:#D0D0D0;color:#121212;border-radius:10px;padding-left:10px;'><tr><td>".$row["name"]."</td><br><b>Email:</b><td>".$row["email"]."</td><br><b>Message:</b><td>".$row["txtMes"]."</td></tr></div><br><br>";
                    }
                    echo "</table>";
} else {
    echo "0 results";
}
	
	
	mysqli_close($con);
?>
          </div>
        </div>
        
        <!-- -->
         <!-- add event-->
        <div class="tab-pane container fade" id="reply">
          <div class="form-container" style="margin-left:150px;margin-top:0px;">
              
              <form id="form" role="form" action="reply.php" method="GET">
                    <h1>Send Reply To Users Through Email:</h1>
                    
                     <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br><br>
                     <textarea  name="mes" class="form-control" id="exampleFormControlTextarea1" placeholder="Comments" rows="3"></textarea><br><br>
                    
                    <button type="submit" name="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
          
        </div>

        <!-- add event-->

      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
