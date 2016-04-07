<!DOCTYPE html>
<html>
    <head>
         <title>Browser</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="ezplan_css.css">
        <style>
            html, body, #wrapper{ 
                height: 100%;
            }
            body
            {
                font-size: 14pt;
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
            
            .hide { 
                list-style-type: none;
                list-style-position:inside;
                margin:0px;
                padding:0px;
            }
            footer{
                position: absolute;
                bottom: 7px;
                width: 98.7%;
            }
            input[type=submit]
            {
                margin-top: 10px;
                padding: 10px 20px;
                color: white;
                background-color: cadetblue;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13pt;
            }
            input[type=text]
            {
                width: 90%;
                padding: 5px;
                margin-bottom: 10px;
                display: inline-block;
                border: 2px solid #000;
                border-radius: 4px;
            }
           form
            {
                background-color: white;
                width: 20%;
                padding: 20px;
                border-style: solid;
                border-width: 1px;
                border-radius: 4px;
                border-color: grey;
                
            }
        </style>
    </head>
    <body>
        <?php include "header.php";?>
        <h1 style="text-align:center">Course Browser</h1>
        <div id = "wrapper" align="center">
            <form name = "form1" method="get" action="searchresults.php">
                <input name ="course" type="text" size="40" maxlength="50" />
                <input type="submit" name="Submit" value="Search" />
            </form>
        </div>
        <?php include "footer.php";?>
    </body>
</html>
