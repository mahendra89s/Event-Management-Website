<?php
$servername = "localhost";
$username = "id10875101_eventplanner";
$password = "eventplanner";
$dbname = "id10875101_event";
$con=mysqli_connect($servername,$username,$password,$dbname)or die("cannot connect"); 
$uid = $_POST["uid"];
$pid = $_POST["passid"];
$SQL = "SELECT * FROM inj WHERE email = '" .$uid. "' AND pass = '" .$pid. "'";

$result = mysqli_query($con,$SQL);


if($row=mysqli_fetch_array($result)){
echo "SUCCESSFULLY LOGGED IN";
}
else
  echo "Invalid user id or password";

?>


