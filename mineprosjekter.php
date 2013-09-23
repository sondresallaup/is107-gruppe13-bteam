<?php

session_start();
?>


<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
	<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PC Byggaren</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<script>
		function updateOpprettProsjekt(){
			document.getElementById("iframewindow").src="opprettprosjekt.php"
		}
	</script>

</head>

<?php
include_once "mysql_connect.php"
?>

<!-- Vises ved menyklikk "Mine Prosjekter" ref index.php, endring i source i iframe ref funksjon i index.php. Funksjonalitet kommer. -->

<body>
	<div id="content">

		<?php if($_SESSION['loggedin']){

		echo "<h1>".$_SESSION['firstname']." ".$_SESSION['lastname']." sine prosjekter</h1>";
		echo "<p>Mer kommer senere</p>";
		}
?>

	<a href="#" onclick="update=updateOpprettProsjekt()">Opprett nytt prosjekt</a>


</div>
</body>
</html>