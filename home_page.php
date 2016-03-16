<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php


$totalCred;
$completed;
$remain = total - completed;
$DegName = "Test";
$reqC = "<li>Course 1</li>
        <li>Course 2</li>";
$elecC = "<li>Course 1</li>
        <li>Course 2</li>";
$displayR = "<div><p>Required Courses:</p>
        <ul>".
        "$reqC".
        "</ul>
        </div>";
$displayE = "<div><p>Elective Courses:</p>
        <ul>".
        "$elecC".
        "</ul>
        </div>"; 

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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
            <div id = "header">
                    <button class ='homebtn' onclick ='location.href="http://google.com"'> Home </button>
                    <button class ='myinfobtn' onclick ='location.href="http://google.com"'> myInfo </button>
                    <button class ='myschedbtn' onclick ='location.href="http://google.com"'> mySchedule </button>
                    <button class ='coursebtn' onclick ='location.href="http://google.com"'> Course Browser </button>
            </div>
            <div style = "display: inline-block;">
                <div id ="userinfo">
                    <div id ="userheader">
                        <h3>Username</h3>
                    </div>
                    <pre>
Year Standing: 
Current Degree:
Xfer Credits:
                    </pre>
                    <ul>
                        <li>xfer 1</li>
                        <li>xfer 2</li>
                        <li>xfer 3</li>
                    </ul>
                    <p style = "text-align: left">Interests</p>
                    <ul>
                        <li>Interest 1</li>
                        <li>Interest 1</li>
                    </ul>
                    <form name="edit info" action = "#href">
                        <input type="submit" value ="edit info" style ="position:relative; top: 10px; left:250px;"/> 
                    </div>
                </div>
                <div id ="degreeinfo">
                    <!-- need to fix this selector -->
                    <div id ="degreeheader" style = "display: inline-block;">
                        <h3>Degree Profiles</h3>
                        <div class = "degdrop">
                            <span>Degree Name</span>
                            <div class = "degdropcont">
                                <a href="#">sample</a>
                            </div>
                        </div>
                    </div>
                    <table id = "breakdown">
                    <tr>
                        <td>
                            <div><p style = "font-size: 20px; text-align:center;"><b><?php echo $DegName ?></b></p></div>
                            <div><pre>
Total Credits:
Remaining:
                            </pre></div>
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
