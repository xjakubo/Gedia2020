<html>
<head>
	<meta charset='utf=8' />
	<title>Panel kierownika</title>
</head>
<body>

<form action='masterpanel.php' method='post'>
Ile zmiennych dostaliśmy (roboczo)<br />
<input type='text' name='zmienna1' /><br />
<input type='submit' value='Zbuduj listę z tyloma elementami' /><br>
</form>

<?php
error_reporting(0);
$zmienna1 = $_POST['zmienna1'];

echo "Lista pozycji do rozliczenia:<br />";
for($i=0; $i<$zmienna1; $i++)
{
	echo "[".($i+1)."] Karta pracownika X<br />";
}

?>

</body>
</html>
