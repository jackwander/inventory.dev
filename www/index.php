<?php
session_start();
/* DB Credentials. */
include('settings/config.php');
include('classes/class.stocks.php');
/* Getter variables */
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';
$process = (isset($_GET['pro']) && $_GET['pro'] != '') ? $_GET['pro'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD for inventory</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="header">
<?php include('includes/navi.php') ?>
</div>

<?php include('includes/modals.php') ?>

<div role="main" class="container">
<?php include('includes/results.php') ?>
<?php
  switch($action){
    case 'edit':
      require_once 'includes/editstock.php';
      break;

    default:
      require_once 'stocks.php';
  }
?>  
</div>
</body>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/plugins/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
