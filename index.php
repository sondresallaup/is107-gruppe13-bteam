<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
<link rel="stylesheet" type="text/css" href="teststyle.css">
<title>PC Byggaren</title>
<meta charset="UTF-8">
</head>


<!-- Hovedindex for webapplikasjon. -->


<!-- Funksjon for endring av source i iframe. -->
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


<!-- Hovedvinduet embedded via iframe. -->
<iframe id="iframewindow" scrolling="no" src="forside.php" width="790"; height="600";></iframe>


<!-- GAMLE INFO VINDU! IKKE I BRUK!
<div class="infowindow">
	
	<p><img src="meg2.jpg" alt="Stian" border="1" height="151" width="214" align="top">Her kommer det tekst. <br><br><br>

	
	<h4>Utdanning</h4>
	<li>liste</li>
	<li>liste</li><br><br>

	<h4>Jobb</h4>
	<li>liste</li>
	<li>liste</li>
	<li>liste</li>
</div>-->


<!-- Sidemeny, ingen funksjon ennå. -->
<div class="sidebar">
	<ul>
	<li><br>// Når logget inn:</li>
	<li>Mine PC'er</li>
	<li>Mitt galleri</li>
	<li>Mine innlegg</li>
	<li>Instillinger</li><br>
	<li>Upload</li>
	<li>Forum</li><br><br>
	<li>Logg ut</li>
	</ul>
</div>


</div>
</body>
</html>