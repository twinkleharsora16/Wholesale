<?php
$a=$_POST['src'];
$b=$_POST['price'];
echo "$a $b";
mysql_connect("localhost","root","");
mysql_select_db("wholesale-managment");
if(!mysql_query("INSERT INTO `details`(`src`,`price`) VALUES('".$a."','".$b."')"))
{
	echo "not";
	mysql_error();
}
?>