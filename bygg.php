<?php

session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
<title>PC Byggaren</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<?php
include_once "mysql_connect.php"
?>

<!-- Hovedfunksjonalitet på webapplikasjonen. åpnes i ny fane via index.php. 
Kopi av meny og struktur ref index.php + intro. Funksjonalitet kommer -->


<body>
<div id="content">


<!-- Hovedvindu for byggfunksjonalitet. Intro. Funksjon kommer. -->
<div class="formwindow">
	
		<h3 class="byggtekst">Bygg din PC<br></h3>
		<p class="byggtekst">Her begynner byggefunksjonen. Start byggingen ved å trykke på ikonet!</p><br><br>
		<a href="byggstart.php"><img src="/img/bygg.png" class="byggikon" alt="byggikon" width="300" height="100"></a>	

</div>


</div>
</body>
</html>