<!DOCTYPE html>
<html>
<title>processing...</title>
<head></head>
<body style="background-color: powderblue">
<?php
    session_start();
	require "connection.php";
    
	//User passed in variables
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $cpassword = filter_input(INPUT_POST, 'cpassword');
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $major = filter_input(INPUT_POST, 'major');
    $year = filter_input(INPUT_POST, 'year');

    //Get connection
    $con = getConnection();
	
	//query the database to see if email in use.
	$sql = "SELECT * FROM user WHERE email = '".$email."'";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
	
	if (!(mysqli_num_rows($result) > 0))
	{
		if (strcmp($password,$cpassword) === 0)
		{
			//sql query
			$sql = "INSERT INTO User ". 
				   "VALUES ('".$fname."','".$lname."',".$year.",'".$major."','".$email."'".
				   ",PASSWORD('".$password."'))";
			
			//query execution and handling
			if($con -> query($sql) === TRUE)
			{
				//set session items for user to be used throughout website
				$_SESSION["fname"] = $fname;
				$_SESSION["lname"] = $lname;
				$_SESSION["email"] = $email;
				
				//set authorization cookie
				setcookie("auth", "1", time()+60*30, "/", "", 0);
				
				header("Location: home_page.php");
				exit;
			}
			else
			{
				echo "<h1>Error: ".$sql."<br/>".$con->error."</h1>";
			}
			
			$con->close;
		}
		else
		{
			echo "<h1>Your passwords do not match.</h1>";
			echo "<a href='registerpage.php'>back</a>";
		}
	}
	else
	{
		echo "<h1>Sorry, this email has alredy been used.</h1>";
		echo "<a href='registerpage.php'>back</a>";
	}
?>
</body>
</html>