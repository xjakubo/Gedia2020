<?php
include('db/config.php');
session_start();
?>
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
		
		<div style="padding: 5px;"></div> <!--DIV ODSTĘPOWY-->
		
		<div id="content">
			<?php
				error_reporting(0);
				
				$mastername = $_SESSION["mastername"]; 
				$dbcall = mysqli_query($connection, ""/*ZAPYTANIE O WORKERID, GDZIE MASTERNAME = 0, ISDONE NIE MA TU NIC DO RZECZY*/);
				//WORKERID BĘDZIE POTEM POWIĄZANE Z WORKERID W TABELI WORKERS, PRZEZ CO BĘDZIE MOŻNA WYCIĄGNĄĆ DANE PRACOWNIKA I JE WYŚWIETLIĆ NA LIŚCIE
				$result = mysqli_num_rows($dbcall);
				$ile = $result;
				
				$ubertablica[$result][2];
				
				for($i=0; $i<$result; $i++)
				{
					$rowarray = mysqli_fetch_array($dbcall);
					for($j=0; $j<2; $j++)
					{
						$ubertablica[$i][$j] = $rowarray[$j];
					}
				}
				//echo $ubertablica[3][1]."<br />"; ROBOCZE WYŚWIETLENIE TEGO CO WPADŁO DO UBERTABLICY
				
				echo "<font size=5>";
					echo "<b>";
						echo "	Pozycje do rozstrzygnięcia ($ile):";
					echo "</b>";
				echo "</font>";
				echo "</br>";
				echo "</br>";
				
				//PRZYKŁADOWE ZMIENNE, W REALU BĘDĄ TO
				//RZECZYWISTE, WYCIĄGNIĘTE Z TABELI DANE
				////////////////////////////////////
				$IMIE = "Jan";                    //
				$NAZWISKO = "Kowalski";           //
				$NR_PRACOWNIKA = "19";            //
				$DATA_ZWOLNIENIA = "01/01/2020";  //
				////////////////////////////////////
				
				
				echo "<form method='post' action='masterpanel.php'>";
					echo "<div id='requestslist'>";
						echo "<div id='up'>";
							
								for($i=0; $i<$ile; $i++)
								{
									echo "<fieldset style='width: 350'>";
									echo "<legend>$NAZWISKO $IMIE</legend>";
										echo "Numer: $NR_PRACOWNIKA, zwolniony(a): $DATA_ZWOLNIENIA";
										
										echo "<div style='float: right'>";
										echo "<input type='checkbox' name='czekbox".($i+1)."' />";
										echo "</div>";
										
									echo "</fieldset>";
									echo "<br />";
								}
						echo "</div>"; //DIV UP
						
						echo "<div id='down' align='right'>";
							echo "<div id='buttons'>";
								echo "<input type='submit' name='accept' value='Zaakceptuj' style='display: block; width: 100%	' />";
							echo "</div>";
						echo "</div>"; //DIV DOWN
						
					echo "</div>"; //DIV REQUESTSLIST
				echo "</form>";
						
						
				//TUTAJ TABLICA ZMIENNYCH, DO KTÓRYCH BĘDĄ TRAFIAŁY WARTOŚCI
				$checkboxtab[$ile];
				$prefix = "czekbox";
				$nazwa;
				for($i=0; $i<$ile; $i++)
				{
					$nazwa = $prefix.(string)($i+1);
					$checkboxtab[$i] = $_POST[$nazwa];
				}
				//I TERAZ MAMY TABLICĘ Z WARTOŚCIAMI POSZCZEGÓLNYCH CHECKBOXÓW, CO POMOŻE PODJĄĆ DECYZJE DLA POSZCZEGÓLNYCH POZYCJI
				//POSZCZEGÓLNE WARTOŚCI TABLICY PRZYJMUJĄ ALBO WARTOŚĆ ON, GDY ZAZNACZYMY CHECKBOX, ALBO NULL, GDY NIE ZAZNACZYMY.
				//PRZERÓBMY TO NA WARTOŚCI 0 LUB 1:
				
				for($i=0; $i<$ile; $i++)
				{
					if($checkboxtab[$i]=="on")$checkboxtab[$i]=1;
					else $checkboxtab[$i]=0;
				}
				//TERAZ CHECKBOXTAB MA WARTOŚCI CHECKBOXÓW: 1 - ZAZNACZONO, 2 - NIE ZAZNACZONO
			?>
		</div> <!--CONTENT-->
	</div> <!--CONTAINER-->

</body>
</html>