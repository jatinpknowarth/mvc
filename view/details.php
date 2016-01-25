<html>
<body>
<form method="post" action="index.php">
<table border=1 align="center">
<tr>
	
	<td>rid</td>
	<td>first_name</td>
	<td>last_name</td>
	<td>gender</td>
	<td>mobile</td>
	<td>email</td>
	<td>password</td>
	<td>cpassword</td>
	<td>company</td>
	<td>about</td>
	<td>address</td>
	<td>state</td>
	<td>country</td>
	<td>Edit</td>
	<td>Delete</td>
	
</tr>
<?php 
include_once('model/db.php');

$row = $chk->fetch_assoc();

		echo '<tr><td>'.$row['rid'].'</td><td>'.$row['first_name'].'</td><td>'.$row['last_name'].'</td><td>'.$row['gender'].'</td><td>'.$row['mobile'].'</td><td>'.$row['email'].'</td><td>'.$row['password'].'</td><td>'.$row['cpassword'].'</td><td>'.$row['company'].'</td><td>'.$row['about'].'</td><td>'.$row['address'].'</td><td>'.$row['state'].'</td><td>'.$row['country'].'</td><td><a href=index.php?updateid='.$row['rid'].'>Update</a></td><td><a href=index.php?deleteid='.$row['rid'].'>Delete</a></td></tr>';

?>
</table>

</form>
<br>