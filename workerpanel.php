<html>
<head>
	<meta charset='utf=8' />
	<title>Karta obiegowa</title>
	<link rel="stylesheet" href="styles\workerpanelCSS.css">
</head>
<body>
	<br />
	<center>
	
	<!--	
	DO ZROBIENIA:
	-formy
	-estetyka (CSSy, wyrównania, borderline etc.
	-określić nazwę pliku do wysłania danych (obecnie: XXXXXXXX.php)
	-daty
	
	Schemat nazw zmiennych: dla podpisów POD-dział (gdzie dział
	to rzeczownikowy skrót od nazwy działu, np. Dział Kadr - kadry,
	dla uwag: UWG-dział (zasada jak wyżej)
	
	
	-->
	<form method="post" action="XXXXXXXX.php">
	
	<table >
		<tr>
			<td width=700 ><h1>Karta obiegowa</h1></td>
			<td><img src="img\logo.jpg" width=150 height=130/></td>
		</tr>
	</table>
	<br />
	
	
	<br />

	<table cellspacing=0 cellpadding=3>
	<tr>
	<th>Dział</th>
	<th>Data</th>
	<th align="center">Podpis osoby rozliczającej<br />kartę obiegową</th>
	<th>Uwagi</th>
	</tr>
	
	<tr><!--DZIAŁ-PRODUKCJI-->
		<td>
		<b>Dział Produkcji</b>
			<ul>
			<li>Odbiór kłodki lockout, narzędzi</li>
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
			<li>Odbiór kluczy od biur oraz pomieszczeń, narzędzi</li>
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
	</center>
	






-

</body>
</html>
