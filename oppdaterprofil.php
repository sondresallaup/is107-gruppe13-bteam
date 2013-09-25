<?php
session_start();

$id = $_SESSION['id'];

if($_SESSION['loggedin']){
	if($id<52){
	
	//oppretter brukermappe


 $dest="./brukerfiler/$id/";
 mkdir("./brukerfiler/$id", 0777);
 
 //Setter standardprofilbilde
 copy("profilbilde.png","./brukerfiler/$id/profilbilde.jpg");
 
 //Oppretter egen brukerprofil ' '.
 $file = '<?php
$id = '.$id.';'.file_get_contents('./profil.php', true);
 
 $fp = fopen("./brukerfiler/$id/profil.php","w+");
 
 fwrite($fp, $file);
 fclose($fp);
 
 echo "Gratulerer! Du har nå oppdatert brukerprofil";
	
	}

}

?>