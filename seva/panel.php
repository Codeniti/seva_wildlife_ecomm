<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Collapse content</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
  });
  

  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">My Account</a></li>
    <li><a href="#tabs-2">Catalogue</a></li>
    <li><a href="#tabs-3">Vendors</a></li>
    <li><a href="#tabs-4">Reports</a></li>
  </ul>
  <div id="tabs-1">
   
    <div>
		<input type="button" value="ADD ADMIN USER" id="addadmin" name="addadmin">
		
		<div id="admin_form">
			<form action="add_admin.php" method="POST">
			
				<table>

				<tr>
					<td> Name<td/>
					<td> <input type="text" name="firstname" id="firstname" placeholder="First Name.."><td/>
					<td> <input type="text" name="lastname" id="lastname" placeholder="Last Name.."><td/>
				</tr>
				
				<tr>
					<td> Email  <td/>
					<td> <input type="text" name="email" id="email" placeholder="email.."><td/> 
				</tr>
				<tr>
				<td><input type="submit" value="Add" id="add" name="add"> </td>
				</tr>
				</table>
			</form>
		</div>
	
	</div>
  </div>
  <div id="tabs-2">
    <p><strong>Click this tab again to close the content pane.</strong></p>
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3">
    <p><strong>Click this tab again to close the content pane.</strong></p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
  <div id="tabs-4">
    <p><strong>Click this tab again to close the content pane.</strong></p>
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
</div>
 
 
</body>
</html>