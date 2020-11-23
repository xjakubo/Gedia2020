<?php
include('db/config.php');
session_start();
?>
<html>
<head>
	<meta charset='utf=8' />
	<title>Karta obiegowa</title>
	<link rel="stylesheet" href="styles\workerpanelCSS.css">
</head>
<body bgcolor="teal">
<br />

	<center>
		

	<fieldset style="width: 967; border: solid black; background-color: white">

		<form method="post" action="XXXXXXXX.php">

		<br />
		<table style="border-collapse: collapse;">
			<tr>
				<td width=700><h1>Karta obiegowa</h1></td>
				<td><img src="img\logo.jpg" width=150 height=125/></td>
			</tr>
		</table>
		<br />

		<?php
		error_reporting(0);
		echo "<fieldset style='width: 270' align='left'>";
			echo "<b>";
				
				$dbcall = mysqli_query($connection, "SELECT name, surname, gediaid, retirementday from workers");
				$rowarray = mysqli_fetch_array($dbcall);
				$tablica[4];
				for($i=0; $i<4; $i++)
				{
					$tablica[$i] = $rowarray[$i];
				}
				
				echo "Nazwisko: $tablica[0]<br />";
				echo "Imię: $tablica[1]<br />";
				echo "Numer: $tablica[2]<br />";
				echo "Data zwolnienia: $tablica[3]<br />";
			echo "</b>";
		echo "</fieldset>";
		echo "<br />";
		
			
		?>
		
		<table cellspacing=0 cellpadding=3>
			<tr style="text-align: center; border: 1px solid black; border-collapse: collapse">
				<th>Dział</th>
				<th>Data</th>
				<th align="center">Podpis osoby rozliczającej<br />kartę obiegową</th>
				<th>Uwagi</th>
			</tr>

			<tr><!--DZIAŁ-PRODUKCJI-->
				<td>
				<b>Dział Produkcji</b>
					<ul>
					<li>Odbiór kłódki lockout, narzędzi</li>
					<li>Odbiór kluczy od szafek przynależących do działu inne</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-produkcja" /></td>
				<td><textarea rows=7 cols=21 name="UWG-produkcja"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-LOGISTYKI-->
				<td>
					<b>Dział Logistyki</b>
					<ul>
					<li>Odbiór kluczy od wózków widłowych</li>
					<li>Odbiór kluczy od szafek przynależących do działu</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-logistyka" /></td>
				<td><textarea rows=7 cols=21 name="UWG-logistyka"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-JAKOŚCI-->
				<td>
					<b>Dział Jakości</b>
					<ul>
					<li>Odbiór narzędzi pomiarowych</li>
					<li>Odbiór kluczy od szafek przynależących do działu</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-jakosc" /></td>
				<td><textarea rows=7 cols=21 name="UWG-jakosc"></textarea></td>
			</tr>

			<tr><!--BHP-->
				<td>
					<b>BHP</b>
					<ul>
					<li>Odbiór odzieży, szafek oraz wydanych kluczy</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-bhp" /></td>
				<td><textarea rows=6 cols=21 name="UWG-bhp"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-KSIĘGOWOŚCI-->
				<td>
					<b>Dział Księgowości</b>
					<ul>
					<li>Rozliczenie delegacji, zaliczek, pożyczek</li>
					<li>Odbiór kluczy od szafek przynależących do działu</li>
					<li>ZFŚS</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-ksiegowosc" /></td>
				<td><textarea rows=8 cols=21 name="UWG-ksiegowosc"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-UTRZYMANIA-RUCHU-->
				<td>
					<b>Dział Utrzymania Ruchu</b>
					<ul>
					<li>Odbiór kluczy od biur oraz pomieszczeń, narzędzi</li>
					<li>Odbiór kluczy od szafek przynależących do działu</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-utrzymanie" /></td>
				<td><textarea rows=7 cols=21 name="UWG-utrzymanie"></textarea></td>
			</tr>

			<tr><!--BIURO-ZARZĄDU-->
				<td>
					<b>Biuro Zarządu</b>
					<ul>
					<li>Odbiór karty kredytowej/paliwowej, kluczy do banku</li>
					<li>Rozliczenie auta służbowego</li>
					<li>Odbiór aparatu fotograficznego, kamery, nawigacje</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-zarzad" /></td>
				<td><textarea rows=8 cols=21 name="UWG-zarzad"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-INFORMATYKI-IT-->
				<td>
					<b>Dział Informatyki IT</b>
					<ul>
					<li>Odbiór sprzętu elektronicznego/komputerowego,<br />
					internetu mobilnego, pendrive oraz udostępnionych</br>
					kluczy</li>
					<li>Założenie blokad systemowych</li>
					<li>Odbiór kluczy od szafek przynależących do działu</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-informatyka" /></td>
				<td><textarea rows=10 cols=21 name="UWG-informatyka"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-KADR-->
				<td>
					<b>Dział Kadr</b>
					<ul>
					<li>Rozliczenie ZFŚS</li>
					<li>Odbiór karty ewidencji czasu pracy</li>
					<li>Odbiór kluczy od szafek przynależących do działu</li>
					<li>Okulary przemysłowe</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-kadry" /></td>
				<td><textarea rows=8 cols=21 name="UWG-kadry"></textarea></td>
			</tr>

			<tr><!--DZIAŁ-ZAKUPÓW-->
				<td>
					<b>Dział Zakupów</b>
					<ul>
					<li>Telefon służbowy</li>
					<li>Inne</li>
					</ul>
				</td>
				<td><input type="text" name="DATA" /></td>
				<td><input type="text" name="POD-zakupy" /></td>
				<td><textarea rows=7 cols=21 name="UWG-zakupy"></textarea></td>
			</tr>
		</table>
		</form>

		<table>
			<tr>  <!-- Miejsce na fizyczny podpis nr 1 -->
				<td style="border: 1px solid white" width=600>Data, podpis Pracownika</td>
				<td style="border: 1px solid white">Data, podpis Pracownika Działu Kadr</td>
			</tr>
			<tr>  <!-- Najlepiej... najlepiej o tym nie mówmy -->
				<td style="border: 1px solid white"> </td>
				<td style="border: 1px solid white" align="center"> </td>
			</tr>
			<tr>  <!-- Miejsce na fizyczny podpis nr 2 -->
				<td style="border: 1px solid white">____________________</td>
				<td style="border: 1px solid white" align="center">____________________</td>
			</tr>
		</table>

	Rev.: 07.07.2015 PL<br />
	Strona 1 z 1
	</fieldset>

	</center>

</body>
</html>
