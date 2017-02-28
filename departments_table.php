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
    <title>Department Table</title>
    <?php include_once ('includes/head_files.php'); ?>
</head>
<body>
<?php
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Organization, DeptName, DeptID FROM DEPT as DEPT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table width='100%'>";
    echo "<tr><th colspan='4'><h4></h4></th></tr>";
    echo "<tr><th id='table_header' colspan='2'><h4>Existing Departments</h4></th><th></th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td id='reference_table'>- " . $row["DeptName"] . ": "
            . $row["Organization"] . "</td>
        <td id='reference_table'>
            <input type='hidden' value=" .$row["DeptID"]."  name='id'/>
            <form action='includes/delete.php' method='GET'>
            <button id='delete_row' name='delete_dept' value=".$row["DeptID"].">DELETE</button></form>";
        echo "</td></tr>";
    }
    echo "</table>";
} else {
    echo " <h4>You have no existing Departments</h4>";
}

$conn->close();
?>
</body>
</html>
