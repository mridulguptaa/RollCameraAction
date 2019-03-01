<html>
<head>
<title>Untitled</title>
</head>

<body>

<?php

$nm=$_GET["nm"];
$ct=$_GET["ct"];

mysql_connect("localhost:3306","id8835122_mridul","qwerty");
mysql_select_db("id8835122_credentials");
mysql_query("insert into Login values('$nm','$ct')");

?>

</body>
</html>