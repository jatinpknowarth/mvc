<html>
<head>
<title>registration</title>
</head>
<body>

<form method=POST action="index.php">
	<table align="center">

			<tr>
				<td><label>First Name</label></td>
				<td><input type="text" name="first_name"></td>
			</tr>
			<tr>
				<td><label>Last Name</label></td>
				<td><input type="text" name="last_name" ></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>

				<td><input type="radio" name="gender" value="Male" checked="checked">Male
					<input type="radio" name="gender" value="Female">Female</td>
				
			</tr>
			<tr>
				<td><label>Mobile No</label></td>
				<td><input type="text" name="mobile" ></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="email" id="email" required="required">
				</td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td><label>Confirm Password</label></td>
				<td><input type="password" name="cpassword" id="cpassword"></td>
			</tr>
			<tr>
				<td><label>Comapany</label></td>
				<td><input type="text" name="company" id="company"></td>
			</tr>
			<tr>
				<td><label>About Me</label></td>
				<td><textarea rows="10" cols="20" name="about" id="about"></textarea></td>
			</tr>
			<tr>
				<td><label>Address</label></td>
				<td><textarea rows="10" cols="20" name="address" id="address"></textarea></td>
			</tr>
			<tr>
				<td><label>Country</label></td>
				<td><select name="country" id="countryid">
						<option value="0" selected="selected">Select Country</option>
						<option value="India">India</option>
						<option value="China">China</option>
						<option value="Srilanka">Srilanka</option>
						<option value="Bagladesh">Bagladesh</option>
				</select></td>
			</tr>
			<tr>
				<td><label>State</label></td>
				<td><select name="state" id="mystate">
						<option selected="selected">Select State</option>
						<option value="Gujarat">Gujarat</option>
						<option value="MP">MP</option>
						<option value="Goa">Goa</option>
					</select> 
			</tr>
			<tr align="center">
				<td align="center" colspan="2">
				<input type="submit" id="myBtn" name="register" value="register"/> 
			
			</tr>

	</table>
</form>

</body>
</html>