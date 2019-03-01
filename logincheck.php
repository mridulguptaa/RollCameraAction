<?php

	$hostname="localhost:3306";
	$password="qwerty";
	$username="id8835122_mridul";
	$dbhandle=mysql_connect($hostname,$username,$password) or die("could not connect");


	$selected=mysql_select_db("id8835122_credentials",$dbhandle);
	
	
	
	$myusername= $_POST['lname'];
	$mypassword=$_POST['lpass'];
	
	$myusername=stripslashes($myusername);
	$mypassword=stripslashes($mypassword);
	
	$query="SELECT * FROM Login WHERE name='$myusername' and password='$mypassword'";
	
	$result=mysql_query($query);
	
	$count=mysql_num_rows($result);
	
	if($count==1)
	{
		echo 'login successful';
		}
	else echo ' either username/password is incorrect';
	
?>