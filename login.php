
<?php
session_start();
include('db/config.php');
if (!empty($_POST['login']) && !empty($_POST['passwrd']) && !empty($_POST['acctype']))
{
    $login = $_POST['login'];
    $password = $_POST['passwrd'];
    $acctype = $_POST['acctype'];
    if($acctype == "worker")
    {
    $dbcall = mysqli_query($connection, "SELECT * FROM workers WHERE `username` = '$login' AND `password` = '$password'");
    $result = mysqli_num_rows($dbcall);
    if ($result == 0){
      echo 'zly login lub haslo!';
      header("Location: index.php");
      die();
    }
    $_SESSION['user'] = $_POST['login'];
    $_SESSION['account'] = $_POST['acctype'];
    header("Location: index.php");
  }
  if($acctype == "master")
  {
  $dbcall = mysqli_query($connection, "SELECT * FROM masters WHERE `username` = '$login' AND `password` = '$password'");
  $mastertype = mysqli_fetch_array($dbcall)['masterid'];
  echo $mastertype;
  $result = mysqli_num_rows($dbcall);
  if ($result == 0){
    echo 'zly login lub haslo!';
    header("Location: index.php");
    die();
  }
  $_SESSION['user'] = $_POST['login'];
  $_SESSION['account'] = $_POST['acctype'];
  $_SESSION['mastertype'] = $mastertype;
  switch($mastertype){
    case 1:
      $_SESSION['mastername'] = 'Dział Produkcji';
      break;
    case 2:
      $_SESSION['mastername'] = 'Dział Logistyki';
      break;
  }
  header("Location: index.php");
  }
}

/*
$login = 'login';
$haslo = 'test123';

require_once('db/db.php');

session_start();

if (!empty($_POST['login']) && !empty($_POST['passwrd']) && !empty($_POST['acctype']))
{
  echo var_dump($_POST);
  if ($_POST['login'] == LOGIN){
    if($_POST['passwrd'] == PASSWORD && $_POST['acctype'] == ACCTYPE)
    {
      $_SESSION['user'] = $_POST['login'];
      $_SESSION['account'] = $_POST['acctype'];
      echo 'dziala';
    }

  }
}
header('Location: index.php');
*/
?>
