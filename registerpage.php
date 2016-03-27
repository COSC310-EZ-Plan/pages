<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
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
            
            input[type=text], input[type=password], 
            input[type=email], input[type=number]
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
            <form method="post" action="registerpage2.php" style="width:30%">
                <fieldset>
                    <legend>Register</legend>
                    <input type="email" name="email" placeholder="Email" autofocus required/><br/>
                    <!-- TODO PHP Validation of password -->
                    <input type="password" name="password" placeholder="Password" required/><br/>
                    <input type="password" name="cpassword" placeholder="Confirm Password" required/><br/><br/>
                    <input type="text" name="fname" placeholder="First Name" required/><br/>
                    <input type="text" name="lname" placeholder="Last Name" required/><br/>
                    <input type="text" name="major" placeholder="Major" required/><br/>
                    Year: <input style="width: 150px;" type="number" min="1" max="4" name="year" value="1"/><br/>
                    <input type="submit" value="submit" name="Submit" align="center"/>
                </fieldset>
            </form>
        </div>
    </body>
</html>