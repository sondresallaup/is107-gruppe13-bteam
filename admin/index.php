<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
<!-- class er .  id er # -->
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="teststyle.css">
<title>PC Byggaren admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>


<?php if($_SESSION['usertype']=="admin"): ?>

<!-- Hovedindex for webapplikasjon. -->


<!-- Funksjon for endring av source i iframe. -->
<script>
function updateLeggTil() {
	document.getElementById("iframewindow").src="leggtilkomponent.php"
}
function updateEndre() {
	document.getElementById("iframewindow").src="redigerkomponent.php"
}
function updateAdminEdit() {
	document.getElementById("iframewindow").src="registrer.php"
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
<iframe id="iframewindow" scrolling="no" src="admin.php" width="790"; height="600";></iframe>

<!-- Sidemeny, ingen funksjon ennÃ¥. -->
<div class="sidebar">
	<ul>
	<li><a href="#" onclick="updateLeggTil()"><abbr title="leggtil">Legg til komponenter</abbr></a></li><br>
	<li><a href="#" onclick="updateEndre()"><abbr title="endre">Endre/Fjerne komponenter</abbr></a></li><br>
	<li><a href="#" onclick="updateAdminEdit()"><abbr title="endre">Gjør admin</abbr></a></li><br>
	<li>Galleri</li><br>
	<li>PCer</li><br>
	<li>Innlegg</li><br>
	<li>Instillinger</li><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<li>Logg ut</li><br>
	</ul>
</div>


</div>

<?php endif; ?>
</body>
</html>