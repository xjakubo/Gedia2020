<?php
session_start();
?>
<html>
<head>
  <link rel = 'stylesheet' href = 'styles/indexstyle.css'>
</head>
<body>
  <?php if (!empty($_SESSION['user'])) : ?>
    <?php if($_SESSION['account'] == "worker") : ?>
      <div class = 'topbar'>
      <p class = 'credentials'>Witaj, <?=$_SESSION['user']?> </p>
      <button class = 'panelbtn'><a href = 'panel.php' target = 'UsableSpace'> Przejdz do Panelu</button>
      <button class = 'logoutbtn'><a href = 'logout.php'>Wyloguj sie</a></button>
      </div>
    <?php endif; ?>
    <?php if($_SESSION['account'] == "master") : ?>
      <div class = 'topbar'>
      <p class = 'credentials'>Witaj, <?=$_SESSION['user']?> Stanowisko: <?=$_SESSION['mastername']?></p>
      <button class = 'panelbtn'><a href = 'panel.php' target = 'UsableSpace'> Przejdz do Panelu</button>
      <button class = 'logoutbtn'><a href = 'logout.php'>Wyloguj sie</a></button>
    </div>

  <?php endif; ?>
    <hr>
    <iframe name = 'UsableSpace' width="100%" height="90%" style="border:1px solid black;">
    </iframe>
  <?php else : ?>
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
      <center>
      <button type='submit'>Zaloguj</button>
      <button><a href='/register.php'>Zarejestruj się</button>
      </center>
    </fieldset>
    </form>
    </div>

  <?php endif; ?>
</body>


</html>
