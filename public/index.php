<?php
session_start();
/* DB Credentials. */
include('settings/config.php');
include('classes/class.users.php');
$user = new User();

if(!$user->get_session()){
	header("location: system/login.php");
} else {
  if ($_SESSION['position']=='admin') {
    header('location: admin/index.php');
  } else if ($_SESSION['position']=='user') {
    header('location: user/index.php');
  } else if ($_SESSION['position']=='company') {
    header('location: company/index.php');
  }
} 

if(isset($_GET['q'])){
	$user->user_logout();
	header("location: system/login.php");
}
?>
