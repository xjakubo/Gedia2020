<?php

session_start();
$server_name = 'localhost';
$username = 'root';
$password = '';
$dbname = 'GEDIA';
$connection = mysqli_connect($server_name, $username, $password, $dbname);
if(!$connection)
{
  die('Blad laczenia z baza'.mysqli_connect_error());
}
/*

$sql = 'SELECT * FROM workers';

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}

echo 'done'

*/

?>
