<html>
<head>
<title>Elastic Beanstalk App</title>
<style>

body {
	text-align: left;
	color: #281B18;
	background: #FFFFFF;
	font: 1.0em 'Arial Rounded MT';
}

h1 {
	text-align: left;
	font: 1.2em 'Arial Rounded MT Bold';
	font-weight: bold;
}

</style>
<head>
<body>
<h1>Elastic Beanstalk App</h1>

<?php

$hostname = file_get_contents("http://169.254.169.254/latest/meta-data/hostname");
$version = "2.0";

echo "<span>Hostname:" , $hostname , "</span><br/>";
echo "<span>App version:" , $version , "</span><br/><br/>";

echo "<a href=\"user-data.php\">user-data</a><br/>";
echo "<a href=\"meta-data.php\">meta-data</a><br/>";
echo "<a href=\"identity.php\">EC2 Instance Info</a><br/>";
echo "<a href=\"phpinfo.php\">PHP Info</a><br/>";
echo "<a href=\"dbconnect.php\">Connect to Database</a><br/>";

?>

</body>
</html>
