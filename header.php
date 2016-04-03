<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #2e51a2;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change the link color to #111 (black) on hover */
            li a:hover {
                background-color: #e1e7f5;
                color: black;
            }
            #navigationbar {
                font-family: Arial;
                font-weight: bold;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div>
                <header><img src="http://i.imgur.com/7VaeO8k.png" style="width:155px;height:70px;"></header>
            </div>
            <div>
                <nav>
                    <ul id="navigationbar">
                        <li><a href="home_page.php">Home</a></li>
                        <li><a href="my_info_edit.php">My Information</a></li>
                        <li><a href="edit_degree_page.php">My Schedules</a></li>
                        

                        <li><a href="course_browser.php">View Courses</a></li>

                        <li style="float:right"><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>    
            </div>    
        </div>
    </body>
</html>
