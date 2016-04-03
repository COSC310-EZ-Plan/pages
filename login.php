<!DOCTYPE html>
<?php 
	// Set up session and database connection
	session_start(); 
	require "connection.php";
?>
<html>
<head>
<title>validating...</title>
</head>
<body>
<?php
	//User passed in variables
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');;
	
	//Get connection
    	$con = getConnection();
	
	//query the database to see if email in use.
	$sql = "SELECT * FROM User WHERE email = '".$email."' AND password = PASSWORD('".$password."')";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
	
	if (mysqli_num_rows($result) == 1)
	{
		$fname = "";
		$lname = "";
    
		//if authorized, get the values of FirstName LastName
		while ($info = mysqli_fetch_array($result)) 
		{
			$fname = stripslashes($info['fname']);
			$lname = stripslashes($info['lname']);
			$email = stripslashes($info['email']);
			$uid = stripslashes($info['uid']);
		}
		
		//set session items for user to be used throughout website
		$_SESSION["fname"] = $fname;
		$_SESSION["lname"] = $lname;
		$_SESSION["email"] = $email;
		$_SESSION["uid"] = $uid;
				
		//set authorization cookie
		setcookie("auth", "1", time()+60*30, "/", "", 0);
				
		header("Location: home_page.php");
		exit;
	}
?>
</body>
</html>
