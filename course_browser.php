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
            <div>
                <table>
                    <caption>
                        <div style ="display: inline-block; clear:both; float:right;">
                                <div class = "sort">
                                    <span>Name</span>
                                        <div class = "sortdropcont">
                                            <a href="#">sample</a>
                                         </div>
                                </div>
                                <div class = "sort">
                                    <span>Name</span>
                                        <div class = "sortdropcont">
                                            <a href="#">sample</a>
                                         </div>
                                </div>
                                <div class = "sort">
                                    <span>Name</span>
                                        <div class = "sortdropcont">
                                            <a href="#">sample</a>
                                         </div>
                                </div>
                            <input style = "width:25%" id ='search' placeholder ='search'>
                         </div>
                    </caption>
                    <tr style = "border-right: solid">
                        <th style = "line-height: 50px; border-right: solid; overflow-y: auto;">
                            <ul class = "hide">
                                <li><a href ="#href"> Course 1</a></li>
                                <li><a href ="#href"> Course 2</a></li>
                                <li><a href ="#href"> Course 3</a></li>
                                <li><a href ="#href"> Course 4</a></li>
                                <li><a href ="#href"> Course 5</a></li>
                            </ul>
                        </th>
                        <th style = "overflow-y: auto;">
                            <div>
                                <p style = "text-align: left; margin-left: 25px; vertical-align: top; font-size:20px;"><b><u>Course Info</u> </b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> Title:  </b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> Description:  </b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> Credits:  </b></p>
                            </div>
                            <div>
                                <p style = "text-align: left; margin-left: 25px;"><b> Pre-reqs:</b></p>
                                <ul>
                                    <li>PR-A</li>
                                    <li>PR-B</li>
                                </ul>
                            </div>
                        </th>
                    </tr>
                </table>
                </div>
            </div>
        
    </body>
</html>
