<?php
ob_start();
session_start();
if(isset($_SESSION['User'])) {
	session_destroy();
	unset($_SESSION['User']);
	header("Location:  index.html");
} else {
	header("Location: Login&sign.php");
}
?>