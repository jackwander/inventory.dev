<?php 
session_start();
include '../settings/config.php';
include '../classes/class.stocks.php';

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
  case 'new':
      newStock();
      break;
  case 'edit':
      editStock();
      break;
  case 'delete':
      deleteStock();
      break;
    default:
      header("location: ../index.php");
}  

function newStock() {
  $name = $_POST['name'];
  $loc = $_POST['location'];
  $desc = $_POST['desc'];
  $qty = $_POST['qty'];
  $price = $_POST['price'];
  $brand = $_POST['brand'];
  $year = $_POST['year'];

  $stocks = new Stock();

  $result = $stocks->new_stock($name,$loc,$desc,$qty,$price,$brand,$year);
  if($result){
    $_SESSION['result']="addsuc";
    header("location: ../index.php");
  }else{
    $_SESSION['result']="fail";
    header("location: ../index.php");
  } 
}

function editStock() {
  echo $id = $_POST['id'];
  echo $name = $_POST['name'];
  echo $loc = $_POST['location'];
  echo $desc = $_POST['desc'];
  echo $qty = $_POST['qty'];
  echo $price = $_POST['price'];
  echo $brand = $_POST['brand'];
  echo $year = $_POST['year'];
  
  $stocks = new Stock();
  
  $result = $stocks->edit_stock($id,$name,$loc,$desc,$qty,$price,$brand,$year);
  
  if($result){
    $_SESSION['result']="editsuc";
    header("location: ../index.php");
  }else{
    $_SESSION['result']="fail";
    header("location: ../index.php");
  }

}

function deleteStock() {
  $id = $_GET['id'];

  $stocks = new Stock();

  $result = $stocks->delete_stock($id);

  if($result){
    $_SESSION['result']="deletesuc";
    header("location: ../index.php");
  }else{
    $_SESSION['result']="fail";
    header("location: ../index.php");
  }
}
?>