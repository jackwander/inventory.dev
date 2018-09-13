<?php
  switch($process){
    case 'view':
      require_once 'view-user.php';
      break;
    default:
      require_once 'users.php';
  }
?>
