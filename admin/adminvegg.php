<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Refresh" 
content="0; URL=admin.php">
</head>
<body>
<?php

include "mysql_connect.php";
$meldinger = $_POST['test'];
//$usr = $_SESSION['username'];

mysql_query("INSERT INTO 'adminvegg' ('melding', 'bruker') VALUES ('$meldinger','$usr')");

?>
<?php 
$tabell = "adminvegg"; //tabell

//koble til database

$send = "INSERT INTO $tabell(melding)VALUES('$meldinger')";

$result = mysql_query($send) or die("cannot query");
if (!$result)
{
	echo "feilet<br>" . mysql_error();
}

?>
<?php


//hente alt fra tabell
//$hent = "SELECT * FROM $tabell ORDER BY CAST(id as SIGNED INTEGER) DESC"
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {
echo $rad['bruker'];


}
?>
</body>
</html>