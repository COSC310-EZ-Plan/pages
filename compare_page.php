<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

//$con = mysqli_connect();
//if(mysqli_connect_errno()){
//printf("Connection to database failed");
//exit();
//}else{ 
$count = 0;
#Dummy variables for now, need to make connection to sql server and make appropriate calls to initialize the data
$totalCred1;
$completed1;
$remain1 = $totalCred1 - $completedCred1;
$DegName1 = "Test";
$reqC1 = "<li>Course 1</li>".
        "<li>Course 2</li>";
$elecC1 = "<li>Course 1</li>".
        "<li>Course 2</li>";
$displayR1 = "<div><p>Required Courses:</p>"
        . "<ul>".
        $reqC1.
        "</ul>".
        "</div>";
$displayE1 = "<div><p>Elective Courses:</p>"
        . "<ul>".
        $elecC1.
        "</ul>".
        "</div>";

$totalCred2;
$completed2;
$remain2 = $totalCred2 - $completedCred2;
$DegName2 = "Test";
$reqC2 = "<li>Course 1</li>".
        "<li>Course 2</li>";
$elecC2 = "<li>Course 1</li>".
        "<li>Course 2</li>";
$displayR2 = "<div><p>Required Courses:</p>"
        . "<ul>".
        $reqC2.
        "</ul>".
        "</div>";
$displayE2 = "<div><p>Elective Courses:</p>"
        . "<ul>".
        $elecC2.
        "</ul>".
        "</div>"; 

$totalCred3;
$completed3;
$remain3 = $totalCred3 - $completedCred3;
$DegName3 = "Test";
$reqC3 = "<li>Course 1</li>".
        "<li>Course 2</li>";
$elecC3 = "<li>Course 1</li>".
        "<li>Course 2</li>";
$displayR3 = "<div><p>Required Courses:</p>"
        . "<ul>".
        $reqC3.
        "</ul>".
        "</div>";
$displayE3 = "<div><p>Elective Courses:</p>"
        . "<ul>".
        $elecC3.
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
                            <div><p style = "font-size: 20px; text-align:center;"><b><?php echo $DegName1 ?></b></p></div>
                            <div><pre>
Total Credits:
Remaining:
                            </pre></div>
                            <?php echo $displayR1 ?>
                            <?php echo $displayE1 ?>
                        </td>
                    </tr>
                </table>
            </div>
             <div id = "content2" style = "display: none;">
                <table id = "selection2" class = "hidden" style = "">
                    <tr>
                        <td>
                            <div><p style = "font-size: 20px; text-align:center;"><b><?php echo $DegName2 ?></b></p></div>
                            <div><pre>
Total Credits:
Remaining:
                            </pre></div>
                            <?php echo $displayR2 ?>
                            <?php echo $displayE2 ?>
                        </td>
                    </tr>
                </table>
            </div>
             <div id = "content3" style = "display: none;">
                <table id = "selection3" class = "hidden" style = "">
                    <tr>
                        <td>
                            <div><p style = "font-size: 20px; text-align:center;"><b><?php echo $DegName3 ?></b></p></div>
                            <div><pre>
Total Credits:
Remaining:
                            </pre></div>
                            <?php echo $displayR3 ?>
                            <?php echo $displayE3 ?>
                        </td>
                    </tr>
                </table>
            </div>
            <table id = "add" class = "new" style = "margin-left: 25px;">
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
        <?php
            function addData1(){
                global $count;
                global $totalCred1;
                global $completed1;
                global $remain1;
                global $DegName1;
                global $reqC1;
                global $elecC1;
                global $remain1;
                if($count == 0){
                    
                    $count ++;
                }
                else if($count == 1){
                    
                    $count ++;
                }
                else{
                    
                    $count ++;
                }
            }
            
            function addData2(){
                global $count;
                global $totalCred2;
                global $completed2;
                global $remain2;
                global $DegName2;
                global $reqC2;
                global $elecC2;
                global $remain2;
                if($count == 0){
                    
                    $count ++;
                }
                else if($count == 1){
                    
                    $count ++;
                }
                else{
                    
                    $count ++;
                }
            }
            
            function addData3(){
                global $count;
                global $totalCred3;
                global $completed3;
                global $remain3;
                global $DegName3;
                global $reqC3;
                global $elecC3;
                global $remain3;
                if($count == 0){
                    
                    $count ++;
                }
                else if($count == 1){
                    
                    $count ++;
                }
                else{
                    
                    $count ++;
                }
            }
        
        ?>
        <script>
            var count = 0;
            var x;
            var y;
            var z;
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
                    if(count > 2){
                        z = document.getElementById("add");
                        z.style = "display:none;";
                    }
                
            }
            
        </script>
    </body>
</html>
