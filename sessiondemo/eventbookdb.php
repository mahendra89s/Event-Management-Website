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
	session_start();
	 
	if(isset($_SESSION['User'])){
	
	$email=$_SESSION['User'];
	$eventtype = $_GET['eventtype'];
	$eventplace = $_GET['eventplace'];
	$noguest = $_GET['noguest'];
	$date = $_GET['date'];
	$equi = $_GET['equi'];
	
	$food = $_GET['food'];
	
	$light = $_GET['light'];
	$flowers  = $_GET['flowers'];
	$chairs= $_GET['chairs'];
	
	
	
    
    if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	
	$eq="";  
    foreach($equi as $equi1)  
        {  
      $eq .= $equi1.",";  
        }  
        
    
    $foo="";  
    foreach($food as $food1)  
        {  
      $foo .= $food1.",";  
        } 
        
        
    $ch="";  
    foreach($chairs as $chairs1)  
        {  
      $ch .= $chairs1.",";  
        } 
    
    if(isset($_GET['submit'])){
        
    
	$con->query("INSERT INTO bookevent (eventtype,eventplace,no_guests,date,equip,food,light,flowers,chair,email)
					VALUES ('$eventtype', '$eventplace', '$noguest', '$date', '$eq', '$foo', '$light', '$flowers', '$ch','$email');");
    
    header("location:payment.php");
    }
					
	}

?>
