<html>
<head>
<title>EC2 Instance Meta-Data</title>
<style>

.tabler {
  margin-top: 20px;
  margin-bottom: 40px;
  border-collapse: collapse;
  border-spacing: 0;
}

.tabler,
.tabler th,
.tabler td {
  border: none;
  text-align: left;
  padding: 8px;
}

.tabler tbody tr:nth-child(even) {
  background-color: #f2f2f2
}

.table-header {
	background-color:#4CAF50;
	color:white;
}

tr:nth-child(even) {
	background-color: #f2f2f2
}

body {
	text-align: left;
	color: #281B18;
	background: #FFFFFF;
	font-family: Arial, "Trebuchet MS", Helvetica, sans-serif;
}

h1 {
	text-align: left;
	font: 1.2em 'Arial Rounded MT Bold';
	font-weight: bold;
}

</style>
<head>
<body>
<h1>EC2 Instance Meta-Data</h1>

<table class="tabler">
<tr class="table-header">
<th>Property</th><th>Value</th>
</tr>

<?php

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

// Cycle through array
$arrlength=count($info);

for ($x=0; $x<$arrlength; $x++)
{
	$path = "http://169.254.169.254/latest/meta-data/" . $info[$x]; 
	$data = file_get_contents($path);
	//echo "<span class=\"title\">", $info[$x], "</span><span class=\"dots\"> : </span><span class=\"info\">",$data, "</span><br/>\n";
	echo "<tr><th>" , $info[$x] , "</th><th>" , $data, "</th></tr>\n";
}

?>
</table>
</body>
</html>
