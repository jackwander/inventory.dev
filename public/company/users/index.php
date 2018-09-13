<?php
  switch($process){
    case 'view':
      require_once 'viewuser.php';
      break;
    default:
      require_once 'users.php';
  }
?>
