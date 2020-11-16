<?php
session_start();

if($_SESSION['account'] == 'worker'){
  header("Location: workerpanel.php");
}
if($_SESSION['account'] == 'master'){
  header("Location: masterpanel.php");
}



?>
