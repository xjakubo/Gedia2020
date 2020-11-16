<?php
session_start();
?>
<html>
<head>
  <link rel = 'stylesheet' href = 'styles/loginstyle.css'>
</head>
<body>
  <?php if (empty($_SESSION['user'])) : ?>
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
  Login: <input type = 'text' name = 'login'></input>
  <br>
  Haslo: <input type = 'password' name = 'passwrd'></input>
  <br>
  <center><button type='submit'>Zaloguj</button></center>
</fieldset>
</form>
</div>
  <?php else : ?>
    <p>Zalogowano</p>
    <button><a href = 'logout.php'>Wyloguj sie</a></button>
  <?php endif; ?>
</body>


</html>
