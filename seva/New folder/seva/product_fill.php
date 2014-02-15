<!doctype html>
<html>
<head>
<script src="jquery-1.10.1.min.js"></script>
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
<td><textarea name="productdescription" label="productdescription"></textarea></td>
</tr>
</table>
<h3>Packaging dimensions:</h3><br/>
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

</html>