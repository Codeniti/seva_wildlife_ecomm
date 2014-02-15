	<HTML>
<head>
<style>
.text
{
height: 30;
width: 200;
margin-top: 10;
border-radius: 5px;
border-color: #888;
}

.button
{
height: 30;
width: 100;
}
</style>
</head>
<body>
<form action="user_reg.php" method='post'>
<table border='0' cellspacing='5' colspan='5'>
<tr>
<th width='150'>First Name</th><td align='center'> <input type='text' id='fname' name='fname' class='text'></input></td></tr>
<th>Last Name</th><td align='center'><input type='text' id='lname' name='lname' class='text'></input></td></tr>
<tr>
<th>Gender</th><td>Male&nbsp;<input type='radio' name='gender' value='m'></input>&nbsp;&nbsp;
Female<input type='radio' name='gender' value='f'></input></td></tr>
<tr>
<th>Email</th><td align='center'><input type="email" name='email' id='email' class='text' required></td>
</tr>
<tr>
<th>Password</th>
<td align='center'><input type="password" name='pass' id='pass' class='text'><div id='error'  required></div></td></tr>
<tr>
<th>Age</th>
<td align='center'><input type="text" name='age' id='age' class='text'></td></tr>
<tr>
<th>Contact us</th>
<td align='center'>Landline&nbsp;&nbsp;<input type="tel" name='landline' class='text' style='width:130' id='landline'><br>Mobile &nbsp;&nbsp;&nbsp;<input type="tel" style='width:130;margin-top:10;' class='text' name='mobile' id='mobile'></td></tr>
<tr>
<th>Address</th>
<td>Line1 &nbsp;&nbsp;<input type="text" name='line1' id='line1' class='text'><br>
Line2 &nbsp;&nbsp;<input type="text" name='line2' id='line2' class='text'>
</td>
</tr>
<tr>
<th>state<th>
<select  class='text'id='state' name="state">
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
</select>
</tr>

<tr>
<th>City</th>
<td align='center'>
<input type='text' name='city' id='city' class='text'></input>
</td>
</tr>
<tr><th>Pin code</th><td align='center'>
<input type='text' name='pin' class='text'id='pin'>
</td></tr>
<tr>
<th>Billing Address</th>
<td height="50" align='center'>
<input type='textarea' name='b_address' class='text'id='b_address' style='height:60;width:200'></input>
<br><input type="radio" name='b_radio'>Same as above</input>
</td>
</tr>

<tr>
<th>Shipping Address</th>
<td height="50" align='center'>
<input type='textarea' name='s_address' id='s _address' class='text' style='height:60;width:200'></input>
<br><input type="radio" name='s_radio'>Same as above</input>
</td>
</tr>
<tr align='center '><td colspan='2'><input type='submit' style='margin-top:20px;' class='button'></input><td></tr>
</table>
</form>
</body>
</html>