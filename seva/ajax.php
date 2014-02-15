<?php
$m=$_REQUEST['m'];
//echo $m;

$con=mysql_connect("localhost","root","");
mysql_select_db("seva",$con);



 $query="select * from seva_product";
$result=mysql_query($query) or die(mysql_error());

$count=0;
echo "<table cellspacing=10><tr>";
	while($row=mysql_fetch_array($result)){
	?>
	<div class="product-frame">
							<div class="product">
								<a title="View product" class="view-button" href="details.php?id=<?php echo $row['id']; ?>">view product</a>
								<div class="img-holder">	
									<a title="View product" href="description.php?id=<?php echo $row['id'];?>"><img src="css/images/<?php echo $row['img']; ?>" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price"><span class="dollar">Rs.</span><?php echo $row['s_price']; ?></p>
								</div>
								<div class="product-entry">
									<p class="model"><?php echo $row['product_name']; ?><br /> <?php echo $row['brand']; ?></p>
									
									<p class="product-info">   <?php echo $row['description']; ?></p>
								</div>
							</div>
						</div>
	<?php
}
	echo "</tr>";
echo "</table>";

?>