<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

#Dummy variables for now, need to make connection to sql server and make appropriate calls to initialize the data
$totalCred;
$completed;
$remain = total - completed;
$DegName = "Test";
$reqC = "<li>Course 1</li>".
        "<li>Course 2</li>";
$elecC = "<li>Course 1</li>".
        "<li>Course 2</li>";
$displayR = "<div><p>Required Courses:</p>"
        . "<ul>".
        $reqC.
        "</ul>".
        "</div>";
$displayE = "<div><p>Elective Courses:</p>"
        . "<ul>".
        $elecC.
        "</ul>".
        "</div>"; 
?>
<!-- Show initial set page if user has not selected compare yet -->
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
            table{
                width: 250px;
                height: 400px;
                background-color: cyan;
                border: solid black;
                float:left;
            }
            .new{
                border-style: dotted;
            }
            .hidden{
                width: 0px;
                height: 0px;
                border-style: hidden;
            }
        </style>  
    </head>
    <body>
        <!-- Header -->
        <div id = "wrapper">
            <div id = "header">
                    <button class ='homebtn' onclick ='location.href="http://google.com"'> Home </button>
                    <button class ='myinfobtn' onclick ='location.href="http://google.com"'> myInfo </button>
                    <button class ='myschedbtn' onclick ='location.href="http://google.com"'> mySchedule </button>
                    <button class ='coursebtn' onclick ='location.href="http://google.com"'> Course Browser </button>
            </div>
            <!-- End header -->
            <div id = "content1" style = "display: none;">
                <table id = "selection1" class = "hidden" style = "">
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
             <div id = "content2" style = "display: none;">
                <table id = "selection2" class = "hidden" style = "">
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
             <div id = "content3" style = "display: none;">
                <table id = "selection3" class = "hidden" style = "">
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
            <table class = "new" style = "margin-left: 25px;">
                <td>
                    <div>
                        <img src ='plus.ico' alt ='plus' onclick ='myF()' style="width:50px; height:50px; margin-left: auto; margin-right: auto; display:block;">
                    </div>
                </td>
            </table>
            <div>
                <input type="button" value = "Compare" name = "show" onclick = "location.href = '#href'" style="display:block; clear:both; margin-left: 250px; margin-top:150px;"/>
            </div>
        </div>
        <script>
            var count = 0;
            var x;
            var y;
            function myF(){
                if(count === 0){
                    x = document.getElementById("selection1");
                    x.style = "margin-left: 25px";
                    x.class = "";
                    y = document.getElementById("content1");
                    y.style = "display: block;";
                    count++;
                }
                else if(count === 1){
                    x = document.getElementById("selection2");
                    x.style = "margin-left: 25px";
                    x.class = "";
                    y = document.getElementById("content2");
                    y.style = "display: block;";
                    count++; 
                }
                else{
                   x = document.getElementById("selection3");
                   x.style = "margin-left: 25px";
                   x.class = "";
                   y = document.getElementById("content3");
                   y.style = "display: block;";
                   count++;
                }
            }
        </script>
    </body>
</html>
