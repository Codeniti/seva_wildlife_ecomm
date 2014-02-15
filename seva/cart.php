<?php
$id=$_REQUEST['id'];

$con=mysql_connect("localhost","root","");
mysql_select_db("seva",$con);

mysql_query("insert into booked values ('','$id')");
echo "1";
?>