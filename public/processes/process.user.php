<?php 
session_start();
include '../settings/config.php';
include '../classes/class.users.php';

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
  case 'new':
      newUser();
      break;
  case 'edit':
      editStock();
      break;
  case 'delete':
      deleteUser();
      break;
    default:
      header("location: ../index.php");
}  

function newUser() {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $position = $_POST['position'];

  $user = new User();

  $result = $user->new_user($fname,$mname,$lname,$email,$password,$position);
  if($result){
    $_SESSION['result']="addsuc";
    header("location: ../admin/index.php?act=users");
  }else{
    $_SESSION['result']="fail";
    header("location: ../admin/index.php?act=users");
  } 
}

function deleteUser() {
  $id = $_GET['id'];

  $user = new User();

  $result = $user->delete_user($id);

  if($result){
    $_SESSION['result']="deletesuc";
    header("location: ../index.php");
  }else{
    $_SESSION['result']="fail";
    header("location: ../index.php");
  }
}
?>