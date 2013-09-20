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


<!-- Hovedindex for webapplikasjon. -->


<!-- Funksjon for endring av source i iframe. -->
<script>
function updateProfil(){
	document.getElementById("iframewindow").src="minprofil.php"
}

function updateProsjekter(){
	document.getElementById("iframewindow").src="prosjekter.php"
}

function updateKontakt(){
	document.getElementById("iframewindow").src="kontakt.php"
}

function updateBygg(){
	document.getElementById("iframewindow").src="bygg.php"
}
</script>


<body>
<div id="content">


<!-- Tittel. -->
<div class="header">	
	<h1><a href="http://kongeprosjekter.net/"><abbr title="Forside">PC Byggaren</abbr></a></h1>
</div>


<!-- Topp-menyen. Klikk menyvalg = execute funksjon for endring av iframe-source ref linje 15-27. -->
<div class="menutop">
	<ul>
	<li class="top"><a class="menu" href="#" onclick="updateProfil()"><abbr title="Min Profil">Min Profil</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateProsjekter()"><abbr title="Prosjekter">Prosjekter</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateKontakt()"><abbr title="Kontakt">Kontakt</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateBygg()""><abbr title="Bygg">Bygg</abbr></a></li>
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


<!-- Sidemeny, ingen funksjon ennÃ¥. -->
<div class="sidebar">
	<form action="login.php" method="POST">
	<ul>
	<li><br>Brukernavn: <input type="text" name="username">
	<li>Passord: <input type="password" name="password">
	
	<li><br>Når logget inn:</li>
	<li>Mine PC'er</li>
	<li>Mitt galleri</li>
	<li>Mine innlegg</li>
	<li>Instillinger</li><br>
	<li>Upload</li>
	<li>Forum</li><br><br>
	<li>Logg ut</li>
	</ul>
	</form>
</div>


</div>
</body>
</html>