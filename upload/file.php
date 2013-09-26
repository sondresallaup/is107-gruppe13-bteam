<html>
 <link rel="stylesheet" href="prolangs.css" type="text/css" media="all" />
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<head>

<title> test 2 </title>
<body>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<input type="file" name="file" id="file"><br>
<input type="submit" value="Submit">
<select name="brukervalg">
<Option Value="brukermappe">brukermappe </Option>
<Option Value="profilbilde">profilbilde </Option>
<Option Value= "prosjekt">prosjekt </Option>
<Option Value= "upload">upload </Option>
</select>
<br>
</form>
<p id="outputbox">Du har ikke valgt noe enda!</p>
<script>
displayResult = function()
{
var x=document.getElementById("test2").selectedIndex;
var y=document.getElementById("test2").options;
var temp = "Du valgte " + y[x].text;
document.getElementById("outputbox").innerHTML="<div>"+temp+"</div>";
}

</script>
</body>

</html>
<script>

