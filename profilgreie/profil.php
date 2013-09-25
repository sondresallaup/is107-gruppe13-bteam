<?php
$id = $dbid;session_start();
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


<?php



//Kobler til db
$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");

	$query = mysql_query("SELECT * FROM users WHERE id='$id'");

	$numrows = mysql_num_rows($query);
	
	while ($row = mysql_fetch_assoc($query)){

				$dbid = $row['id'];
				$dbusername = $row['username'];	
				$dbusertype = $row['usertype'];
				$dbfirstname = $row['firstname'];
				$dblastname = $row['lastname'];
				$dbemail = $row['email'];
				$dbdate = $row['date'];
			}
	
	
	
	
	
	

echo "<h1>".$dbfirstname." ".$dblastname."</h1>";
echo "<p>E-post-adresse: ".$dbemail."<br>
	Brukernavn: ".$dbusername."<br>
	Medlem siden ".$dbdate."<br>";
	
	echo '<img src="profilbilde.jpg" border=0 with="200" height="200">';
	
/*
<h1><img src="default_profile_pic.jpg" alt="Profilbildet" height="175" width="150" align="top">Navn på bruker</h1><br>
<p>Generell brukerinfo</p>
<p>PC Specs</p>
*/


?>



</div>
</body>
</html>