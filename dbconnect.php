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
<h1>Elastic Beanstalk App - DB Connect</h1>

<?php

$mysqli = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME']);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "Connected to database OK";
$mysqli->close();

?>

</body>
</html>
