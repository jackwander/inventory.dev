<?php
/* DB Credentials. */
include('settings/config.php');

$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';
$process = (isset($_GET['pro']) && $_GET['pro'] != '') ? $_GET['pro'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD for inventory</title>
</head>
<body>
<div class="header">
<nav>
  <ul>
    <li>Stocks</li>
    <li>Add</li>
  </ul>
</nav>
</div>
<div class="container">
<?php
  switch($action){
    case 'add':
      require_once 'addstock.php';
      break;

    default:
      require_once 'stocks.php';
  }
?>  
</div>
</body>
</html>
