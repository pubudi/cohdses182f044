<?php
session_start();
$time = $_SERVER['REQUEST_TIME'];
$timeout_duration = 10;
if (isset($_SESSION['FINAL']) && 
   ($time - $_SESSION['FINAL']) > $timeout_duration) {
    session_unset();
    session_destroy();
	session_start();
	header("Location:login.php");
	exit();
}
else if($_SESSION['FINAL'])
{
	echo '<h1>WELCOME TO MY WEB PAGE</h1>';
}
else
{
	header("Location:login.php");
}
?>