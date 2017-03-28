<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 2/12/17
 * Time: 4:43 PM
 */

include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Essential Functions Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">  <!-- Enables mobile auto-resize -->
    <link rel="stylesheet" href="includes/ccs.css.php" type="text/css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant|Gudea|Hind+Madurai|Rosario" rel="stylesheet">
    <link rel="stylesheet" href="includes/responsive_nav.css.php"> <!-- Hamburger Menu for Responsive Navigation -->
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.min.js"></script>
</head>
<body>
<?php
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table width='100%'>";
    echo "<tr><th colspan='4'><h4></h4></th></tr>";
    echo "<tr><th id='table_header' colspan='2'><h4>Existing Essential Functions</h4></th><th></th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "                <tr><td  id='reference_table'>- " . $row ["EFName"] . ": "
            . $row["DeptName"] . "<br> &nbsp; &nbsp;" . $row ["Organization"] . "</td>  
                <td id='reference_table'>
                <input type='hidden' value=" .$row["EFID"]."  name='id'/>
                <form action='includes/delete.php' method='GET'>
                <button id='delete_row' name='delete_ef' value=".$row["EFID"].">DELETE</button></form>";
        echo "</td></tr>\n";
    }
    echo "</table>";
} else {
    echo " <h4>You have no existing Essential Functions</h4>";
}
$conn->close();
?>
</body>
</html>
