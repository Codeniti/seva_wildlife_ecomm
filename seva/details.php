<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
<script>
function add(id)
{
alert(id);
	$.ajax({
		type:'get',
		url:'cart.php',
		data:'m='+id,
		success:function(res){
		
		
		$('#cart').hide();
		}
	
	})
}
</script>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<div class='shell'>
<div><a href='yourcart.php'><button style='height:50px;width:100px'>View My Cart</button></a>
</div>
<div class='products' style='background:white'>
<?php

$id=$_REQUEST['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("seva",$con);
$que="select * from seva_product where id=$id";
$result=mysql_query($que);
$row=mysql_fetch_array($result);
echo "<center><img src='css/images/".$row['img']." 'width=600px height=500px style='margin-top:10px'><br/>";
echo $row['product_name']."<br/>".$row['brand']."<br/>".$row['description']."<br/><b>".$row['s_price']."</b></center><br/>";



?>
<div style='margin-left:10%;margin-top:10%' id='cart'><img src='b.png' onclick='add(<?php echo $row['id']; ?>)' alt="Add to cart" height='60px' width=120px ></div></div></div>