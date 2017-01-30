<html>
<head>
<title>EC2 Instance Meta-Data</title>

<style>

body {
	text-align: left;
	color: #281B18;
	background: #F3EEEC;
}

h1 {
	text-align: left;
	font: 1.2em 'Arial Rounded MT Bold';
	font-weight: bold;
}

.title {
	font: 0.8em 'Arial Rounded MT Bold';
	font-weight: bold;
}

.dots {
	font: 0.8em 'Arial Rounded MT Bold';
	font-weight: bold;
	color: #DA3A15;
}

.info {
	font-weight: normal;
	font: 0.8em 'Arial';
}

</style>

<head>
<body>

<h1>EC2 Instance Meta-Data</h1>

<?php

/*
sudo su
yum install -y httpd git php
cd /var/www/html
git clone https://github.com/gamecat69/aws-ec2
*/

// Create array

$info=array("ami-id",
"ami-launch-index",
"ami-manifest-path",
"hostname",
"instance-action",
"instance-id",
"instance-type",
"local-hostname",
"local-ipv4",
"mac",
"public-hostname",
"public-ipv4",
"reservation-id",
"security-groups");

$arrlength=count($info);

for ($x=0; $x<$arrlength; $x++)
{
	$path = "http://169.254.169.254/latest/meta-data/" . $info[$x]; 
	$data = file_get_contents($path);
	echo "<span class=\"title\">", $info[$x], "</span><span class=\"dots\"> : </span><span class=\"info\">",$data, "</span><br/>\n";
}

?>

</body>
</html>
