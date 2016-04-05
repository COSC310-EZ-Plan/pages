<!DOCTYPE html>
<?php
session_start();
require "connection.php";
$uid = $_SESSION["uid"];
$email = $_SESSION["email"];
//$email = "jdoe@gmail.com"; //test
$name; //john doe
$year; //1
$degree;
$major; //compsci
$currentcred = 0; 
$requiredcred; 
$remaining = $requiredcred - $currentcred;
//DATABASE STUFF BELOW

$conn = getConnection();
//GET DEGREE STUFF, ADD CORRECT CREDIT REQ TO VARIABLES
$sql = "SELECT* FROM User where email= '$email'";
$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(mysqli_num_rows($res) < 1){
    header ("Location: index.php"); // This user is not recognized so kick back to landing page.
    exit; 
}
else{
    while ($row = mysqli_fetch_array($res)) 
	{
		$name = stripslashes($row['fname'])." ".stripslashes($row['lname']);
		$year = stripslashes($row['year']);
		$degree = stripslashes($row['umajor']);
		$email = stripslashes($row['email']);
                $uid = stripslashes($row['uid']);
	}
    $res -> free();
}
$major = substr($degree,strpos($degree,",")+2);
//echo "Query:".$year.",".$name.",",$major.",".$uid; //test echo
$sql2 = "SELECT* FROM UserCourse where uid = '$uid'";   
$res2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));  //get users courses
if(mysqli_num_rows($res2) > 0){
    while ($row = mysqli_fetch_array($res2)){   //counting credits based off each course in userCourse
           $cc = $row["cname"];
           $sql3 = "SELECT credits FROM Course where cname = '$cc'";
           $res3 = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
           if(mysqli_num_rows($res2) < 1){
                echo "<h1>No rows found...</h1>"; // This should never happen or we have an inconsistant database.
           }
           else{
               while ($row = mysqli_fetch_array($res3)){
                   $currentcred += $row['credits'];
               }
           }
	}
    $res2 -> free();
    $res3 -> free();
}
$sql4 = "SELECT mincredits FROM DegreeType where degree = '$degree'";
$res4 = mysqli_query($conn,$sql4) or die(mysqli_error($conn));
if(mysqli_num_rows($res4) < 1){
    echo "<h1>No rows found...</h1>"; // This should never happen or we have an inconsistant database.
}
else{
    while($row = mysqli_fetch_array($res4)){
        $requiredcred = $row['mincredits'];
    }
    $res4 -> free();
}
//echo $requiredcred; //test echo
?>
<html>
    <head>
        <title>Compare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="ezplan_css.css">
        <style>
            table,th,tr,td{
                z-index: -10;
            }
            th{
                border-style: hidden;
            }
            tr,td{
                border-style: hidden;
                padding-left: 5px;
                padding-right: 5px;
            }
            table{
                border-style: ridge;
                border-color: powderblue;
                border-width: 5px;
            }
            #wrapper{
                position: relative;
                width: 100%;
            }
            #userinfo{
                background-color: lightcyan;
                width: 600px;
                height: 440px;
                position: absolute;
                left: 75px;
                top: 100px;
                overflow-x: auto;
                overflow-y: auto;
            }
            #degreeinfo{
                background-color: lightcyan;
                width: 600px;
                height: 440px;
                right: 100px;
                top: 100px;
                position:absolute;
                overflow-x: auto;
                overflow-y: auto;
            }
            #userheader{
                background-color: white;
                height: 40px;
            }
            #degreeheader{
                background-color: white;
                height: 40px;
            }
            form{
                text-align: center;
            }
            footer{
                position: absolute;
                bottom: 8px;
                width: 98.7%;
            }
          
        </style>
    </head>
    <body>
        <?php include "header.php";?>
        <div id="wrapper">
            <table id ="userinfo">
                <th><h2>Welcome <?php echo $name;?>!</h2></th>
                <tr>
                    <td>
                        <p>You are currently registered in year <?php echo $year;?> of a <?php echo $degree;?> degree.</p>
                        <p>EZ-Plan is here to help you with scheduling and planning your degree over the course of your university career.</p>
                        <p>Select from a variety of options from the top menu bar to get started!</p>
                        <p>If you would like to update your display name or any other information regarding your account, either click on the button below or select 'My Information' from the top menu bar if you are on any other page.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form name="edit info" action = "my_info_edit.php">
                        <input type="submit" value ="edit info"/>
                        </form>
                    </td>
                </tr>
            </table>
            <table id="degreeinfo">
                <th><h2>Degree Overview</h2></th>
                <tr>
                    <td>
                        <form method = "POST">
                            <select>
                                <option value = "<?php $major ?>"><?php echo $major;?></option>
                            </select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p> Required Credits: <?php echo $requiredcred;?> </p></br>
                        <p> Current Credits: <?php echo $currentcred;?></p></br>  
                        <p> To see a more detailed breakdown and customize your schedule, click the button below.</p></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form name="edit schedule" action = "edit_degree_page.php">
                        <input type="submit" value ="edit schedule"/>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <?php include "footer.php";?>
    </body>
</html>