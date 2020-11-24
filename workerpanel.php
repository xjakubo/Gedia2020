<?php
include('db/config.php');
session_start();
?>
<html>
<head>
	<meta charset='utf=8' />
	<title>Karta Obiegowa</title>
	<link rel="stylesheet" href="styles\WPstyle.css">
</head>
<body>
	<br />
	<div id="content">
		<br />
		<div id="upper">
			<div id="upper_left">
				<td ><h1>Karta obiegowa</h1>
			</div>
			
			<div id="upper_right">
				<img src="img\logo.jpg" width=150 height=125 />
			</div>
			
			<div id="cleaner"></div>
		</div>
		

		<?php
			error_reporting(0);
			echo '<div id="dane">';			
				$GEDIAID = $_SESSION['gediaid'];
				$dbcall = mysqli_query($connection, "SELECT name, surname, gediaid, retirementday from workers WHERE gediaid = $GEDIAID");
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
			echo "</div>";
			
			echo "<br />";
			
			$dbcall2 = mysqli_query($connection,
			"SELECT `Dział Produkcji`, `Dział Logistyki`, `Dział Jakości`, `BHP`, `Dział Księgowości`, `Dział Utrzymania Ruchu`,
			`Biuro Zarządu`, `Dział Informatyki IT`, `Dział Kadr`, `Dział Zakupów` from cards WHERE workerid = $GEDIAID");
			$rowarray = mysqli_fetch_array($dbcall2);
			$podpisy[10];
			for($i=0; $i<10; $i++)
			{
				$podpisy[$i] = $rowarray[$i];
			}
		?>
		
		<div id="maintable">
			<center>
			<table cellspacing=0 cellpadding=3 width="680">
				<tr>
					<th>Dział</th>
					<th>Podpis osoby rozliczającej<br />kartę obiegową</th>
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
					<td align="center">
						<?php
							if($podpisy[0]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[1]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[2]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
				</tr>

				<tr><!--BHP-->
					<td>
						<b>BHP</b>
						<ul>
						<li>Odbiór odzieży, szafek oraz wydanych kluczy</li>
						<li>Inne</li>
						</ul>
					</td>
					<td align="center">
						<?php
							if($podpisy[3]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[4]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[5]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[6]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[7]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
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
					<td align="center">
						<?php
							if($podpisy[8]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
				</tr>

				<tr><!--DZIAŁ-ZAKUPÓW-->
					<td>
						<b>Dział Zakupów</b>
						<ul>
						<li>Telefon służbowy</li>
						<li>Inne</li>
						</ul>
					</td>
					<td align="center">
						<?php
							if($podpisy[9]==1)
							{
								echo "PODPISANO";
							}
							else
							{
								echo "*wymaga podpisu*";
							}
						?>
					</td>
				</tr>
			</table>
			</center>
		</div> <!--MAINTABLE-->

		<div id="bottomsigns">
			<div id="leftsigns">
				Data, podpis pracownika
				<br />
				<br />
				____________________
			</div>
			
			<div id="rightsigns">
				Data, podpis kierownika
				<br />
				<br />
				____________________
			</div>
			
			<div id="cleaner"></div>
		</div>
		
		<div id="footer">
			<!-- Dla jasności, nie mam bladego pojęcia co to znaczy, przekopiowałem to :x -->
			Rev.: 07.07.2015 PL
			<br />
			Strona 1 z 1
		</div>
	</div> <!--CONTENT-->
</body>
</html>
