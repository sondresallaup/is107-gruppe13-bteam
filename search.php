<?php 
session_start();

$search = strtolower($_POST['search']);

$outmessage ="";
if($search){
	//Kobler til db
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");

	$query = mysql_query("SELECT * FROM users WHERE username='$search'");

	$numrows = mysql_num_rows($query);
	
	//Sjekker om brukernavnet eksisterer
		if ($numrows!=0){

			//Tar ut data fra db
			while ($row = mysql_fetch_assoc($query)){

				$dbid = $row['id'];
				$dbusername = $row['username'];
				$dbfirstname = $row['firstname'];
				$dblastname = $row['lastname'];
				$dbemail = $row['email'];
			}
			$outmessage = "<a href='brukerfiler/".$dbid."/profil.php'>".$dbusername. " - ". $dbfirstname." ".$dblastname."</a>";
			}
			else
				$outmessage = "Finner ikke det du søkte etter";
			
		

}
else
	$outmessage = "Du må skrive noe i søkefeltet";



?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<h1>Søk</h1>
	<div>
	
	<?php echo $outmessage;  ?>
	
	</div>
	
	</hmtl>