<html>
<title> File uploaded! </title>
<body>

<?php
//$_FILES["file"]["name"];
//$_FILES["file"]["type"];
//$_FILES["file"]["size"];
//$_FILES["file"]["tmp_name"];
//$_FILES["file"]["error"];
$fname = $_FILES["file"]["name"];
$f = sprintf("<a href=http://home.uia.no/emilvr13/upload/upload/%s>%s</>", $fname, $fname);
if ($_FILES["file"]["error"] > 0) {
	echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
}
$sted = $_POST['brukervalg'];
$allowedExts = array (
	"gif",
	"jpeg",
	"jpg",
	"png",
	"pdf"
); //angir hvilke filer som skal lastes opp. 
$temp = explode(".", $_FILES["file"]["name"]);
$extension = strtolower(end($temp)); // forhindrer at scriptet feiler da mange av filene har forskjellige upper/lowercase filextensions.
if ((($_FILES["file"]["type"] == "image/gif") // sjekker at filene er det de skal være, og om fila er innenfor størrelesesgrensa.
|| ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "application/pdf")) && ($_FILES["file"]["size"] < 20000000) // setter maxstørrelse på fil i KB. 
&& in_array($extension, $allowedExts)) // sjekker om det er riktig filtype og om filentypen er tillat i arrayet. 
	{
	if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	} else {

		if (file_exists("upload/" . $_FILES["file"]["name"])) {
			echo " $fname finnes allerede. Skift navn på filen. Vi redirecter deg tilbake til uploadsiden. "; //redirect eller lage et script som renamer fila til noe ala bildeX.ext
			// her må det settes inn en redirect. 
		} else {
			$sted = $_POST['brukervalg'];
			echo $sted;
			if ($sted == "prosjekt") {
				move_uploaded_file($_FILES["file"]["tmp_name"], "./brukerfiler/$dbid/prosjekt/ . $fname);
				"<br>";
			}
			elseif ($sted == "brukermappe") {
				move_uploaded_file($_FILES["file"]["tmp_name"], "./brukerfiler/$dbid/prosjekt/" . $fname);
				"<br>";
			}
			elseif ($sted == "profilbilde") {
				move_uploaded_file($_FILES["file"]["tmp_name"], "../brukerfiler/$dbid/profilbilde/" . $fname);
				"<br>";
			}
			elseif ($sted == "upload") {
				move_uploaded_file($_FILES["file"]["tmp_name"], "./brukerfiler/$dbid/upload/" . $fname);
				"<br>";
			} else {
				echo "du har ikke valgt noe";
			}

			//      move_uploaded_file($_FILES["file"]["tmp_name"], //flytter filene fra TMPlagring til egendefinert mappe.
			//      "upload/" . $_FILES["file"]["name"]); "<br>";  //targetmappen. skal endres slik at den treffer en brukermappe. 
			//     echo "Filen ble lastet opp og kan finnes her <br> :.";
			//     echo $f;
			//     echo 
		}
	}
} else {
	echo "Opplastingen av denne typen filer støttes ikke";
}
?> 
</body>
</html>