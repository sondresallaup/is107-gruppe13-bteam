<?php
include "mysql_connect.php";
?>

<?php
$tabell = "psu";
$id = $_POST['ch1'];
$sql = "DELETE FROM $tabell WHERE (`$tabell`.`id` = $id)";


$slett = mysql_query($sql);
if (!$slett) {
die ("klarte ikke � slette psu" ); echo mysql_error();
}
?>