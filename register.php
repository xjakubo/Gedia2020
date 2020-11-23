<?php include('db/config.php');


  if($_GET['newuser'] == 'register' and $_POST['acctype'] == 'worker'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
    $gediaid = $_POST['gediaid'];
    $date = date('Y-m-d');
    mysqli_query($connection, "INSERT INTO workers (username, password, name, surname, gediaid, retirementday)
    VALUES('$username','$password','$firstname','$surname','$gediaid','$date')")
    or die(mysqli_error($connection));
    mysqli_query($connection, "INSERT INTO cards (workerid)
    VALUES('$gediaid')")
    or die(mysqli_error($connection));


  }
  if($_GET['newuser'] == 'register' and $_POST['acctype'] == 'master'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
    $masterid = $_POST['masterid'];

    mysqli_query($connection, "INSERT INTO masters (username, password, name, surname, masterid)
    VALUES('$username','$password','$firstname','$surname','$masterid')");

  }
?>
<html>
<head>
  <title>Rejestracja</title>
  <link rel="stylesheet" href = 'styles/registerstyle.css'>
  <script type = 'text/javascript'>
    function showmasterwindow()
    {
    var x = document.getElementsByName('masterid');
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
    }

  </script>
</head>
<body>
  <div class = 'registerform'>
<fieldset>
<form method = "post" action= 'register.php?newuser=register'>
Zarejestruj jako:
<br>
Kierownik: <input type="radio" name='acctype' value = "master"></input>
Pracownik: <input type="radio" onclick='showmasterwindow()'name='acctype' value = "worker"></input>
<br>
Login: <input type = 'text' name='username'></input>
<br>
Password: <input type = 'password' name='password'></input>
<br>
Imie: <input type = 'text' name = 'name'></input>
<br>
Nazwisko: <input type = 'text' name = 'surname'></input>
<br>
Numer pracownika: <input type = 'text' name = 'gediaid'></input>
<br>


Rodzaj uprawnienia:
<select name="masterid">
	<option selected value="0"></option> <!--Domyślna opcja zerowa, jeśli zaznaczyłeś przy rejestracji kierownik i wybierzesz tę opcję - error-->
	<option value="1">Dział Produkcji</option>
	<option value="2">Dział Logistyki</option>
	<option value="3">Dział Jakości</option>
	<option value="4">BHP</option>
	<option value="5">Dział Księgowości</option>
	<option value="6">Dział Utrzymania Ruchu</option>
	<option value="7">Biuro Zarządu</option>
	<option value="8">Dział Informatyki IT</option>
	<option value="9">Dział Kadr</option>
	<option value="10">Dział Zakupów</option>
	<option value="11">Administrator</option>
</select>

</fieldset>

<center><button type = "submit"> Zarejestruj się </button></center>

</div>
</form>
</body>

</html>
