<?php	


session_start();

$from_id = $_SESSION['id'];
$to_user = $_POST['to'];
$msg = $_POST['text'];
$submit = $_POST['submit'];
$date = date('Y-m-d-H-i-s');
$outmessage = "";

if($submit){
	if($to_user&&$msg){

$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");



	$query = mysql_query("SELECT * FROM users WHERE username ='$to_user'");

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
			
			//Setter ny bruker inn i db
			$query = mysql_query("
			INSERT INTO conversation VALUES ('','$from_id','$dbid','$msg','$date')");
			
			
			
			echo "Sendt!";
			}
			else
				echo  "Finner ikke brukernavnet";
	}
	else
		echo  "Du må fylle ut alle feltene";		
		

}

?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<h1>Send "epost"</h1>
	<div>
	
	<!-- Search-input -->
		<form method="POST" action="meldinger.php" method="POST">
			<br>Send epost til bruker
			<br>Brukernavn: <input type="text" name="to"><br>
			Melding: <textarea name="text" rows="5" cols="50" required maxlength="255"></textarea><br>
			<br><input type="submit" name="submit" value="send">
		</form>
		<a href="inbox.php">Innboks</a>
		<a href="outbox.php">Utboks</a>
		
		
		
		<?php echo $outmessage; ?>		
		
	
	
	
	</div>
</html>