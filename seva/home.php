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
	  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



<script>	
$(document).ready(function(){
//alert('lll');
$('#ts').click(function(){
//alert('call');
	var m="tshirt";	
	//alert(m);
	$.ajax({
		type:'get',
		url:'ajax.php',
		data:'m='+m,
		success:function(res){
		//alert(res);
		$('#products').html(res);
		}
	
	})
					
});
})


function dia()
{
	$(this).dialog();
}
</script>	

<script>

</script>
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
					<ul style='float:left'>
						<li><a title="Home" href="home.php">Home<span></span></a></li>
						<li><a title="Products" href="add.php">Add Products<span></span></a></li>
						<li><a title=" About Us" href="About_us.html">About Us<span></span></a></li>
						<li><a title="Contactus.html" href="#">Contact Us<span></span></a></li>
						
					</ul>
					<ul style='float:right'>
					<li><a title="Home" href="admin_login.php">Home<span></span></a></li>
					<li><a title="Products" href="add.php">Add Products<span></span></a></li>
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
					<h4>Featured Items</h4>
					<div class="shop-by">
						<ul>
							<li>Shop by:</li>
							<li id='ts' style="cursor:pointer">T-Shirt </li>
							<li style="cursor:pointer">Bags</li>
													
						</ul>		
					</div>
					<!-- Products -->
					<div class="products"  id="products" style='height:auto;overflow-y:auto'>

					
					
					
					
				



						<div class="cl"></div>
					</div>
					<!-- END Products -->
				</div>
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
										<p class="price"><span class="dollar">Rs</span>284<sup>.99</sup></p>
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
										<p class="price"><span class="dollar">Rs</span>284<sup>.99</sup></p>
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
										<p class="price"><span class="dollar">Rs</span>284</p>
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
										<p class="price"><span class="dollar">Rs</span>284<sup>.99</sup></p>
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
										<p class="price"><span class="dollar">Rs</span>284<sup>.99</sup></p>
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
										<p class="price"><span class="dollar">Rs</span>284</p>
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
										<p class="price"><span class="dollar">Rs</span>284</p>
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
							<p class="heading">about seva wildlife</p>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur in sem mauris. Etiam nec ipsum a est facilisis fermentum mollis congue nibh. Proin porta pharetra mauris ac facilisis. Donec elementum imperdiet ante vel malesuada.</p>
							<a title="Read more" href="#">&raquo;&nbsp;read more</a>
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