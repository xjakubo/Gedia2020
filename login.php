
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
  $rowarray = mysqli_fetch_array($dbcall);
  $result = mysqli_num_rows($dbcall);
    if ($result == 0){
      echo 'zly login lub haslo!';
      header("Location: index.php");
      die();
      }
  $_SESSION['user'] = $rowarray['name'];
  $_SESSION['mastertype'] = $rowarray['masterid'];
  $_SESSION['account'] = $acctype;
  switch($rowarray['masterid']){
    case 1:
      $_SESSION['mastername'] = 'Dział Produkcji';
      break;
    case 2:
      $_SESSION['mastername'] = 'Dział Logistyki';
      break;
	case 3:
      $_SESSION['mastername'] = 'Dział Jakości';
      break;
	case 4:
      $_SESSION['mastername'] = 'BHP';
      break;
	case 5:
      $_SESSION['mastername'] = 'Dział Księgowości';
      break;
	case 6:
      $_SESSION['mastername'] = 'Dział Utrzymania Ruchu';
      break;
	case 7:
      $_SESSION['mastername'] = 'Biuro Zarządu';
      break;
	case 8:
      $_SESSION['mastername'] = 'Dział Informatyki IT';
      break;
	case 9:
      $_SESSION['mastername'] = 'Dział Kadr';
      break;
	case 10:
      $_SESSION['mastername'] = 'Dział Zakupów';
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
