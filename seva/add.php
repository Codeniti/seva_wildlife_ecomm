<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Home | seva-environment.com</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>	
	<script src="js/Tahoma_400-Tahoma_700.font.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>		
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<div class="shell">
			<!-- Header -->
			<div id="header">
				<!-- Logo -->
				<h1 id="logo"><a title="home" href="#">seva-environment</a></h1>
				<!-- Navigation -->
				<div id="navigation">
					<ul>
						<li><a title="Home" href="home.php">Home<span></span></a></li>
						<li><a title="Products" href="add.php">Add Products<span></span></a></li>
						<li><a title=" About Us" href="about_us.html">About Us<span></span></a></li>
						<li><a title="Blog" href="contactus.html">Contact Us<span></span></a></li>
						
					</ul>
				</div>
				<!-- END Navigation -->
				<div class="cl"></div>
				<div id="cart">
					<p><a title="shopping bag" href="#">shopping bag:&nbsp; 0 items</a></p>
				</div>
			</div>	
		</div>
		<!-- END Header -->
		<!-- Main -->
		<div id="main">
			<!-- Slider Holder -->
			<div id="slider-holder">
				<div class="shell">
					<!-- Main Slider -->
					<div id="slider">
						<a title="Details" class="main-button" href="#">SAVE TIGER	</a>					
						<ul>
							<li>
								<img src="css/images/SEVA SLIDE DESGN.jpg" alt="A man with sun glasses" />
								
								<div class="cl"></div>
							</li>
							<li>
								<img src="css/images/SEVA SLIDE DESGN 1.jpg" alt="A man with sun glasses" />
								
								<div class="cl"></div>
							</li>
							<li>
								<img src="css/images/SEVA SLIDE DESGN 2.jpg" alt="A man with sun glasses" />
								
								<div class="cl"></div>
							</li>
						</ul>
										
					</div>
					<!-- END Main Slider -->								
				</div>	
			</div>
			<!-- END Slider Holder -->
			<!-- Featured Items -->
			<div class="items">
				<div class="shell">
				




<script>
$(document).ready(function(){
$("#container2").hide();
$("#shownext").click(function(){
$("#container1").hide();
$("#container2").show();
});
$("#back").click(function(){
$("#container2").hide();
$("#container1").show();
});
});
</script>
<style>

#container1{font-size:200%;text-align:justify;padding-top:5%}
#container2{font-size:200%;text-align:justify}
input{height:35px;width:200px;margin:4px}
input{height:35px;width:200px;margin:4px}
td{width:250px;font-size:100%}
</style>
</head>
<body>
<form action="prod.php" method="POST">
<div id="container1">
<h2>Product Details</h2>
<table>
<tr>
<td>WebPagenumber:</td>
<td><input type="number"  name="webpagenumber" label="webpagenumber" required></input></td>
</tr>
<tr>
<td>Brand:</td>
<td><input type="text" name="brand" label="brand" required></input> </td>
</tr>
<tr>
<td>SKUCode:</td>
<td><input type="text" name="skucode" label="skucode" ></input></td>
</tr>
<tr>
<td>Product Name: </td>
<td><input type="text" name="productname" label="productname"></input></td>
</tr>
<tr>
<td>Description:</td>
<td><textarea name="productdescription" label="productdescription" rows=5	cols=35></textarea></td>
</tr>
</table><br><br>
<h3>Packaging dimensions:</h3><br/><br>
<table>
<tr>
<td>Weight (grams)</td>
<td><input type="number" name="weight" label="weight"></input></td>
</tr>
<tr>
<td>Length (cm)</td>
<td><input type="number" name="length" label="length"></input></td>
</tr>
<tr>
<td>Height (cm)</td>
<td><input type="number" name="height" label="height"></input></td>
</tr>
<tr>
<td>Width (cm)</td>
<td><input type="number" name="width" label="width"></input></td>
</tr>
</table>
<table>
<tr>
<td>Freebies (if any)</td>
<td><input type="text" name="freebies" label="freebies"></input></td>
</tr>
</table>
<input type="button" value="Continue" id="shownext"></input>
</div>
<div id ="container2">
<h3>Product Highlights</h3><br/>
<table>
<tr>
<td>Wash Care</td>
<td><input type="text" name="washcare" label="washcare"></input></td>
</tr>
<tr>
<td>Other Features</td>
<td><textarea name="otherfeatures" label="otherfeatures"></textarea></td>
</tr>
<tr>
<td>Disclaimer</td>
<td><input type="text" name="disclaimer" label="disclaimer"></input></td>
</tr>
<tr>
<td>Sleeves</td>
<td><input type="text" name="sleeves" label="sleeves"></input></td>
</tr>
<tr>
<td>Neck</td>
<td><input type="text" name="neck" label="neck"></input></td>
</tr>
<tr>
<td>Color</td>
<td><input type="text" name="color" label="color"></input></td>
</tr>
<tr>
<td>Size</td>
<td><input type="text" name="size" label="size"></input></td>
</tr>
<tr>
<td>Wearability</td>
<td><input type="text" name="wear" label="wear"></input></td>
</tr>
<tr>
<td>Fabric</td>
<td><input type="text" name="fabric" label="fabric"></input></td>
</tr>
<tr>
<td>MRP</td>
<td><input type="text" name="mrp" label="mrp"></input></td>
</tr>
<tr>
<td>Selling Price</td>
<td><input type="text" name="sellingprice" label="sellingprice"></input></td>
</tr>
<tr>
<td>Fullfillment Mode</td>
<td><input type="text" name="fullfillmentmode" label="fullfillmentmode"></input></td>
</tr>
<tr>
<td>COURIER TYPE</td>
<td><input type="text" name="couriertype" label="couriertype"></input></td>
</tr>
<tr>
<td>Wooden Packaging</td>
<td><input type="text" name="woodenpackaging" label="woodenpackaging"></input></td>
</tr>
<tr>
<td>Volumetric Weight</td>
<td><input type="text" name="vw" label="vw"></input></td>
</tr>
<tr>
<td>Inventory</td>
<td><input type="text" name="inventory" label="inventory"></input></td>
</tr>
<tr>
<td>Shipping time in days</td>
<td><input type="number" name="days" label="days"></input></td>
</tr>
</table>
<input type="submit" name="save"></input>
<input id ="back"type="button" name="back" value="Back"></input>
</div>
</form>
</body>







				
					

			</div>
			<!-- END Featured Items -->
			<!-- Bestsellers -->
			<div class="items">
				<div class="shell">
					<h4>Best Sellers</h4>
					<div class="products-slider">
						<ul>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item1.jpg" alt="" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item2.jpg" alt="" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div> 
								</div>
							</li>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item3.jpg" alt="Images of sunglasses" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item4.jpg" alt="Images of sunglasses" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item1.jpg" alt="Images of sunglasses" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div> 
								</div>
							</li>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item2.jpg" alt="Images of sunglasses" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div>
								</div>
							</li>
							<li>
								<div class="product">
									<div class="img-holder">	
										<a title="View product" href="#"><img src="css/images/item3.jpg" alt="Images of sunglasses" /></a>
									</div>								
									<div class="img-bottom"></div>
									<div class="price-box">
										<p>price</p>
										<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
									</div>
									<div class="product-entry">
										<p class="model">Sunglasses<br /> Model</p>
										<p class="model"><span>product: 76</span></p>									
									</div>
								</div>
							</li>						
						</ul>
					</div>
				</div>	
			</div>	
			<!-- END Bestsellers -->		
			<div class="columns">
				<div class="shell">
					<div class="post">
						<div class="col about">
							<p class="heading">about sunglasses</p>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur in sem mauris. Etiam nec ipsum a est facilisis fermentum mollis congue nibh. Proin porta pharetra mauris ac facilisis. Donec elementum imperdiet ante vel malesuada.</p>
							<a title="Read more" href="#">&raquo;&nbsp;read more</a>
						</div>
						<div class="col categories">
							<p class="heading">categories</p>
							<ul>
								<li><a title="Men sunglasses" href="#">Men</a></li>
								<li><a title="Women sunglasses" href="#">Women</a></li>
								<li><a title="Children sunglasses" href="#">Childern</a></li>						
							</ul>
						</div>
						<div class="col info">
							<p class="heading">informations</p>
							<ul class="first">
								<li><a title="Shopping Bag" href="#">Shopping Bag</a></li>
								<li><a title="Returns" href="#">Returns</a></li>
								<li><a title="Search" href="#">Search</a></li>						
							</ul>
							<ul>
								<li><a title="About Us" href="#">About Us</a></li>
								<li><a title=" Terms Of Service" href="#"> Terms Of Service</a></li>
								<li><a title="Privacy Policy" href="#">Privacy Policy</a></li>						
							</ul>
						</div>
						<div class="cl"></div>
					</div>						
				</div>					
			</div>			
		</div>
		<!-- END Main  -->
		<div id="footer-push"></div>
	</div>
	<!-- END Wrapper -->
	<!-- Footer -->
	<div id="footer">
		
	</div>
	<!-- END Footer -->
</body>	
</html>