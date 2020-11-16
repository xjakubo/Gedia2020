<html>
<head>
  <link rel = 'stylesheet' href = 'styles/loginstyle.css'>
</head>
<body>
<div class='loginform'>
<form action = '/login.php' method = 'post'>
<fieldset>
  <img src = 'img/Gedia-logo.png'></img>
  <br>
  <label> Zaloguj jako: </label>
  <br>
  <label><input type = 'radio' name = 'acctype' value = 'master'>Kierownik</label>
  <label><input type = 'radio' name = 'acctype' value = 'worker'>Pracownik</label>
  <br>
  Login: <input type = 'text' id = 'login'></input>
  <br>
  Haslo: <input type = 'password' id = 'passwrd'></input>
  <br>
  <center><button type='submit'>Zaloguj</button></center>
</fieldset>
</form>
</div>
<?php



?>
</body>


</html>
