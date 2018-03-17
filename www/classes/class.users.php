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
    $sql = "SELECT * FROM `tbl_users` WHERE `username`='$user' AND `password`='$pass'"; 
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
