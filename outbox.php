<?php
session_start();

$id= $_SESSION['id'];

//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");

	$queryto = mysql_query("SELECT * FROM conversation WHERE user_one='$id' ORDER BY c_id DESC");

	$numberTO = mysql_num_rows($queryto);
		
		/*Sjekker om brukernavnet eksisterer
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
				$query = mysql_query("SELECT * FROM users WHERE id='$user_one'");

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
}} */
?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<h1>Innboks</h1>
	<div>
	
	<?php 
	
	if ($numberTO!=0){
	//Tar ut data fra db
			while ($row = mysql_fetch_assoc($queryto)){
			$c_id = $row['c_id'];
				$user_one = $row['user_one'];
				$user_two = $row['user_two'];
				$text = $row['text'];
				$time = $row['time'];
				
				//Finner bruker bak id
				$queryfrom = mysql_query("SELECT * FROM users WHERE id='$user_two'");

	$numberFROM = mysql_num_rows($queryfrom);
		
		//Sjekker om brukernavnet eksisterer
		if ($numberFROM!=0){

			//Tar ut data fra db
			while ($row = mysql_fetch_assoc($queryfrom)){
				$userid = $row['id'];
				$username = $row['username'];
				$email = $row['email'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				
			}
	
	
	echo "<b> Til <a href='brukerfiler/$userid/profil.php'>".$firstname." ".$lastname." (".$username.")</a> </b><br> ".$text."<br><i>".$time."</i>";
	echo "<br><br><hr>" ;
	
	}}} ?>
	</div>
	
</html>