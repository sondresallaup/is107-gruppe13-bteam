<?php
session_start();

$id= $_SESSION['id'];

//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");

	$query = mysql_query("SELECT * FROM conversation WHERE user_one='$id'");

	$numrows = mysql_num_rows($query);
		
		//Sjekker om brukernavnet eksisterer
		if ($numrows!=0){

			//Tar ut data fra db
			while ($row = mysql_fetch_assoc($query)){

				$c_id = $row['c_id'];
				$user_one = $row['user_one'];
				$user_two = $row['user_two'];
				$text = $row['text'];
				$time = $row['time'];
				
			}
			
			//Finner bruker bak id
				$query = mysql_query("SELECT * FROM users WHERE id='$user_two'");

	$numrows = mysql_num_rows($query);
		
		//Sjekker om brukernavnet eksisterer
		if ($numrows!=0){

			//Tar ut data fra db
			while ($row = mysql_fetch_assoc($query)){
				$userid = $row['id'];
				$username = $row['username'];
				$email = $row['email'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				
			}
}}
?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<h1>Utboks</h1>
	<div>
	
	<?php echo "<b> Til <a href='brukerfiler/$userid/profil.php'>".$firstname." ".$lastname." (".$username.")</a> </b><br> ".$text."<br><i>".$time."</i>"; ?>
	
	
	</div>
	
</html>