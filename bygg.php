<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="teststyle.css">
<title>PC Byggaren</title>
<meta charset="UTF-8">
</head>


<!-- Hovedfunksjonalitet på webapplikasjonen. Åpnes i ny fane via index.php. 
Kopi av meny og struktur ref index.php + intro. Funksjonalitet kommer -->


<!-- Funksjon for endring av source i iframe, kopi index.php. -->
<script>
function updateProfil(){
	document.getElementById("iframewindow").src="minprofil.php"
}

function updateProsjekt(){
	document.getElementById("iframewindow").src="prosjekt.php"
}

function updateKontakt(){
	document.getElementById("iframewindow").src="kontakt.php"
}
</script>


<body>
<div id="content">


<!-- Tittel. -->
<div class="header">	
	<h1><a id="header" href="index.php"><abbr title="Forside">PC Byggaren</abbr></a></h1>
</div>


<!-- Topp-menyen. Klikk menyvalg = execute funksjon for endring av iframe-source ref linje 15-27. -->
<div class="menutop">
	<ul>
	<li class="top"><a class="menu" href="#" onclick="updateProfil()"><abbr title="Min Profil">Min Profil</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateProsjekt()"><abbr title="Prosjekter">Prosjekter</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateKontakt()"><abbr title="Kontakt">Kontakt</abbr></a></li>
	<li class="top"><a class="menu" href="bygg.php" target="_blank"><abbr title="Bygg">Bygg</abbr></a></li>
</ul>
</div>


<!-- Hovedvindu for byggfunksjonalitet. Intro. Funksjon kommer. -->
<div class="infowindow">
	
	<h3 class="byggtekst">Bygg din PC<br></h3>
	<p class="byggtekst">Kort introduksjon til hvordan prosessen foregår og veilending <br>til hvordan oppnå
	best mulig resultat med PC-byggingen.</p><br>
	
	<p class="byggtekst">Her kommer stort ikon for 'BEGYNN Å BYGG'</p><br><br>
	
	<h4 class="byggtekst">Forms som dukker opp når ikon blir klikket/evt. ny side</h4>
	<li class="byggtekst">liste</li>
	<li class="byggtekst">liste</li><br><br>

	<h4 class="byggtekst">Forms</h4>
	<li class="byggtekst">liste</li>
	<li class="byggtekst">liste</li>
	<li class="byggtekst">liste</li>
</div>


<!-- Sidemeny, ingen funksjon ennå. -->
<div class="sidebar">
	<ul>
	<li>Profil</li><br>
	<li>Hovedkort</li><br>
	<li>Prosessor</li><br>
	<li>Harddisk</li><br>
	<li>Minne</li><br>
	<li>Grafikkort</li><br>
	<li>Strømforsyning</li><br>
	<li>Kabinett</li><br>
	<li>Tilbehør</li><br>
	<li>Prisforslag</li><br>
	</ul>
</div>


</div>
</body>
</html>