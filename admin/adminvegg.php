<html>
<head>
<meta http-equiv="Refresh" 
content="0; URL=admin.php">
</head>
<body>
<?php
include "mysql_connect.php";
$meldinger = $_POST['test'];


mysql_query("INSERT INTO 'adminvegg' ('melding') VALUES ('$meldinger')");

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
$hent = "SELECT * FROM $tabell ORDER BY id DESC";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {

echo $rad['tid']; echo "<br>";
echo $rad['melding']; echo "<br><br>";

}
?>
</body>
</html>