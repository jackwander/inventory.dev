<?php
  switch($process){
    case '#':
      require_once '#.php';
      break;
    default:
      require_once 'stocks.php';
  }
?>
