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

// Creates function_processes object with supplied parameters
function function_process(
    $ef_id,
    $func_process_description
    )
{
    // If user field is left blank, give corresponding error
    if (empty($ef_id)) {
        return func_process_error_message(E_FUNC_PROCESS, E_NO_EFID);
    }
    if (empty($func_process_description)) {
        return func_process_error_message(E_FUNC_PROCESS, E_NO_FUNC_PROCESS_DESCRIPTION);
}

    // Calls add_function_process and passes in user defined parameters to be uploaded to database
    add_function_process(
        $ef_id,
        $func_process_description
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function func_process_submit(
    $ef_id,
    $func_process_description,
    $func_process_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call essential_function()
    if (!empty($func_process_submit_pressed)) {
        return function_process(
            $ef_id,
            $func_process_description
        );
    }
    // Clear user fields
    return '';
}

// Fetches from database using SQL query and returns data into user input selector
function get_essential_functions()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div id='select_dept'  >\n";
    echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em; float: right'>\n";
    // User input selector
    echo "                <select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select>\n";
    } else {
        echo "0 results";
    }
    echo "        </form>\n";
    echo "    </div>\n";
    // Close connection
    $conn->close();
}

// Fetches from database using SQL query and returns data into user input selector
function get_departments()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql = "SELECT Organization, DeptName, DeptID FROM DEPT";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div >\n";
    echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em;'>\n";
    // User input selector
    echo "                <select type='select' name='DeptID' style='font-size: .75em;' >\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["DeptID"] . "'>" . $row["DeptName"]
                . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select>\n";
    } else {
        echo "0 results";
    }
    echo "        </form>\n";
    echo "    </div>\n";
    // Close connection
    $conn->close();
}

function show_table_two()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT e.EFName, ep.ProcDesc, d.DeptName, d.Organization FROM EF e, EF_PROC ep, DEPT d WHERE e.EFID = ep.EFID AND e.DeptID = d.DeptID ORDER BY d.DeptID LIMIT 0, 30 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='100%'>";
        echo "<tr><th colspan='4'><h4></h4></th></tr>";
        echo "<tr><th id='table_header'>Organization</th><th id='table_header'>Department</th><th id='table_header'>Essential Function Name</th><th id='table_header'>Processes</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr><td  id='table_reference'>" . $row ["Organization"] . "</td><td> " . $row ["DeptName"] . "</td><td> " . $row ["EFName"] . "</td><td> " .  nl2br($row["ProcDesc"]) . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Essential Function Processes</h4>";
    }
    $conn->close();
}



                        