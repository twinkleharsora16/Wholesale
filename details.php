<?php
mysql_connect("localhost","root","");
mysql_select_db("wholesale-managment");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$f=$_POST['f'];
$pin=$_POST['pin'];
$add=$_POST['add'];
$city=$_POST['city'];
$state=$_POST['state'];
$cono=$_POST['cono'];
$email=$_POST['email'];


if(mysql_query("INSERT INTO `sign_in`(`fname`, `lname`, `dob`, `f`, `pin`, `add`, `city`, `state`, `cono`, `email`) VALUES ('".$fname."','".$lname."','".$dob."','".$f."','".$pin."','".$add."','".$city."','".$state."','".$cono."','".$email."')"))
{
	echo "<h2 >Data inserted successfully</h2>";
}
else
{
	echo "not inserted";
	mysql_error();
}
?>