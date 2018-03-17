<?php
session_start();
include '../settings/config.php';
include '../classes/class.users.php';
$user = new User();

if(isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $user->check_login($email,$password);
    if($login) {
        header("location: ../index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include('../includes/head.php') ?>
 <link href="signin.css" rel="stylesheet"> 
</head>

<body class="text-center">
  <form action="" METHOD="POST" class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; <?php echo date(Y); ?></p>
  </form>
</body>
</html>
