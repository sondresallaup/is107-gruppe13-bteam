<html>
<head>
<?php session_start(); ?>
<?php include "mysql_connect.php" ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<div class="meldingvegg">

<form action="adminvegg.php" method="post" >
<textarea name="test" rows="5" cols="50" required maxlength="255"></textarea><br>
<input type="submit" value="post" /><br><br>
<div class="scrollbar" style="height:460px;;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

<?php


//hente alt fra tabell
$tabell = "adminvegg";
$hent = "SELECT * FROM $tabell ORDER BY id DESC";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {

echo $rad['bruker']; echo " postet den: "; echo $rad['tid'];  echo "<br>";
echo $rad['melding']; echo "<br><br>";
echo "<hr>";
}
?>
</div>

</form>
</div>
</body>
</html>