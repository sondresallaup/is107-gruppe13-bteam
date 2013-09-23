<html>
<head>
<meta http-equiv="Refresh" 
content="0; URL=admin.php">
</head>
<body>
<?php
<<<<<<< HEAD
session_start();
include "mysql_connect.php";
$meldinger = $_POST['test'];
$bruker = $_SESSION['username'];

mysql_query("INSERT INTO 'adminvegg' ('melding','bruker') VALUES ('$meldinger','$bruker')");
=======
include "mysql_connect.php";
$meldinger = $_POST['test'];


mysql_query("INSERT INTO 'adminvegg' ('melding') VALUES ('$meldinger')");
>>>>>>> ae8849621a3783fd0e55386e9d6cc1b46f3b27e2

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

<<<<<<< HEAD
echo $rad['tid']; echo " "; echo $rad['bruker']; echo "<br>";
=======
echo $rad['tid']; echo "<br>";
>>>>>>> ae8849621a3783fd0e55386e9d6cc1b46f3b27e2
echo $rad['melding']; echo "<br><br>";

}
?>
</body>
</html>