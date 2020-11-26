<?php include('db/config.php');
error_reporting(0);

  if($_GET['newuser'] == 'register' and $_POST['acctype'] == 'worker'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
    $gediaid = $_POST['gediaid'];
    $dbcall = mysqli_query($connection, "SELECT * FROM workers WHERE gediaid = '$gediaid'");
    $result = mysqli_num_rows($dbcall);
    if($result != 0){
      echo 'Takie konto juz istnieje!';
      die();
    }
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
    $dbcall = mysqli_query($connection, "SELECT * FROM workers WHERE username = '$username'");
    $result = mysqli_num_rows($dbcall);
    if($result != 0){
      echo 'Takie konto juz istnieje!';
      die();
    }
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
      var workerpanel = document.getElementById('workerpanel');
      var masterpanel = document.getElementById('masterpanel');
      workerpanel.style.display = 'none';
      masterpanel.style.display = "block";
    }
    function showworkerwindow()
    {
      var workerpanel = document.getElementById('workerpanel');
      var masterpanel = document.getElementById('masterpanel');
      workerpanel.style.display = "block";
      masterpanel.style.display = 'none';
    }

  </script>

  <style>
	#fuccgobacc
	{
		border: solid 3px;
		border-top: 0px;
		width: 140px;
		margin: auto;
		background-color: white;
		padding: 5px;
	}
  </style>

</head>
<body bgcolor="teal">
  <div class = 'registerform'>
	<div style="border: 3px solid; background-color: white; margin-top: -120px; padding: 10px;">
		<form method = "post" action= 'register.php?newuser=register'>
		<br />
		<center><div style="font-weight: bold; font-size: 20px">Zarejestruj jako:</div></center>
		<br />

		Kierownik: <input type="radio" onclick='showmasterwindow()' name='acctype' value = "master"></input>
		Pracownik: <input type="radio" onclick='showworkerwindow()'name='acctype' value = "worker"></input>
		<br>

		<table>
			<tr>
				<td style="text-align: right">Login:</td>
				<td><input type = 'text' name='username'></input></td>
			</tr>
			<tr>
				<td style="text-align: right">Hasło:</td>
				<td><input type = 'password' name='password'></input></td>
			</tr>
			<tr>
				<td style="text-align: right">Imię:</td>
				<td><input type = 'text' name = 'name'></input></td>
			</tr>
			<tr>
				<td style="text-align: right">Nazwisko:</td>
				<td><input type = 'text' name = 'surname'></input></td>
			</tr>
		</table>

		<br>
		<div id = 'workerpanel' style="text-align: center">
			Numer pracownika:<br /><input type = 'text' name = 'gediaid'></input>
		</div>

		<div id = 'masterpanel' style="text-align: center">
			Rodzaj uprawnienia:<br />
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
		</div>
		<br />
		<center><button type = "submit"> Zarejestruj się </button></center>
	</div>
	<div id="fuccgobacc"><a href="index.php">Powrót do logowania</a></div>
  </div>
</form>
</body>

</html>
