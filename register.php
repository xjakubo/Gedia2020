<?php include('db/config.php');


if($_GET['newuser'] == 'register'){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['name'];
  $surname = $_POST['surname'];

  mysqli_query($connection, "INSERT INTO workers (username, password, name, surname)
  VALUES('$username','$password','$firstname','$surname')");

}
?>
<html>
<head>
  <link rel="stylesheet" href = 'styles/registerstyle.css'>
</head>
<body>
  <div class = 'registerform'>
<fieldset>
<form method = "post" action= 'register.php?newuser=register'>
Login: <input type = 'text' name='username'></input>
<br>
Password: <input type = 'password' name='password'></input>
<br>
Imie: <input type = 'text' name = 'name'></input>
<br>
Nazwisko: <input type = 'text' name = 'surname'></input>
<br>

</fieldset>

<center><button type = "submit"> Zarejestruj się </button></center>

</div>
</form>
</body>

</html>
