<?php
$company=$_REQUEST['company_name'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$mail=$_REQUEST['mail'];
$contact=$_REQUEST['contact_num'];
$address1=$_REQUEST['address1'];
$address2=$_REQUEST['address2'];
$address=$address1." ".$address2;
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$pincode=$_REQUEST['pincode'];

mysql_connect('localhost','root','');
mysql_select_db('seva');
$sql="insert into vendor values ('','$company','$fname','$lname','$mail','$contact','$address','$city','$state','$pincode')";
mysql_query($sql) or die(mysql_error());
header('location:vendor_register.php');
?>