<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
<title>PC Byggaren</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
<div id="content">


<!-- Start på veiledning -->
<h2 id="h1info">Start på veiledning</h1><br>
<p id="pinfo">Vennligst velg den brukerprofilen som passer deg best. </p>

<div id="bygglist">
<ul>
		<li class="byggliste"><a href="#" onclick="enterSelvbyggeren()"><img src="selvbyggeren.png" alt="Selvbyggeren" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#"><img src="gameren.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#"><img src="mediaguruen.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
		<li class="byggliste"><a href="#"><img src="nybegynneren.png"  alt="byggikon" width="75" height="75" class="byggimg"></a></li>
</ul>
</div>

<div class="radio">
<script>
function enterSelvbyggeren()
	{
	document.getElementById("h1info").innerHTML = 'Du har valgt selvbyggeren,<br>du vil nå få tilgang til et bredt utvalg <br>av komponenter.'
	document.getElementById("pinfo").innerHTML = 'Se forms nedenfor for komplett komponentseleksjon.<br><br>'
	document.getElementById("bygglist").innerHTML = '<?php 
	echo '<form name="Hovedkort" method="get">' .
		 '<input class="radio" type="radio" name="Hov" value="Intel">Intel<br>' .
		 '<input class="radio" type="radio" name="Hov" value="AMD">AMD<br>' .
		 '</form>'
			
			
			; ?>'
	}
</script>
</div>






</div>