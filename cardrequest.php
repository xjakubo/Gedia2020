<html>
<head>
	<meta charset='utf=8' />
	<title>Wniosek - karta obiegowa</title>
</head>
<body bgcolor="teal">

	<center>
	<br /><br /><br />
	
	<fieldset style="width: 500; background-color: white; border: 5px solid black">
		<h2>Wniosek o rejestrację karty obiegowej</h2>
		<form action='cardrequest.php' method='post'>
			<table>
				<tr>
					<td align="right">Imię:</td>   <td><input type='text' name='imie' /></td>
				</tr>
				<tr>
					<td align="right">Nazwisko:</td>   <td><input type='text' name='nazwisko' /></td>
				</tr>
				<tr>
					<td align="right">Numer:</td>   <td><input type='text' name='numer' /></td>
				</tr>
				<tr>
					<td align="right">Data zwolnienia:</td>   <td><input type='text' name='data' /></td>
				</tr>
			</table>
			<input type='submit' value='Złóż wniosek' /><br>
		</form>
	</fieldset>
	
	</center>
	
	
	<?php
	
	$NAZWANAZWANAZWANAZWANAZWA1 = $_POST['imie'];
	$NAZWANAZWANAZWANAZWANAZWA2 = $_POST['nazwisko'];
	$NAZWANAZWANAZWANAZWANAZWA3 = $_POST['numer'];
	$NAZWANAZWANAZWANAZWANAZWA4 = $_POST['data'];
	
	?>
	
	
	
	
</body>
</html>
