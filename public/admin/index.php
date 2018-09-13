<?php
session_start();
/* DB Credentials. */
include('../settings/config.php');
include('../classes/class.stocks.php');
include('../classes/class.users.php');
/* Getter variables */
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';
$process = (isset($_GET['pro']) && $_GET['pro'] != '') ? $_GET['pro'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<?php include('../includes/head.php') ?>
</head>
<body>
<div class="header">
<?php include('../includes/navi.php') ?>
</div>

<?php include('../includes/modals.php') ?>

<div role="main" class="container">
<?php include('../includes/results.php') ?>
<?php
  switch($action){
    case 'edit':
      require_once '../includes/editstock.php';
      break;

    default:
      require_once '../stocks.php';
  }
?>  
</div>
</body>
<?php include('../includes/scripts.php') ?>
<script>window.jQuery || document.write('<script src="../assets/plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
</html>
