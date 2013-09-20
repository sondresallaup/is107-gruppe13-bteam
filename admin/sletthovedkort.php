<?php
include "mysql_connect.php";
include "redigerkomponent.php";
?>

<?php
$tabell = "hovedkort";
$id = $_POST['ch1'];
$sql = "DELETE FROM 'hovedkort' WHERE 'hovedkort'.'ID' = $id LIMIT 1";


$slett = mysql_query($sql);
if (!$slett) {
die ("klarte ikke å slette hovedkortet" ); echo mysql_error();
}
?>