<?php
include "mysql_connect.php";
session_start();
?>

<?php
$tabell = "cpu";
$id = $_POST['ch1'];
$sql = "DELETE FROM $tabell WHERE (`$tabell`.`ID` = $id)";
        


$slett = mysql_query($sql);
if (!$slett) {
die ("klarte ikke å slette $tabell" ); echo mysql_error();
}
?>