<?php
session_start();
echo $uname=$_REQUEST['admin_username'];
echo $pass=md5($_REQUEST['admin_password']);

mysql_connect('localhost','root','');
mysql_select_db('seva');
$sql="select * from admin where email='$uname' and password='$pass'";
$result=mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($result)>0)
{
	

	$_SESSION['admin_id']=$uname;
	header('location:dashboard.php');
}

else
{

	header('location:admin_login.php');
}





?>