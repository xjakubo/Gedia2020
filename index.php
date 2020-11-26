<?php
session_start();
?>
<html>
<head>
  <title>Strona główna</title>
  <link rel = 'stylesheet' href = 'styles/indexstyle.css'>
  <style>
	#content
	{
		border: 3px solid;
		background-color: white;
		width: 225px;
		padding: 15px;
		margin-top: -120px;
	}

	#credentials
	{
		border: 3px solid;
		width: 500px;
		background-color: white;
		font-size: 20px;
		padding: 3px;
		text-align: center;
	}
  </style>
</head>
<body bgcolor="teal">
  <?php if (!empty($_SESSION['user'])) : ?>
    <?php if($_SESSION['account'] == "worker") : ?>
      <div class = 'topbar'>
      <div id='credentials' style="width: 350px">Witaj, <?=$_SESSION['firstname']?> </div>
      <button class = 'panelbtn'><a href = 'panel.php' target = 'UsableSpace'> Przejdz do Panelu</button>
      <button class = 'logoutbtn'><a href = 'logout.php'>Wyloguj sie</a></button>
      </div>
    <?php endif; ?>
    <?php if($_SESSION['account'] == "master") : ?>
      <div class = 'topbar'>
      <div id='credentials'>Witaj, <?=$_SESSION['user']?> Stanowisko: <?=$_SESSION['mastername']?></div>
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
    <div id="content">
	  <center>
		  <img src = 'img/Gedia-logo.png'></img>
		  <br />
		  <br />
		  <b>Zaloguj jako:</b>
		  <br>
		  <label><input type = 'radio' name = 'acctype' value = 'master'>Kierownik</label>
		  <label><input type = 'radio' name = 'acctype' value = 'worker'>Pracownik</label>
		  <br>
		  <b>Login:</b><input type = 'text' name = 'login'></input>
		  <br>
		  <b>Haslo:</b><input type = 'password' name = 'passwrd'></input>
		  <br>
		  <button type='submit'>Zaloguj</button>
		  <button><a href='/register.php'>Zarejestruj się</button>
      </center>
    </div>
    </form>
    </div>

  <?php endif; ?>
</body>
</html>
