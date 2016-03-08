<?php
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$cPassword = $_POST["cPassword"];
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
            
            <div>
                <form method="post" action="" style="width:30%">
                    <fieldset>
                        <legend>Register</legend>
                    Username:<input type="text" size="12" maxlength="12" name="Fname"><br/>
                    Password:<input type="password" size="25" maxlength="25" name="Password"><br/>
                    Confirm Password:<input type="password" size="25" maxlength="25" name="cPassword"><br/>
                    <input type="submit" value="submit" name="submit">
                    </fieldset>
                </form>
            </div>
<?php
} else {

}
?> 
