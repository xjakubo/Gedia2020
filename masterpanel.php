<html>
<head>
	<meta charset='utf=8' />
	<title>Panel kierownika</title>
	
	<style>
		#container
		{
			width: 1030;
		}
			
		#naglowek
		{
			border: solid black 2px;
			background-color: white;
			padding: 3px;
		}
			
		#content
		{
			border: solid black 2px;
			background-color: white;
			padding: 10px;
		}
		
		#requestslist
		{
			width: 382;
		}
		
		#buttons
		{
			width: 90;
		}
		
		
	</style>
	
</head>
<body bgcolor="teal">

<div id="container">

	<div id="naglowek">
		<h1>Karty wymagające podpisu kierownika działu: (tu zmienna z nazwą działu)</h1>
	</div>
	
	<div style="padding: 5px;"></div>
	
	<div id="content">
		<?php
			error_reporting(0);
			$zmienna1 = 5; //TUTAJ POWINNA TRAFIĆ LICZBA OKRESLAJĄCA LICZBĘ REKORDÓW, JAKIE CZEKAJĄ NA ZATWIERDZENIE
			
			echo "<font size=5>";
			echo "<b>";
			echo "	Pozycje do rozstrzygnięcia ($zmienna1):";
			echo "</b>";
			echo "</font>";
			echo "</br>";
			echo "</br>";
			
			//PRZYKŁADOWE ZMIENNE, W REALU BĘDĄ TO
			//RZECZYWISTE, WYCIĄGNIĘTE Z TABELI DANE
			
			$IMIE = "Jan";
			$NAZWISKO = "Kowalski";
			$NR_PRACOWNIKA = "19";
			$DATA_ZWOLNIENIA = "01/01/2020";
			
			echo "<div id='requestslist'>";
				
				echo "<div id='up'>";
					echo "<form method='post' action='masterpanel.php'>";
						for($i=0; $i<$zmienna1; $i++)
						{
							//TUTAJ INSTRUKCJA WYŚWIETLANIA POJEDYNCZEJ POZYCJI,
							//IMIĘ, NAZWISKO, NUMER I DATA ZWOLNIENIA PRACOWNIKA
							//(ODPOWIEDNIE DANE ZWYCZAJNIE SELECTEM Z TABELI WORKERS)
							echo "<fieldset style='width: 350'>";
							echo "<legend>$NAZWISKO $IMIE</legend>";
								echo "Numer: $NR_PRACOWNIKA, zwolniony(a): $DATA_ZWOLNIENIA";
								
								echo "<div style='float: right'>";
								echo "<input type='checkbox' name='czekbox'".($i+1)."' />";
								echo "</div>";
								
							echo "</fieldset>";
							echo "<br />";
						}
				echo "</div>";
				
				
				echo "<div id='down' align='right'>";
					echo "<div id='buttons'>";
						echo "<input type='submit' name='accept' value='Zaakceptuj' style='display: block; width: 100%	' />";
						echo "<input type='submit' name='decline' value='Odrzuć' style='display: block; width: 100%	'/>";
					echo "</div>";
				echo "</div>";
				
				
			echo "</div>";

			
			echo "</form>";
			
		?>
		
	</div>
	
	
	
	
</div>




</body>
</html>