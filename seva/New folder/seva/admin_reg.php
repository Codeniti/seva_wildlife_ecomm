<?php
$fname=$_REQUEST[];
$lname=$_REQUEST[];
$email=$_REQUEST[];
$password=md5('seva_admin');

mysql_connect('localhost','root','');
mysql_select_db('seva');
$sql="insert into admin values('','$fname','$lname','$email','$password')";
mysql_query($sql) or die(mysql_error());

header('location:add-admin.php');
?>