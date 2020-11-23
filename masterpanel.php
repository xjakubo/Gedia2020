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
				
				$mastername = $_SESSION['mastername']; 
				$dbcall = mysqli_query($connection, "SELECT workerid, `$mastername` from cards WHERE `$mastername` = 0");
				$result = mysqli_num_rows($dbcall);
				
				$ile = $result;

				$TABCARDS[$ile][2];
				$TABWORKER[$ile][4];
				
				for($i=0; $i<$ile; $i++)
				{
					$rowarray = mysqli_fetch_array($dbcall);
					for($j=0; $j<2; $j++)
					{
						$TABCARDS[$i][$j] = $rowarray[$j];
					}
				}
				
				for($i=0; $i<$ile; $i++)
				{
					$ok = $TABCARDS[$i][0];
					$dbcall2 = mysqli_query($connection, "SELECT gediaid, name, surname, retirementday from workers WHERE gediaid = $ok");
					$rowarray = mysqli_fetch_array($dbcall2);
					for($j=0; $j<4; $j++)
					{
						$TABWORKER[$i][$j] = $rowarray[$j];
					}
				}
				
				/*
				WARTOŚCI W TABLICACH OD TERAZ:
				
				TABCARDS:
				[0]: WORKERID
				[1]: CZY ROZLICZONO Z DZIAŁEM (0-1)
				
				TABWORKER:
				[0]: GEDIAID
				[1]: IMIE
				[2]: NAZWISKO
				[3]: DATA ZWOLNIENIA
				*/
				
				
				echo "<font size=5>";
					echo "<b>";
						echo "	Pozycje do rozstrzygnięcia ($ile):";
					echo "</b>";
				echo "</font>";
				echo "</br>";
				echo "</br>";
				
				
				echo "<form method='post' action='masterpanel.php'>";
					echo "<div id='requestslist'>";
						echo "<div id='up'>";
							
								for($i=0; $i<$ile; $i++)
								{
									echo "<fieldset style='width: 350'>";
									echo "<legend>".$TABWORKER[$i][1]." ".$TABWORKER[$i][2]."</legend>";
										echo "Numer: ".$TABWORKER[$i][0].", zwolniony(a): ".$TABWORKER[$i][3];
										
										echo "<div style='float: right'>";
										echo "<input type='checkbox' name='czekbox".($i+1)."' />";
										echo "</div>";
										
									echo "</fieldset>";
									echo "<br />";
								}
						echo "</div>"; //DIV UP
						
						echo "<div id='down' align='right'>";
							echo "<div id='buttons'>";
								echo "<input type='submit' name='accept' value='Zaakceptuj' style='display: block; width: 100%' />";
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
				
				for($i=0; $i<$ile; $i++)
				{
					if($checkboxtab[$i]=="on")$checkboxtab[$i]=1;
					else $checkboxtab[$i]=0;
				}
				
				
				//PĘTLA ZMIANY WARTOŚCI MASTERID
				for($i=0; $i<$ile; $i++)
				{
					if($checkboxtab[$i] == 1)
					{
						$nrworkera = $TABCARDS[$i][0];
						mysqli_query($connection, "UPDATE cards SET `$mastername` = 1 WHERE cards.workerid = $nrworkera")
						or die(mysqli_error($connection));
						header("Refresh:0");
					}
				}
				
			?>
		</div> <!--CONTENT-->
	</div> <!--CONTAINER-->

</body>
</html>