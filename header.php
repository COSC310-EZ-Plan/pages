<?php

?>

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
            li a, .dropbtn {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover, .dropdown:hover .dropbtn {
                background-color: white;
                color: black;
            }

            li.dropdown {
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div>
                <header><center><img src="http://i.imgur.com/GR7Zect.png" style="width:349.5;height:105;"></center></header>
            </div>
            <div>
                <nav>
                    <ul id="navigationbar">
                        <li><a href="home_page.php">Home</a></li>
                        <li><a href="my_info_edit.php">My Information</a></li>
                        <li class="dropdown">
                            <a href="" class="dropbtn">Degree</a>
                            <div class="dropdown-content">
                                <a href="Compare_page.php">Compare Degrees</a>
                                <a href="my_schedule_page.php">Schedule Plan</a>
                                <a href="#">Degree Process</a>
                            </div>
                        </li>

                        <li><a href="course_browser.php">View Courses</a></li>

                        <li style="float:right"><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>    
            </div>    
        </div>
    </body>
</html>
