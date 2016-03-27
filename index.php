<<<<<<< HEAD
<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>EZ-Plan: Welcome!</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            body
            {
                background-color: powderblue;
                font-size: 14pt;
            }
            
            #page
            {
                padding-top: 200px;
            }
            
            input[type=text], input[type=password]
            {
                width: 230px;
                padding: 5px 5px;
                margin-bottom: 10px;
                display: inline-block;
                border: 2px solid #000;
                border-radius: 4px;
            }
            
            input[type=submit]
            {
                margin-top: 10px;
                margin-left: 20px;
                padding: 10px 20px;
                background-color: cadetblue;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13pt;
            }
        </style>
    </head>
    <body>
        <div id="page" align="center">
            <h1> EZ-Plan </h1>
            <form action="login.php" method="post">
                <input type="text" name="email" placeholder="Email" autofocus/>
                <br/>
                <input type="password" name="password" placeholder="Password"/>
                <br/>
                <div>
                <input type="checkbox"/> Remember Me
                <input type="submit" value="Log In"/>
                </div>
                <a href="registerpage.php"><br/>Need an Account? Register Here.</a>
            </form>
        </div>
    </body>
=======
<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>EZ-Plan: Welcome!</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            body
            {
                background-color: powderblue;
                font-size: 14pt;
            }
            
            #page
            {
                padding-top: 200px;
            }
            
            input[type=text], input[type=password]
            {
                width: 230px;
                padding: 5px 5px;
                margin-bottom: 10px;
                display: inline-block;
                border: 2px solid #000;
                border-radius: 4px;
            }
            
            input[type=submit]
            {
                margin-top: 10px;
                margin-left: 20px;
                padding: 10px 20px;
                background-color: cadetblue;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13pt;
            }
        </style>
    </head>
    <body>
        <div id="page" align="center">
            <h1> EZ-Plan </h1>
            <form action="login.php" method="post">
                <input type="text" name="email" placeholder="Email" autofocus/>
                <br/>
                <input type="password" name="password" placeholder="Password"/>
                <br/>
                <div>
                <input type="checkbox"/> Remember Me
                <input type="submit" value="Log In"/>
                </div>
                <a href="registerpage.php"><br/>Need an Account? Register Here.</a>
            </form>
        </div>
    </body>
>>>>>>> refs/remotes/origin/master
</html>