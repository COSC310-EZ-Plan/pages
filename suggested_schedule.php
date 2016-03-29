<!DOCTYPE html>
    
<?php
// Set up session and database connection
session_start();
include "connection.php";

// Set up connection; redirect to log in if cannot connect or not logged in
if (filter_input(INPUT_COOKIE, "auth") != 1) {
    header("Location: login.php");
}
$mysqli = getConnection();
if ($mysqli == NULL) {
    header("Location: login.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Suggested Schedule</title>
        <link rel="stylesheet" type="text/css" href="header.css">
        <style>
            table.courselist {
                border:1px solid black;
                width:50%;
            }
            td.course {
                width:80%;
            }
            td.coursebtn {
                min-width:10%;
            }
        </style>
    </head>
    <body>

<?php
// Get user ID associated with session email
// (better strategy long-term: store user id in session on login,
// since that is what other tables reference)
if (isset($_SESSION["uid"])) {
    $uid = $_SESSION["uid"];
}
else {
    $email = $_SESSION["email"];
    $sql = "SELECT uid FROM User WHERE email = '$email'";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_assoc($result);
        $uid = $row["uid"];
        $_SESSION["uid"] = $uid;
    }
}

// Find what degree type to check for:
// Fetch fields from existing DegreeView fields linked to this user, if any
$sql_dview = "SELECT * FROM DegreeView WHERE uid = $uid";
$result_dview = mysqli_query($mysqli, $sql_dview) or die(mysqli_error($mysqli));
$rows_dview = mysqli_fetch_all($result_dview, MYSQLI_BOTH);
if (mysqli_num_rows($result_dview) != 0) {
    $row_dview = $rows_dview[0];
    $major = $row_dview["dmajor"];
}
else {
    // If user has a valid degree type, use it to find the required courses
    // (Otherwise, just use the first valid one we find)
    // (this will probably require some edits to register page, so only 
    //  already-implemented majors are available)
    $sql_findmaj = "SELECT umajor FROM User, DegreeView "
            . "WHERE User.uid = '$uid' "
            . "AND dmajor = umajor";
    $result_findmaj = mysqli_query($mysqli, $sql_findmaj) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($result_findmaj) != 0) {
        $row = mysqli_fetch_assoc($result_findmaj);
        $major = $row["umajor"];
    }
    else {
        $sql_makemaj = "SELECT degree FROM DegreeType";
        $result_makemaj = mysqli_query($mysqli, $sql_makemaj) or die(mysqli_error($mysqli));
        if (mysqli_num_rows($result_makemaj) != 0) {
            $row = mysqli_fetch_assoc($result_makemaj);
            $major = $row["degree"];
        }
    }
}
// Print what the major is
echo "<h1>Recommended Courses for:</h1>"
    . "<h2>$major</h2>"
    . "<hr>";

// First section: currently planned courses for user (delete option available)
echo "<h3>Current Plans:</h3><table class='courselist'>";
foreach ($rows_dview as $row_dview) {
    $cname = $row_dview["cname"];
    ?>
    <tr>
        <td class="course"><?php courselink($cname); ?></td>
        <td class="coursebtn"><?php dview_del_btn($uid, $major, $cname); ?></td>
    </tr>
        <?php
}

echo "</table>";


// Second section: all required courses for that degree
echo "<h3>Required Courses:</h3><table class='courselist'>";

// TODO
echo "<tr><td>TODO</td></tr>";

echo "</table>";

// Third section: electives based off user's interests
echo "<h3>Possible Relevant Electives:</h3><table class='courselist'>";

// TODO
echo "<tr><td>TODO</td></tr>";

echo "</table></br>";
?>
        <a href="home_page.php">Return to Home Page</a>
    </body>
</html>

<?php 

function courselink($cname) {
    // Dummy for now
    echo $cname;
}

function dview_save($uid, $dmajor, $cname) {
    echo "";
}
function dview_del($uid, $dmajor, $cname) {
    echo "";
}
function dview_save_btn($uid, $dmajor, $cname) {
    // Dummy for now
    echo "<button>Save</button>";
}
function dview_del_btn($uid, $dmajor, $cname) {
    // Dummy for now
    echo "<button>Delete</button>";
}

?>