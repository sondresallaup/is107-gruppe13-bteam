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
</head>

<?php
include_once "mysql_connect.php"
?>

<!-- Vises ved menyklikk "Min profil" ref index.php, endring i source i iframe ref funksjon i index.php. Funksjonalitet kommer. -->

<body>
<div id="content">


<?php if($_SESSION['loggedin']){

echo "<h1>".$_SESSION['firstname']." ".$_SESSION['lastname']."</h1>";
echo "<p>E-post-adresse: ".$_SESSION['email']."<br>
	Brukernavn: ".$_SESSION['username']."<br>
	Medlem siden ".$_SESSION['date']."<br>";
/*
<h1><img src="default_profile_pic.jpg" alt="Profilbildet" height="175" width="150" align="top">Navn på bruker</h1><br>
<p>Generell brukerinfo</p>
<p>PC Specs</p>
*/

}
?>



</div>
</body>
</html>