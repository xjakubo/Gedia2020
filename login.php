
<?php
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
?>
