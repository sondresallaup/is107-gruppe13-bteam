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


<!-- Vises ved menyklikk "Prosjekter" ref index.php, endring i source i iframe ref funksjon i index.php. Funksjonalitet kommer. -->


<body>
<div id="content">


<ul>
	<li class="top">Nyeste</li>
	<li class="top">Populære</li>
	<li class="top">Flest kommentarer</li>
	<li class="top">Pris</li>
	<li class="top">Dato</li>
	<li class="top">Søk</li>
</ul><br><br>


<p><img src="lol.jpg" alt="Prosj_bilde" height="125" width="120"><br>Info om Prosjekt og bruker + pris?</p><br>
<p>Dato lagt til - antall kommentarer(Link)</p><br><br>


<p><img src="lol.jpg" alt="Prosj_bilde" height="125" width="120"><br>Info om Prosjekt og bruker + pris?</p><br>
<p>Dato lagt til - antall kommentarer(Link)</p><br><br>


</div>
</body>
</html>