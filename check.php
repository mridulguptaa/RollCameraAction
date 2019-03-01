<html>
<head>
<title>Untitled</title>
</head>

<body>

<?php

$lname=$_GET["nm"];
$lpass=$_GET["ct"];

mysql_connect("localhost:3306","id8835122_mridul","qwerty");
mysql_select_db("id8835122_credentials");
$temp=mysql_query("select password from Login where name=$lname);
if($temp==$lpass)
	return true;
else return false;



?>

</body>
</html>