<?php
session_start();
$uname=$_REQUEST[''];
$pass=md5($_REQUEST['']);

mysql_connect('localhost','root','');
mysql_select_db('seva');
$sql="select * from vendor where email='$uname' and password='$pass'";
$result=mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($result)>0)
{
	$_SESSION['admin_id']=$uname;
	header('location:addproduct.php');
}

else
{
	header('location:vendor_login.php');
}





?>