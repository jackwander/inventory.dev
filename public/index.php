<?php
session_start();
/* DB Credentials. */
include('settings/config.php');
include('classes/class.users.php');
$user = new User();

if(!$user->get_session()){
	header("location: system/login.php");
} else  {
  header('location: '.$_SESSION['position'].'/index.php');
} 

if(isset($_GET['q'])){
	$user->user_logout();
	header("location: system/login.php");
}
?>
