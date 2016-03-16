<?php
	//returns connection to 
	function getConnection()
	{
		//Local variables to maintain encapsulation
		$servername = "localhost";
		$username = "ileri";
		$password = "ezpiLaz!";
		$dbname = "ezplan";
		
		//Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        
        //Check connection
        if ($con -> connect_erroe)
        {
            die("Connection failed: ".$con -> connect_erroe);
        }
		
		return $con;
	}
?>