<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("seva",$con);

$sql="select a.*,b.* from seva_product a, booked b where b.prod_id= a.id ";

$res=mysql_query($sql);

while($row=mysql_fetch_array($res)){
?>
	
	<div class="product-frame" style="width:60%;margin:auto;height:300px;background:lightgray;padding:2%">
							<div class="product">
							
								<div class="img-holder">	
									<a title="View product" href="description.php?id=<?php echo $row['id'];?>"><img src="css/images/<?php echo $row['img']; ?>" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price" style="font-weight:bold;font-size:130%"><span class="dollar">Rs.</span><?php echo $row['s_price']; ?></p>
								</div>
								<div class="product-entry">
									<p class="model" style="font-weight:bold;font-size:130%">Product Name  :  <?php echo $row['product_name']; ?><br> Product Brand  :  <?php echo $row['brand']; ?></p>
									
									<p class="product-info" style="font-weight:bold;font-size:130%">  Description :   <?php echo $row['description']; ?></p>
									
									<marquee>The profit generated from this purchase will be donated to <b>Save Tiger Foundations.</b></marquee>
									
									<center><h3>Thank You For Your Support.</h3></center>
								</div>
							</div>
						</div>
<?php
}

?>