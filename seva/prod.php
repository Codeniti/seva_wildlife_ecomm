<?php
$wpn=$_REQUEST['webpagenumber'];
$brand=$_REQUEST['brand'];
$sk=$_REQUEST['skucode'];
$pname=$_REQUEST['productname'];
$descr=$_REQUEST['productdescription'];
$wt=$_REQUEST['weight'];
$lt=$_REQUEST['length'];
$ht=$_REQUEST['height'];
$wd=$_REQUEST['width'];
$free=$_REQUEST['freebies'];
$wc=$_REQUEST['washcare'];
$of=$_REQUEST['otherfeatures'];
$ds=$_REQUEST['disclaimer'];
$slv=$_REQUEST['sleeves'];
$neck=$_REQUEST['neck'];
$color=$_REQUEST['color'];
$size=$_REQUEST['size'];
$wr=$_REQUEST['wear'];
$fb=$_REQUEST['fabric'];
$mrp=$_REQUEST['mrp'];
$sp=$_REQUEST['sellingprice'];
$fm=$_REQUEST['fullfillmentmode'];
$ct=$_REQUEST['couriertype'];
$wp=$_REQUEST['woodenpackaging'];
$vw=$_REQUEST['vw'];
$in=$_REQUEST['inventory'];
$days=$_REQUEST['days'];

mysql_connect('localhost','root','');
mysql_select_db('seva');
$sql="insert into seva_product values('','$wpn','$brand','$sk','$pname','$descr','$wt','$lt','$ht','$wd','$free','$wc','$of','$ds','$slv','$neck','$color','$size','$wr','$fb','$mrp','$sp','$fm','$ct','$wp','$vw','$in','$days')";
mysql_query($sql) or die(mysql_error())





?>