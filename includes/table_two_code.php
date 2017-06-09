<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/5/16
 * Time: 12:16 AM
 *
 * Holds multiple form functions
 */

// Creates error_message object of type and detail
function func_process_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page
function next_page() {
    header('Location: ' . FUNC_PROCESS_PAGE);
}

function show_table_two()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT e.EFName, ep.ProcDesc, d.DeptName, d.Organization FROM EF e, EF_PROC ep, DEPT d WHERE e.EFID = ep.EFID AND e.DeptID = d.DeptID ORDER BY d.DeptID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='80%' style='margin: 100px 0 0 60px; text-align: start;'>";
        echo "<tr><th id='table_header'>Organization</th><th id='table_header'>Department</th><th id='table_header'>Essential Function Name</th><th id='table_header'>Processes</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td  id='table_reference'>" . $row ["Organization"] . "</td><td> " . $row ["DeptName"] . "</td><td> " . $row ["EFName"] . "</td><td> " .  nl2br($row["ProcDesc"]) . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Essential Function Processes</h4>";
    }
    $conn->close();
}
