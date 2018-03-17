<?php
session_start();
include '../settings/config.php';
include '../classes/class.users.php';
$user = new User();

if(isset($_REQUEST['submit'])){
    extract($_REQUEST);
    $login = $user->check_login($username,$password);
    if($login){
        echo "success";
        header("location: index.php");
    }else{
        echo '<script>alert("Wrong Username or Password!")</script>';
        }
}
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
  <form action="" METHOD="POST">
    <label>Username</label>
    <input type="text" name="username" required/>
    <label>Password</label>
    <input type="password" name="password" required/>
    <input type="submit" name="submit" value="Log-in" />
  </form>
</body>
</html>
