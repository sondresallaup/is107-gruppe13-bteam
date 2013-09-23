<?php

session_start(); ?>

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

<?php echo "<h1>Velkommen til PCByggaren, ".$_SESSION['firstname']." ".$_SESSION['lastname']."</h1><br>"; ?>
<p>Dette er forsiden til prosjekt B-Team.<br> 
Her kommer funksjonalitet som skal gjøre det lettere for alle å bygge sin egen <br>stasjonære PC.
Prosjektet har en antatt ferdigstillingsdato den 30. oktober.<br>


</div>
</body>
</html>