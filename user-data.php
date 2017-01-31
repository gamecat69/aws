<html>
<head>
<title>EC2 Instance User-Data</title>
<style>

body {
	text-align: left;
	color: #281B18;
	background: #FFFFFF;
	font-family: Arial;
}
h1 {
	text-align: left;
	font: 1.2em 'Arial Rounded MT Bold';
	font-weight: bold;
}
</style>
<head>
<body>
<h1>EC2 Instance User-Data</h1>

<?php

//	Get data from curl
//	function nl2br() preserves the line breaks in the return from curl
$data = file_get_contents("http://169.254.169.254/latest/user-data");
echo "<span>", nl2br($data), "</span>";

?>

</body>
</html>
