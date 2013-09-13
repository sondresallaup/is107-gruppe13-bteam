<html>
<head>
<meta charset="UTF-8" />
<title> nytt kabinett </title>
</head>
<body>


<form 	action="kabinettdb.php" method="post">
		<b>Grunnfunksjon med forskjellige størrelser:</b> <br>
		<input type="text" 	name="produsent" placeholder="produsent" size="30" /><br>
		<input type="text" 	name="modell" placeholder="modell" /><br>
		<input type="text" 	name="formfaktor" placeholder="formfaktor" /><br>
		<input type="text" 	name="hovedstorrelse" placeholder="hovedstørrelse" /><br>
		<input type="text" 	name="stottedehk" placeholder="støttede hovedkort" /><br>
		<input type="text" 	name="internebronner" placeholder="interne brønner" /><br>
		<input type="text" 	name="antallbronner" placeholder="antall fronttilgjengelige brønner" /><br>
		<input type="text" 	name="farge" placeholder="farge" /><br>
		<input type="text" 	name="vifter" placeholder="vifter" /><br>
		<b>Ekspansjon / tilkoblinger:</b> <br>
		<input type="text" name="ekspansjon" placeholder="ekspansjonsbrønner" /><br>
		<input type="text" name="grensesnitt" placeholder="grensesnitt" /><br>
		<b>Størrelse: </b><br>
		<input type="text" name="bredde" placeholder="bredde" /><br>
		<input type="text" name="dybde" placeholder="dybde" /><br>
		<input type="text" name="hoyde" placeholder="høyde" /><br>
		<input type="text" name="pris" placeholder="pris" /><br>
		<input type="submit" name="add" value="Legg til" />
</form>
</body>
</html>