<?php
include_once 'model/db.php';

class model
{
	public function reg(){
		global $db;
		$fname = $_REQUEST['first_name'];
		$lname = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$company = $_REQUEST['company'];
		$about = $_REQUEST['about'];
		$address = $_REQUEST['address'];
		$state = $_REQUEST['state'];
		$country = $_REQUEST['country'];
		
		$query = "insert into regi(first_name,last_name,gender,mobile,email,password,cpassword,company,about,address,state,country)values('$fname','$lname','$gender','$mobile','$email','$password','$cpassword','$company','$about','$address','$state','$country')";
		$result = $db->query($query);
		if($result)
		{
			echo "<script type='text/javascript'>
			alert('1 Record Inserted...')
			location.href='index.php';
			</script>";
		
		}
		else
		{
			echo "<script type='text/javascript'>alert('Opration Failed');location.href='index.php';</script>";
		}
	}
	
	
	
	public function updatedetail(){
		global $db;
		$rid = $_REQUEST['rid'];
		$fname = $_REQUEST['first_name'];
		$lname = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$company = $_REQUEST['company'];
		$about = $_REQUEST['about'];
		$address = $_REQUEST['address'];
		$state = $_REQUEST['state'];
		$country = $_REQUEST['country'];
		/*print $rid;
		print $email;
		exit;*/
		$query="update regi set first_name='$fname',last_name='$lname',gender='$gender',mobile=$mobile,email='$email',password='$password',cpassword='$cpassword',company='$company',about='$about',address='$address',state='$state',country='$country' where rid=$rid";
		$result = $db->query($query);
		if($result)
		{
			echo "<script type='text/javascript'>
			alert('1 Record Updated...')
			location.href='index.php';
			</script>";
		
		}
		else
		{
			echo "<script type='text/javascript'>alert('Opration Failed');location.href='index.php';</script>";
		}
	
	}
	
	public function chcklogin(){
		global $db;
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['password'];

		$query="select * from regi where email='$email' and password='$pass'";
		$result = $db->query($query);
		if ($result->num_rows ==1) {
			$_SESSION['login_user']=$email; // Initializing Session
			header("location: index.php"); // Redirecting To Other Page
		}
		else {
			echo "<script type='text/javascript'>
			alert('username and password is invalid...')
			location.href='index.php';
			</script>";
		}
	}
	
	public function getdetail(){
		global $db;
		$email=$_SESSION['login_user'];
		$query="select * from regi where email='$email'";
		return  $db->query($query);
		
	}
	
	public function logout(){
		session_destroy();
		header("Location: index.php");
	}
	
	public function deletedetail(){
		global $db;
		
		$rid = $_REQUEST['deleteid'];
		
		$query = "delete from regi where rid=$rid";
		$result = $db->query($query);
		
		if($result-> num_rows==0){
			session_destroy();
			header("location: index.php");	
		}
		
		else{
			echo "<script type='text/javascript'>
			alert('error in delete details...')
			location.href='index.php';
			</script>";
		}
	}
	
}

?>