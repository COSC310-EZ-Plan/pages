<?php
$YearStanding = $_POST["YearStanding"];
$Degree = $_POST["Degree"];
$XferCredit = $_POST["XferCredit"];
$Interest = $_POST["Interest"];
if (!isset($_POST['submit'])) { // if page is not submitted to itself echo the form
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                position: relative;
                display: inline-block;
                border: solid;
                cursor: pointer;
                display: inline-block;
                
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
                height: 400px;
                padding-left: 25px;
                padding-right: 25px;
                float: left;
                overflow-x: auto;
                overflow-y: auto;
                
            }
            #degreeinfo{
                background-color: cyan;
                width: 600px;
                height: 400px;
                padding-left: 25px;
                padding-right: 25px;
                float: right;
                overflow-x: auto;
                overflow-y: auto;
            }
            .reveal-if-yes {
             opacity: 0;
             max-height: 0;
             overflow: hidden;
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
            

                <form method="post" action="" style="width:30%">
                    <fieldset>
                        <legend>My Info Edit</legend>
                        Year Standing:<input type="numbers" size="12" maxlength="2" name="YearStanding"><br/>
                        Current Degree:<input type="text" size="12" maxlength="20" name="Degree"><br/>
                        Do you have transfer credits? If yes then type in below the format Course/Amount or if no then leave blank:<br/>
                        <textarea name="XferCredit" rows="8" cols="400">
                        Ex. Cosc/3
                        </textarea><br/>
                        <br/>
                        Insert tags for courses that you might be interested in seperated by ",":
                        <textarea name="Interest" rows="8" cols="400">
                        Ex. Cosc, computerscience, science, computer
                        </textarea><br/>
                        
                        <input type="submit" value="Update" name="submit">                    
                </form>
            </div>
<?php
} else {

}
?> 
