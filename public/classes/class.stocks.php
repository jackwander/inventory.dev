<?php
class Stock{

  public $db;
  /* constructor para mag connect sa database. */
  public function __construct() {
    $this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if(mysqli_connect_errno()){
      echo 'Error: Could not connect to Database';
      exit;
    }
  } 
  /* constructor para mag connect sa database. */

  public function view_stocks() {
    $sql = "SELECT * FROM `stockholders` ORDER BY `time_added` DESC, `date_added` DESC";
    $result=mysqli_query($this->db, $sql);
    $count_row=$result->num_rows;

    if($count_row>0){
      $result = mysqli_query($this->db, $sql);
      while($row=mysqli_fetch_assoc($result)){
        $type[]=$row;
      }
    }else{
      $type=0;
    }
    return $type;       
  }

  public function get_stock($id) {
    $sql = "SELECT * FROM `stockholders` WHERE `stock_id`='$id'";
    $result=mysqli_query($this->db, $sql);
    $count_row=$result->num_rows;

    if($count_row>0){
      $result = mysqli_query($this->db, $sql);
      while($row=mysqli_fetch_assoc($result)){
        $type[]=$row;
      }
    }else{
      $type=0;
    }
    return $type;       
  }

  public function new_stock($name,$loc,$desc,$qty,$price,$brand,$year) {
    $sql = "SELECT * FROM `stockholders` WHERE `stock_name`='$name' AND `stock_location`='$loc' AND `stock_description`='$desc' AND `stock_price`='$price' AND `stock_brand`='$brand' AND `stock_year`='$year'";    
    $result=mysqli_query($this->db, $sql);
    $count_row=$result->num_rows;
    
    if($count_row==0){
      $sql="INSERT INTO `stockholders` (`stock_quantity`,`stock_name`,`stock_location`,`stock_description`,`stock_price`,`stock_brand`,`stock_year`,`time_added`,`date_added`)
      VALUES ('$qty','$name','$loc','$desc','$price','$brand','$year',now(),now())";
      $result=mysqli_query($this->db,$sql) or 
      die(mysqli_connect_errno()."nd ma butang ang new stock.");
      return $result;
    }
    else{
      return false;
    }
  } 
  
  public function edit_stock($id,$name,$loc,$desc,$qty,$price,$brand,$year) {
    $sql = "SELECT * FROM `stockholders` WHERE `stock_id`='$id'";    
    $result=mysqli_query($this->db, $sql);
    $count_row=$result->num_rows;
    
    if($count_row>0){
      $sql="UPDATE `stockholders` SET `stock_name`='$name',`stock_location`='$loc',`stock_description`='$desc',`stock_price`='$price',`stock_quantity`='$qty', `stock_brand`='$brand', `stock_year`='$year' WHERE `stock_id`='$id'";
      $result=mysqli_query($this->db,$sql) or 
      die(mysqli_connect_errno()."nd ma edit ang stock.");
      return $result;
    }
    else{
      return false;
    }
  }

  public function delete_stock($id) {
    $sql = "DELETE FROM `stockholders` WHERE `stock_id`='$id'";
    $result = mysqli_query($this->db, $sql);
    $check=$this->db->query($sql)or 
      die(mysqli_connect_errno()."nd ma delete.");
    return $result;
  } 
}
?>
