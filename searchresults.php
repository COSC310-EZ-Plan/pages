<?php
session_start();


$uid = $_SESSION["uid"];
$dbhost = "cosc304.ok.ubc.ca";
$dbuser = "ioyedele";
$dbpass = "36547123";
//connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$data = $_GET['course'];

if (!isset($data)) {
	header("Location: browser.php");
}
if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
// Query
$search_sql= "SELECT * FROM Course WHERE cname LIKE'%".$data."%' OR title LIKE'%".$data."%';"; 
mysql_select_db('db_ioyedele');
$search_query = mysql_query ($search_sql,$conn);

if(!$search_query){
    die('Could not get data: ' . mysql_error());
}
  
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title>Compare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="ezplan_css.css">
        <style>
            html, body, #wrapper{ 
                height: 100%;
            }
			
            #header{ 
                border-style: solid;
                width: 100%;
				
            }
           .homebtn {
                background-color: black;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                margin-left: 20px;
                display: inline-block;
                border-radius: 50%;
                
  
            }
           
            .myinfobtn {
                background-color: black;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                margin-left: 15px;
                display: inline-block;
                
                
            }
            
            .myschedbtn {
                background-color: black;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                display: inline-block;
                
                
            }
            .coursebtn {
                background-color: black;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                display: inline-block;
                
                
            }
            .sort{
                position: relative;
                display: inline-block;
                border: solid;
                cursor: pointer;
                display: inline-block;
                
            }
            .sortdropcont{
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 100px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                padding-left:6px;
            }
            .sort:hover .sortdropcont{
                display:block;
            }
            table{
                 border-style: ridge;
                border-color: powderblue;
                border-width: 5px;
                background-color: lightcyan;
                width: 600px;
                height: 440px;
                right: 100px;
                top: 100px;
                overflow-x: auto;
                overflow-y: auto;
                margin: 0px auto;
            }
            .hide { 
                list-style-type: none;
                list-style-position:inside;
                margin:0px;
                padding:0px;
            }
            
            #footer{
                position: fixed;
            }
           
        </style>
    </head>
    <body>
        <?php include "header.php";?>
        <div id = "wrapper">
            
            <div>
               
                       <div>
                          <p style = "text-align: left; margin-left: 25px; vertical-align: top; font-size:20px;"><b><u>Course Info</u> </b></p>
                       </div>
                        <?php while($row = mysql_fetch_array($search_query, MYSQL_ASSOC)){ 
                        //query results	
                            $cname = $row['cname'];
                            $title = $row['title'];
                            $description =$row['description'];
                            $credits = $row['credits'];
                            ?>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> <?php echo $cname ?></b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> <?php echo $title ?></b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> <?php echo $description ?></b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> <?php echo $credits ?></b></p>
                            </div>
                            <div>
                                <form action="addCourse.php" method="get">
                                    <button name="add" type="submit" value='<?php echo $cname?>'>Add Course</button>
                                </form>
                                
                                
                            </div>
                        <?php }
                        
                            
                        
                        ?>
                      
                        
                       
                      
                </div>
            </div>
        
                <?php include "footer.php";?>
    </body>
</html>

