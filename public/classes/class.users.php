<?php
class User{ 
  
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
  
  public function check_login($user,$password) {
    $pass = md5($password);
    $sql = "SELECT * FROM `tbl_users` WHERE `email`='$user' AND `password`='$pass'"; 
    $result = mysqli_query($this->db, $sql);
		$check=$this->db->query($sql)or 
			die(mysqli_connect_errno()."nd okay.");			
		$count_row=$check->num_rows;

    if($count_row>0) {
      while($row=mysqli_fetch_assoc($result)) {
        session_regenerate_id();
        $_SESSION['login']=TRUE;
        $_SESSION['user_id']=$row['user_id']; 
        $_SESSION['position']=$row['position'];
        return TRUE;
      }
    } else {
      return FALSE;
    }
  }

  public function new_user($fname,$mname,$lname,$email,$password,$position) {
    $pass = md5($password);
    $sql = "SELECT * FROM `tbl_users` WHERE `$email`='$email'";
    $result=mysqli_query($this->db, $sql);
    $count_row=$result->num_rows;

    if($count_row==0){
      $sql = "SELECT * FROM `tbl_users` WHERE `fname`='$fname' AND `mname`='$mname' AND `lname`='$lname'";
      $result=mysqli_query($this->db, $sql);
      $count_row=$result->num_rows;

      if($count_row==0){
        $sql="INSERT INTO `tbl_users` (`fname`,`mname`,`lname`,`email`,`password`,`position`)
        VALUES ('$fname','$mname','$lname','$email','$pass','$position')";
        $result=mysqli_query($this->db,$sql) or
        die(mysqli_connect_errno()."nd ma butang ang new user.");
        return $result;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function get_users() {
    $sql = "SELECT * FROM `tbl_users` ORDER BY `fname` ASC";
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

	public function get_session() {
		if($_SESSION['login'] == true) {
            return $_SESSION['login'];
        }else
            return false;
	}

	public function user_logout() {
		$_SESSION['login']=FALSE;
		session_destroy();
	}
}
?>
