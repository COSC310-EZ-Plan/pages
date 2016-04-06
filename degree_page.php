<!DOCTYPE html>
<?php
// Set up session and database connection
session_start();
include "connection.php";
include "header.php";

// Set up connection; redirect to log in if cannot connect or not logged in
if (filter_input(INPUT_COOKIE, "auth") != 1) {
    header("Location: index.php");
    exit;
}
$mysqli = getConnection();
if ($mysqli == NULL) {
    header("Location: index.php");
    exit;
}

$uid = $_SESSION["uid"];

//Apply changes
if(isset($_POST["submitCourse"]))
{
    $cname = strtoupper(filter_input(INPUT_POST, "cname"));
    $grade = filter_input(INPUT_POST, "grade");
    $sql_validate = "SELECT cname FROM Course WHERE cname = '$cname'";
    
    
    
    if (mysqli_num_rows($mysqli->query($sql_validate)) == 1)
    {
        $sql_insert= "INSERT INTO UserCourse VALUES ('$grade','$uid','$cname')";
        
        if ($mysqli -> query($sql_insert) === TRUE)
        {
            $message = "Courese successfully inserted.";
        }
        else
        {
            $message = mysqli_error($mysqli);
        }
    }
    else 
    {
        $message = "Unsuccessfully insertion. Please check your course name and number. '$cname'";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Degree Breakdown</title>
        <link rel="stylesheet" type="text/css" href="ezplan_css.css">
        <style>
            #content
            {
                margin: auto;
                width: 50%;
            }
            
            .message {
                padding: 20px;
                text-align: center;
                font-size: large;
                color: #FFF;
                background-color: #5199A3;
            }
            
            table.courselist {
                border:1px solid black;
                width:200px;
                background-color: #DDF5F8;
            }
            
            table.courselist tr td {
                padding: 5px;
                margin: 5px;
            }
            
            td.course {
                width:80%;
                border: 1px solid #80C1CA;
            }
            
            td.grade {
                width:30%;
                border: 1px solid #80C1CA;
            }
            
            form
            {
                width: 200px;
            }
            
            input
            {
                padding: 5px;
                margin-bottom: 10px;
                display: inline-block;
                border: 2px solid #000;
                border-radius: 4px;
            }
            
            input[type=submit], #inputCourse
            {
                margin-top: 10px;
                padding: 10px 20px;
                background-color: cadetblue;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13pt;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
            $(document).ready(
                function(){
                    $("#inputCourse").click(
                        function(){
                            //$(".egb").prop("disabled", false);
                            $("form").show();
                            $("#inputCourse").hide();
                        }
                    );
                }
            );
        </script>
    </head>
    <body>
        <div id="content">
        <?php
            // Put message at the top of the page if applicable
            if (isset($message)) {
                echo "<p class='message'>$message</p>";
                
            }
        
            // Retrives user major and echo to page
            $sql_findmaj = "SELECT umajor FROM User WHERE uid = '$uid'";
            $result_findmaj = mysqli_query($mysqli, $sql_findmaj) or die(mysqli_error($mysqli));
            if (mysqli_num_rows($result_findmaj) == 1) {
                $row = mysqli_fetch_assoc($result_findmaj);
                $major = $row["umajor"];
            }
            echo "<h2>$major</h2>"
               . "<hr>";
            
            // Retrive data from UserCourse table //qUC -> query UserCourse //Will be used for calculations
            $sql_qUC = "SELECT * FROM UserCourse WHERE uid = '$uid'";
            $result_qUC = mysqli_query($mysqli, $sql_qUC) or die(mysqli_error($mysqli));
            
            if(mysqli_num_rows($result_qUC) != 0)
            {
                $rows_qUC = mysqli_fetch_all($result_qUC, MYSQLI_BOTH);
            }
            else 
            {
                // If not registered in any courses the user gets kicked to the suggested_schedule page
                header("Location: suggested_schedule.php");
                exit;
                // ^ This is wrog should check Degreeeview for courses schedueled to be taken. TODO
            }
            
            // Display the Users currentcourses if any
            ?>    
                <h3>Registered:</h3>
                <table class="courselist">
            <?php
            foreach($rows_qUC as $row_qUC)
            {
                $cname = $row_qUC["cname"];
                $grade = ($row_qUC["grade"] == 0) ? "No Grade" : $row_qUC["grade"]."%";
                
                ?>
                <tr>
                    <td class="course"><?php courselink($cname); ?></td>
                    <td class="grade"><?php echo "$grade"; ?></td>
                </tr>
                <?php
            }
        ?>
                </table><br>
                <form method="POST" hidden>
                    <fieldset>
                        <legend>Enter Course</legend>
                        <input type="text" name="cname" placeholder="Course Name" required autofocus/><br/>
                        <input style="width: 40px;" type="number" min="0" max="100" name="year" required/><br/>
                        <input id="formSubmit" type="submit" name="submitCourse" value="Apply"/>
                    </fieldset>
                </form>
                <button id="inputCourse">Input Course</button><br/><br/>
                
        <?php
            // Retrive data from DegreeView table //qDV -> query DegreeView //Will be used for calculations
            $sql_qDV = "SELECT * FROM DegreeView WHERE uid = '$uid'";
            $result_qDV = mysqli_query($mysqli, $sql_qDV) or die(mysqli_error($mysqli));
            
            if(mysqli_num_rows($result_qUC) != 0)
            {
                $rows_qDV = mysqli_fetch_all($result_qDV, MYSQLI_BOTH);
            }
            else 
            {
                // If not registered in any courses the user gets kicked to the suggested_schedule page
                header("Location: suggested_schedule.php");
                exit;
            }
            
            // Display the Users currentcourses if any
            ?>    
                <h3>Courses You Have Saved:</h3>
                <table class="courselist">
            <?php
            foreach($rows_qDV as $row_qDV)
            {
                $cname = $row_qDV["cname"];
                
                ?>
                <tr>
                    <td class="course" style="width: 100%"><?php courselink($cname); ?></td>
                </tr>
                <?php
            }
        ?>
                </table><br>
            </div>    
        <?php include "footer.php"; ?>
    </body>
</html>

<?php
// Functions

function courselink($cname) {
    // Just echo the variable, for now
    echo $cname;
}

//Credit for a lot of the code goes to Eliana Wardle
?>
