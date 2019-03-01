<html>
<head>
<title>Untitled</title>
</head>

<body>

<?php

$nm=$_GET["nm"];
$pw=$_GET["pw"];

mysql_connect("localhost","root","");
mysql_select_db("id8835122_credentials");
mysql_query("insert into Login values('$nm','$pw')");

?>

</body>
</html>