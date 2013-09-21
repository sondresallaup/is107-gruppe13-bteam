<?php
include "mysql_connect.php";
include "redigerkomponent.php";
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