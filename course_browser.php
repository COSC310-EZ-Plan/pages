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
                width: 1000px;
                height: 500px;
                background-color: cyan;
                border: solid;
                border-collapse: collapse;
                margin: 100px 100px 100px 500px;
            }
            .hide { 
                list-style-type: none;
                list-style-position:inside;
                margin:0px;
                padding:0px;
            }
            form{
                position: fixed;
                top: 50%;
                left:50%;
            }
           
        </style>
    </head>
    <body>
        <div id = "wrapper">
            <div id = "header">
                    <button class ='homebtn' onclick ='location.href="http://google.com"'> Home </button>
                    <button class ='myinfobtn' onclick ='location.href="http://google.com"'> myInfo </button>
                    <button class ='myschedbtn' onclick ='location.href="http://google.com"'> mySchedule </button>
                    <button class ='coursebtn' onclick ='location.href="http://google.com"'> Course Browser </button>
            </div>
               
            <form name = "form1" method="post" action="searchresults.php">
                <input name ="search" type="text" size="40" maxlength="50" />
                <input type="submit" name="Submit" value="Search" />
               
            </form>
                
            </div>
        
    </body>
</html>
