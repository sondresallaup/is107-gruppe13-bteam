<?php

session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
<title>PC Byggaren</title>
<meta http-equiv="Content-Type" content="text/html" charset=UTF-8" />
</head>

<?php
include_once "mysql_connect.php";
?>

<body>
<div id="content">


<!-- Start på veiledning -->
<h2 id="h1info">Start på veiledning</h1><br>
<p id="pinfo">Vennligst velg den brukerprofilen som passer deg best. </p>

<div id="bygglist">
<ul>
		<li class="byggliste"><a href="#" onclick="enterSelvbyggeren()"><img src="img/selvbyggeren.png" alt="Selvbyggeren" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#"><img src="/img/gameren.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#"><img src="/img/mediaguruen.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#"><img src="/img/nybegynneren.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
</ul>

</div>

<div class="radio">
<script>
<?php // Query-variabler.
$hovquery= "SELECT * FROM hovedkort";
$hovquery_run = mysql_query($hovquery);
$row = mysql_fetch_assoc($hovquery_run);
?>


<!-- Funksjon for å få forms til å dukke opp etter å ha trykket på ikon -->
function enterSelvbyggeren()
	{
	document.getElementById("h1info").innerHTML = 'Du har valgt selvbyggeren,<br>du vil nå få tilgang til et bredt utvalg <br>av komponenter.'; <!-- Edit header -->
	document.getElementById("pinfo").innerHTML = 'Se forms nedenfor for komplett komponentseleksjon.<br><br>'; <!-- Edit paragraf -->
	document.getElementById("bygglist").innerHTML = '<?php //Display mysqldata til radio buttons.
		while ($row = mysql_fetch_assoc($hovquery_run))
			{
			echo '<form name="Hovedkort1" method="GET">';
			echo '<input type="radio" name="hovedkort" value="'.$row['modell'].'"><a href="'.$row['link'].'" target="_blank">'.$row['modell'].'</a><br>';
			}
		echo '</form>';
		?><br><br>';
	}
</script>




</div>






</div>