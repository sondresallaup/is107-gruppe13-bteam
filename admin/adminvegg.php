<?php session_start(); ?>
<html>
<head>
	<meta http-equiv="Refresh" 
	content="0; URL=admin.php">
</head>
<body>
	<?php
		include "mysql_connect.php";
		$meldinger = $_POST['test'];
		$usr = $_SESSION['username'];
	 
		$tabell = "adminvegg"; //tabell

		//koble til database
		$send = "INSERT INTO $tabell(melding, bruker)VALUES('$meldinger','$usr')";

		$result = mysql_query($send) or die("cannot query");
		if (!$result)
		{
			echo "feilet<br>" . mysql_error();
		}
	?>
</body>
</html>