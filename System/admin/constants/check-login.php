<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
$myid = $_SESSION['myid'];
$myfname = $_SESSION['myfname'];
$mylname = $_SESSION['mylname'];
$myemail = $_SESSION['myemail'];
$mytitle = $_SESSION['mytitle'];
$myavatar = $_SESSION['avatar'];
$myrole = $_SESSION['role'];
	
$user_online = true;	
$myavatar = $_SESSION['avatar'];
}else{
$user_online = false;
}
?>