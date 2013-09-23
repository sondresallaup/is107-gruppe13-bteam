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
		<li class="byggliste"><a href="#" onclick="enterGameren()"><img src="/img/gameren.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#" onclick="enterMediaguruen()"><img src="/img/mediaguruen.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#" onclick="enterNybegynneren()"><img src="/img/nybegynneren.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
</ul>

</div>

<div class="radio">
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script>
<?php // Query-variabler. SELVBYGGER
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
			echo '<form id="Hovedkort1" name="Hovedkort1" method="GET">';
			echo '<input type="radio" class="radio_button" name="hovedkort" value="'.$row['modell'].'"><a href="'.$row['link'].'" target="_blank">'.$row['modell'].'</a><br>';
			}
			?><br><br>';
<!-- Lærer meg jQuery, sjekker om radio blir valgt, output valg. -->			
	$('.radio_button').change(function() 
	{
	var valgt=$(this).val();
	$("#pinfo").html("Du valgte "+valgt+". Husk at hovedkortet utgjør din basis for kompabilitet.<br>Komponenter som vises videre vil være kompatible med dette valget.<br>"); 
	});
	
	
	}
	
</script>



</div>






</div>