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
    <style media="screen">
      
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
                <a class="nav-link active" data-toggle="tab" href="#">
                  <span><i class="fas fa-users"></i></span>
                  <span>User Settings</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#AddEvent">
                  <span><i class="far fa-calendar-plus"></i></span>
                  <span>Add Events</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#">
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
                <a class="nav-link active" data-toggle="tab" href="#">
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
              <div class="panel-body">Panel Content</div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">Evets Organized</div>
              <div class="panel-body">Panel Content</div>
            </div>
          </div>
        </div>
        <!--DashBoard content -->

        <!-- add event-->
        <div class="tab-pane container fade" id="AddEvent">
          <div class="form-container">
            <form action="/action_page.php">
              
            </form>
          </div>
        </div>

        <!-- add event-->

        <!--Feedback -->
        <div class="tab-pane container fade" id="Fed">
          <div class="form-container">
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
          </div>
        </div>
        
        <!-- -->

      </div>
    </div>

  </body>
</html>
