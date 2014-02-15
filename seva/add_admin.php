<?php

$fn=$_REQUEST['firstname'];
$ln=$_REQUEST['lastname'];
$email=$_REQUEST['email'];

$con=mysql_connect("localhost",'root','');
mysql_select_db("seva",$con);

$sql="insert into seva_admin values()";


echo "Add admin successfully !!";




?>