<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$mail=$_REQUEST['email'];
$pass=md5($_REQUEST['pass']);
$age=$_REQUEST['age'];
$landline=$_REQUEST['landline'];
$mobile=$_REQUEST['mobile'];
$line1=$_REQUEST['line1'];
$line2=$_REQUEST['line2'];
$address=$line1." ".$line2;
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$pin=$_REQUEST['pin'];
$badd=$_REQUEST['b_address'];
$sadd=$_REQUEST['s_address'];

mysql_connect('localhost','root','');
mysql_select_db('seva');
$sql="insert into seva_user values('','$fname','$lname','$gender','$mail','$pass','','','$age','$landline','$mobile','$address','$state','$city','','$pin','$badd','$sadd') ";

mysql_query($sql) or die(mysql_error());
header('location:')
?>