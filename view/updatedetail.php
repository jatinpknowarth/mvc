<?php 
include_once('model/db.php');

$row = $chk->fetch_assoc();

?>



<html>
<head>
<title>Update registration</title>
</head>
<body>

<form method=POST action="index.php">
	<table align="center">

			<tr>
				<td><label>First Name</label></td>
				<td><input type="text" name="first_name" value=<?php echo $row['first_name']; ?>></td>
			</tr>
			<tr>
				<td><label>Last Name</label></td>
				<td><input type="text" name="last_name" value=<?php echo $row['last_name']; ?>></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>

				<td><input type="radio" name="gender" value="Male"  <?php if($row['gender'] == "Male"):?>checked="checked"<?php endif;?> >Male
					<input type="radio" name="gender" value="Female" <?php if($row['gender'] == "Female"):?>checked="checked"<?php endif;?> >Female</td>
				
			</tr>
			<tr>
				<td><label>Mobile No</label></td>
				<td><input type="text" name="mobile" value=<?php echo $row['mobile']; ?>></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="email" id="email" required="required" value=<?php echo $row['email']; ?>>
				</td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password" id="password" value=<?php echo $row['password']; ?>></td>
			</tr>
			<tr>
				<td><label>Confirm Password</label></td>
				<td><input type="password" name="cpassword" id="cpassword" value=<?php echo $row['cpassword']; ?>></td>
			</tr>
			<tr>
				<td><label>Comapany</label></td>
				<td><input type="text" name="company" id="company" value=<?php echo $row['company']; ?>></td>
			</tr>
			<tr>
				<td><label>About Me</label></td>
				<td><textarea rows="10" cols="20" name="about" id="about" ><?php echo $row['about']; ?></textarea></td>
			</tr>
			<tr>
				<td><label>Address</label></td>
				<td><textarea rows="10" cols="20" name="address" id="address" ><?php echo $row['address']; ?>
				</textarea></td>
			</tr>
			<tr>
				<td><label>Country</label></td>
				<td><select name="country" id="countryid">
						<option >Select Country</option>
						<option <?php if($row['country'] == "India"):?>selected="selected"<?php endif;?>value="India">India</option>
						<option <?php if($row['country'] == "China"):?>selected="selected"<?php endif;?>value="China">China</option>
						<option <?php if($row['country'] == "Srilanka"):?>selected="selected"<?php endif;?>value="Srilanka">Srilanka</option>
						<option <?php if($row['country'] == "Bagladesh"):?>selected="selected"<?php endif;?>value="Bagladesh">Bagladesh</option>
				</select></td>
			</tr>
			<tr>
				<td><label>State</label></td>
				<td><select name="state" id="mystate">
						<option>Select State</option>
						<option <?php if($row['state'] == "Gujarat"):?>selected="selected"<?php endif;?>value="Gujarat">Gujarat</option>
						<option <?php if($row['state'] == "MP"):?>selected="selected"<?php endif;?>value="MP">MP</option>
						<option <?php if($row['state'] == "Goa"):?>selected="selected"<?php endif;?>value="Goa">Goa</option>
					</select> 
			</tr>
			<tr align="center">
				<td align="center" colspan="2">
				<input type="submit" id="myBtn" name="update" value="update"/> 
			
			</tr>

	</table>
	<input type="hidden" name="rid" value=<?php echo $row['rid']; ?>>
</form>

</body>
</html>