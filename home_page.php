<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require 'connection.php';
include 'header.php';

// Set up connection; redirect to log in if cannot connect or not logged in
if (filter_input(INPUT_COOKIE, "auth") != 1) {
    header("Location: index.php");
}

$name = filter_input(INPUT_POST, "fname");
$year = "test1";
$major = "test2";
$currentcred = 30; //test
$requiredcred = 120; //test
$remaining = $requiredcred - $currentcred;
//DATABASE STUFF BELOW
/*
$conn = mysqli_connect("cosc304.ok.ubc.ca/db_ioyedele", "ioyedele", "36547123", "EZPLAN?");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 

//GET DEGREE STUFF, ADD CORRECT CREDIT REQ TO VARIABLES
$sql = "SELECT* FROM User where uid = $uid";
$res = $conn->query($sql);
    if($res){
       while ($row = mysqli_fetch_array($res)){
           $name = $row["fname"] + " " + $row["lastname"];
           $major = $row["umajor"];
           $year = $row["year"];
       }
    }else{
        echo "NO RESULTS.";
    }
$sql2 = "SELECT* FROM UserCourse where uid = $uid";
$res2 = $conn->query($sql2);
    if($res2){
       while ($row = mysqli_fetch_array($res2)){
           $cc = $row["cname"];
           $sql3 = "SELECT *insert credit thingy here* FROM Course where cname = $cc";
           $res3 = $conn->query($sql3);
           if(is_numeric($res3)){
              $currentcred += $res3;
           }else{
               echo "NO RESULTS.";
           }
       }
    }else{
        echo "NO RESULTS.";
    }
*/
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="ezplan_css.css">
        <style>
            html, body, #wrapper{ 
                height: 100%;
            }
            .degdrop{
               
                border: solid;
                cursor: pointer;
                 
                
            }
            .degdropcont{
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 100px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                padding-left:6px;
            }
            .degdrop:hover .degdropcont{
                display:block;
            }
            #userinfo{
                background-color: cyan;
                width: 600px;
                height: 440px;
                position: absolute;
                left:0;
                overflow-x: auto;
                overflow-y: auto;
                
            }
            #degreeinfo{
                background-color: cyan;
                width: 600px;
                height: 440px;
                right:0;
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
            <!-- something needs to be done here to stop that random-ass whitespace -->
            #degreeheader,#userheader > h3:first-child{
                
            }
          
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div style = "display: inline-block;">
                <div id ="userinfo">
                    <div id ="userheader">
                        <h3><?php echo $name; ?></h3>
                    </div>
                    <p style = "left:0">
                    Year Standing: <?php echo $year; ?>
                    </p></br>
                    <p style = "left:0">
                    Current Degree: <?php echo $major; ?>
                    </p>
                    <form name="edit info" action = "#href">
                        <input type="submit" value ="edit info" style ="position:relative; top: 10px; left:250px;"/> 
                    </div>
                </div>
                <div id ="degreeinfo">
                    <!-- need to fix this selector -->
                    <div id ="degreeheader" style = "display: inline-block;">
                        <h3>Degree Profiles</h3>
                        <div class = "degdrop">
                            <span>Degree Overview</span>
                            <div class = "degdropcont">
                                <a href="#">sample</a>
                            </div>
                        </div>
                    </div>
                    <table id = "breakdown">
                    <tr>
                        <td>
                            <div><p style = "font-size: 20px; text-align:center;"><b><?php echo $major ?></b></p></div>
                            <div>
                                <p style = "left:0">
                                Total Credits Required: <?php echo $requiredcred; ?>
                                </p>
                                <p style = "left:0">
                                Current Credits: <?php echo $currentcred; ?>
                                </p>
                                <p style = "left:0">
                                Remaining Credits: <?php echo $remaining; ?>
                                </p> 
                            </div>
                            <?php echo $displayR ?>
                            <?php echo $displayE ?>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include 'footer.php'; ?>