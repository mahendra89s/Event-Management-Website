<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact Us</title>
    <style type="text/css">
      body{
        font-family: Trebuchet MS;


      }


      .navbar-brand{
        font-size: 40px;
        border:solid;
        border-radius: 10px;
        padding:5px;

      }

      .carousel {
          background-image: url("ui16.jpg");
          height:680px;
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }
      
      .fixed-top{
        background-color:#212121 !important;

      }

      .fixed-top.scrolled {
        background-color:#212121 !important;
        transition: background-color 200ms linear;

      }
      table {
border-collapse: separate;
width: 90%;
color: #588c7e;
font-family: monospace;
font-size: 17px;
text-align: center;
margin-top:200px;
margin-left:50px;
border: 1px solid black;
}
th {
background-color: #414141;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
     </style>
      </head>
  <body>
    <div class="parallax">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  scrolling-navbar">
    <a class="navbar-brand bg-gradient-success"  href="landingpg.php" id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()"> Event Planner </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link " href="landingpg.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eventbooking.html">Create Event</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="viewbooked.php">View Booked Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ServicePg/ServPage.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>

    </ul>
    
  </div>
  </nav>
  </div>
  
  <table >
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
	mysqli_select_db($con,$dbname);


	if(isset($_SESSION['User'])){


$e=$_SESSION['User'];

$sql = "SELECT `bid`, `eventtype`, `eventplace`, `no_guests`, `date`, `equip`, `food`, `light`, `flowers`, `chair`,`email` FROM `bookevent` where email='$e' ";
$result = $con->query($sql);

// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["bid"]. "</td><td>" . $row["eventtype"] . "</td><td>"
. $row["eventplace"]. "</td><td>" . $row["no_guests"]. "</td><td>" . $row["date"]. "</td><td>" . $row["equip"]. "</td><td>" . $row["food"]. "</td><td>" . $row["light"]. "</td><td>" . $row["flowers"]. "</td><td>" . $row["chair"]. "</td><td>" . $row["email"]. "</td></tr>";
}
echo "</table>";

}
$conn->close();
?>
</table>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function mouseOver() {
        document.getElementById("demo").style.color = "#607D8B";
          }

      function mouseOut() {
        document.getElementById("demo").style.color = "white";
          }

      $(function () {
        $(document).scroll(function () {
          var $nav = $(".fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });


      $(document).ready(function(){
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
              window.location.hash = hash;
            });
          }
        });
      });


      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="scroll-down.js"></script>

    </script>
  </body>
</html>
