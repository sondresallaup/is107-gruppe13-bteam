<?php

session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
<link rel="stylesheet" type="text/css" href="style.css">
<title>PC Byggaren</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<?php
include_once "mysql_connect.php"
?>

<!-- Startvindu for nettsiden (default source i iframe ref index.php), innhold: introduksjon til funksjonalitet. -->

<body>
<div id="content">

<?php echo "<h1>Velkommen til PCByggaren, <br>".$_SESSION['firstname']." ".$_SESSION['lastname']."</h1><br>"; 

if($_SESSION['loggedin']){
	if($_SESSION['id']<52){
	echo '<a>Vi har oppdatert brukerprofilen. Klikk <a href="oppdaterprofil.php">her for å oppdatere</a>';}

}
?>



<p>Dette er forsiden til prosjekt B-Team.<br> 
Her kommer funksjonalitet som skal gjøre det lettere for alle å bygge sin egen <br>stasjonære PC.
Prosjektet har en antatt ferdigstillingsdato den 30. oktober.<br>


	<!-- Search-input -->
		<form method="POST" action="search.php" method="POST">
			<li>Søk etter bruker (brukernavn kun støttet til nå)</li>
			<li><br><input type="text" name="search"></li>
			<li><input type="submit" value="søk"></li>
		</form>


</div>
</body>
</html>