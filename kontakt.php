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


<!-- Vises ved menyklikk "Kontakt" ref index.php, endring i source i iframe ref index.php. -->


<body>
<div id="content">


<!-- Intro -->
<p>Hei, vi er the B-Team! Gruppa som står bak dette prosjektet består av følgende:<br>
Emil Volckmar Ry, Kenneth Finnesand, Sondre Sallaup, Stian Killerud og Martin Othamar.<br>
Vi er bachelorstudenter i IT og Informasjonssystemer ved UiA og har valgt å lage <br>PCByggaren som et prosjekt i første semester.
Send oss en mail via skjemaet under<br> dersom du har spørsmål eller ønsker å gi tilbakemelding.<br><br>
</p>


<!-- Kontaktform, sendes mail til adresse oppgitt i mail-funksjon ref linje 33. -->
<?php
// Hvis form er fylt ut, execute PHP-kode for mail.
if (isset($_REQUEST['epost'])) {
	
	if(!$_SESSION['loggedin']){
	$navn = $_REQUEST['navn'];
	$epost = $_REQUEST['epost'];
	}
	else{
	$navn = $_SESSION['username'];
	$epost = $_SESSION['email']; }
	
	$emne = $_REQUEST['emne'];
	$melding = $_REQUEST['melding'];
	$fra = "From: $epost";
	mail("kontakt@kongeprosjekter.net", $emne,
	$melding, $fra);
	echo "Takk for at du brukte tjenesten vår, $navn.";
	}
else if($_SESSION['loggedin']){
	echo "<form method='post' action='kontakt.php'>
	Emne: <br><input name='emne' type='text'><br>
	Melding:<br>
	<textarea name='melding' rows='15' cols='40'>
	</textarea><br>
	<input type='submit'>
	</form>";
	}



else
// Hvis ikke, echo form i html. Kilde: http://www.w3schools.com/php/php_mail.asp
	{
	echo "<form method='post' action='kontakt.php'>
	Ditt navn: <br><input name='navn' type='text'><br>
	Din epostadresse: <br><input name='epost' type='text'><br>
	Emne: <br><input name='emne' type='text'><br>
	Melding:<br>
	<textarea name='melding' rows='15' cols='40'>
	</textarea><br>
	<input type='submit'>
	</form>";
	}
?>


</div>
</body>
</html>