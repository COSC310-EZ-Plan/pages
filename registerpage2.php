<!DOCTYPE html>
<html>
<title>processing...</title>
<head></head>
<body>
<?php
    session_start();
    
    $servername = "localhost";
    $username = "ileri";
    $password = "ezpiLaz!";
    $dbname = "ezplan";
    
    $Email = filter_input(INPUT_POST, 'email');
    $Password = filter_input(INPUT_POST, 'password');
    $cPassword = filter_input(INPUT_POST, 'cpassword');
    $FName = filter_input(INPUT_POST, 'fname');
    $LName = filter_input(INPUT_POST, 'lname');
    $Major = filter_input(INPUT_POST, 'major');
    $Year = filter_input(INPUT_POST, 'year');

    if ($Password === $cPassword)
    {
        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($con -> connect_erroe)
        {
            die("Connection failed: ".$con -> connect_erroe);
        }
        
        $sql = "INSERT INTO user (firstName, lastName, year, major, email, password) 
                VALUES ('".$FName."','".$LName."',".$Year.",'".$Major."','".$Email."',PASSWORD('".$Password."'))";
        
        if($con -> query($sql) === TRUE)
        {
            echo "<h1>New record created successfully</h1>";
        }
        else
        {
            echo "<h1>Error: ".$sql."<br/>".$con->error."</h1>";
        }
        
        $con->close;
    }
    else
    {
        header("Locatoion: registerpage.php");
        exit;
    }
?>
</body>
</html>