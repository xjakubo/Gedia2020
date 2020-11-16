<html>
<head>
	<meta charset='utf=8' />
	<title>Karta obiegowa</title>
	<link rel="stylesheet" href="CSSy.css">
</head>
<body>
	<br />
	<center>
	
	<!--
	Konstrukcja rzędu:
	<td>Dział</td>
	<td>form text do wpisania daty</td>
	<td>form text do wpisania podpisu osoby rozliczającej</td>
	<td>form text do wpisania uwag</td>
	
	DO ZROBIENIA:
	-formy
	-estetyka (CSSy, wyrównania, borderline etc.
	-określić nazwę pliku do wysłania danych (obecnie: XXXXXXXX.php)
	-określić nazwy zmiennych
	-proponowany schemat zmiennych: data1, podpis1, uwagi1 - data10, podpis10, uwagi10
	-->
	
	
	<form method="post" action="XXXXXXXX.php">
	<table cellspacing=0 cellpadding=3>
	<tr>
	<th>Dział</th>
	<th>Data</th>
	<th align="center">Podpis osoby rozliczającej<br />kartę obiegową</th>
	<th>Uwagi</th>
	</tr>
	
	<tr><!--DZIAŁ-PRODUKCJI-->
		<td>
			<ul>
			<li>Odbiór kłodki lockout, narzędzi</li>
			<li>Odbiór kluczy od szafek przynależących do działu inne</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-LOGISTYKI-->
		<td>
			<ul>
			<li>Odbiór kluczy od wózków widłowych</li>
			<li>Odbiór kluczy od szafek przynależących do działu</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-JAKOŚCI-->
		<td>
			<ul>
			<li>Odbiór narzędzi pomiarowych</li>
			<li>Odbiór kluczy od szafek przynależących do działu</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--BHP-->
		<td>
			<ul>
			<li>Odbiór odzieży, szafek oraz wydanych kluczy</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-KSIĘGOWOŚCI-->
		<td>
			<ul>
			<li>Rozliczenie delegacji, zaliczek, pożyczek</li>
			<li>Odbiór kluczy od szafek przynależących do działu</li>
			<li>ZFŚS</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-UTRZYMANIA-RUCHU-->
		<td>
			<ul>
			<li>Odbiór kluczy od biur oraz pomieszczeń, narzędzi</li>
			<li>Odbiór kluczy od biur oraz pomieszczeń, narzędzi</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--BIURO-ZARZĄDU-->
		<td>
			<ul>
			<li>Odbiór karty kredytowej/paliwowej, kluczy do banku</li>
			<li>Rozliczenie auta służbowego</li>
			<li>Odbiór aparatu fotograficznego, kamery, nawigacje</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-INFORMATYKI-IT-->
		<td>
			<ul>
			<li>Odbiór sprzętu elektronicznego/komputerowego,<br />
			internetu mobilnego, pendrive oraz udostępnionych</br>
			kluczy</li>
			<li>Założenie blokad systemowych</li>
			<li>Odbiór kluczy od szafek przynależących do działu</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-KADR-->
		<td>
			<ul>
			<li>Rozliczenie ZFŚS</li>
			<li>Odbiór karty ewidencji czasu pracy</li>
			<li>Odbiór kluczy od szafek przynależących do działu</li>
			<li>Okulary przemysłowe</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	<tr><!--DZIAŁ-ZAKUPÓW-->
		<td>
			<ul>
			<li>Telefon służbowy</li>
			<li>Inne</li>
			</ul>
		</td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
		<td><input type="text" name="ABCDEFGH" /></td>
	</tr>
	
	
	</table>
	</form>
	</center>
	






-

</body>
</html>
