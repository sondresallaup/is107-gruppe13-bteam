<?php
session_start();

$outmessage = "";

$submit = $_POST['submit'];

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);

$username = strtolower(strip_tags($_POST['username']));
$email = strip_tags($_POST['email']);

$currentpassword = $_POST['currentpassword'];
$newpassword = strip_tags($_POST['newpassword']);
$repeatnewpassword = strip_tags($_POST['repeatnewpassword']);
$currentusername = $_SESSION['username'];


if($submit){
//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");
	
	$namecheck = mysql_query("SELECT username FROM users WHERE username='$currentusername'");
	$count = mysql_num_rows($namecheck);
	
	if($count != 0&&$username!=$_SESSION['username']){
	$outmessage = "Dette brukernavnet er opptatt";}
	
		if($firstname&&$lastname&&$username&&$email){
	
			if(strlen($firstname)>30||strlen($lastname)>30||strlen($username)>16){
				
				$outmessage = "Navn og/eller brukernavn er for langt";}
			
			else {
			
			while ($row = mysql_fetch_assoc($query)){

				$dbusername = $row['username'];
				$dbpassword = $row['password'];	
				$dbusertype = $row['usertype'];
				$dbfirstname = $row['firstname'];
				$dblastname = $row['lastname'];
				$dbemail = $row['email'];
			}
			
			$query = mysql_query("
			UPDATE users SET firstname = '$firstname' WHERE username ='$dbusertype'");
			$query = mysql_query("
			UPDATE users SET lastname = '$lastname' WHERE username ='$dbusertype'");
			$query = mysql_query("
			UPDATE users SET username = '$username' WHERE username ='$dbusertype'");
			$query = mysql_query("
			UPDATE users SET email = '$email' WHERE username ='$dbusertype'");
			
			
			$_SESSION['firstname']=$firstname;
			$_SESSION['lastname']=$lastname;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			
			$outmessage = "Info endret.";
			
				if($currentpassword&&$newpassword&&$repeatnewpassword){
					if(md5($currentpassword)==$dbpassword){
						
						if($newpassword==$repeatnewpassword){
						$query = mysql_query("
			UPDATE users SET password = 'md5($password)' WHERE username ='$dbusertype'");
						
						}
						else
							$outmessage = "Passordene samsvarer ikke";
						
						
						}
						else
							$outmessage = "Feil passord";
				
				
				}
				if((!$currentpassword||!$newpassword||!$repeatnewpassword)&&($currentpassword||$newpassword||$repeatnewpassword)){
				$outmessage = "Vennligst fyll ut alle feltene";}
		
					
			
			
			}
		
	
	}
	else
		$outmessage = "Vennligst fyll ut alle feltene";
		
	


}




?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<h1>Innstillinger</h1>
	<div>

<form action='innstillinger.php' method='POST'>

	<table>
		<tr>
			<td>
			Fornavn
			</td>
			<td>
			<input type='text' name='firstname' value='<?php echo $_SESSION['firstname']; ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Etternavn
			</td>
			<td>
			<input type='text' name='lastname' value='<?php echo $_SESSION['lastname']; ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Brukernavn
			</td>
			<td>
			<input type='text' name='username' value='<?php echo $_SESSION['username']; ?>'>
			</td>
		</tr>
		
		<tr>
			<td>
			E-post-adresse
			</td>
			<td>
			<input type='text' name='email' value='<?php echo $_SESSION['email']; ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Nåværende passord
			</td>
			<td>
			<input type='password' name='currentpassword'>
			</td>
		</tr>
		<tr>
			<td>
			Nytt passord
			</td>
			<td>
			<input type='password' name='newpassword'>
			</td>
		</tr>
		<tr>
			<td>
			Gjenta nytt passord
			</td>
			<td>
			<input type='password' name='repeatnewpassword'>
			</td>
		</tr>
		
	</table>
	<p>
	<input type='submit' name='submit' value='Endre'>

	<br> <?php echo $outmessage; ?>
</form>

</div>
	
</html>