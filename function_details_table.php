<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 2/25/17
 * Time: 2:07 PM
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
    <title>Details Table</title>
    <?php include_once ('includes/head_files.php'); ?>
</head>
<body>
    <?php
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT ef.EFName, ed.EFID, ed.Responsibilities, ed.InternalDep, ed.ExternalDep, ed.PeakTimes, ed. Considerations, 
            ed. RegLoss, ed.Rto, ed.ITSupport, ed.BackupProc, ed.Factors, ed.DetailID FROM EF_DETAIL ed, EF ef WHERE ef.EFID = ed.EFID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='100%' id='details_table'>";
        echo "<tr><th colspan='4'><h4></h4></th></tr>";
        while ($row = $result->fetch_assoc()) {

            echo "<tr><th id='table_header' colspan='2'><h4>Existing Function Details</h4></th><th></th></tr>";
            echo " <tr><td colspan='2'><h5>" . $row['EFName'] . "</h5><input type='hidden' value=" .$row["DetailID"]."  name='id'>
                <form id='details_form' action='includes/delete.php' method='GET'>
                <button id='delete_row_details' name='delete_detail' value=".$row["DetailID"].">DELETE</button></form></td></tr>";
            echo " <tr><td  id='table_reference'>" . "Description:" . "</td><td> " . $row ["Responsibilities"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "Internal Dependencies:" . "</td><td> " . $row ["InternalDep"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "External Dependencies:" . "</td><td> " . $row ["ExternalDep"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "Peak Times:" . "</td><td> " . $row ["PeakTimes"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "Peak Load Considerations:" . "</td><td> " . $row ["Considerations"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "Regulatory/Legal Concerns:" . "</td><td> " . $row ["RegLoss"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "How long can function continue without IT?" . "</td><td> " . $row ["Rto"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "IT Requirements:" . "</td><td> " . $row ["ITSupport"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "Backup Procedures:" . "</td><td> " . $row ["BackupProc"] . "</td></tr>\n";
            echo " <tr><td  id='table_reference'>" . "Other Factors:" . "</td><td> " . $row ["Factors"] . "</td></tr>\n";
        echo "</td></tr>";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Function Details</h4>";
    }
    $conn->close();
    ?>
</body>
</html>
