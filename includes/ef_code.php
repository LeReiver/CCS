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
function ef_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . FUNC_PROCESS_PAGE);
}

// Creates essential_function object with supplied parameters
function essential_function(
     $ef_name,
     $ef_lead_name,
     $ef_lead_title,
     $ef_lead_email,
     $ef_lead_phone,
     $dept_id
    )
{
    // If user field is left blank, give corresponding error
    if (empty($ef_name)) {
        return ef_error_message(E_EF, E_NO_EF_NAME);
    }
    if (empty($ef_lead_name)) {
        return ef_error_message(E_EF, E_NO_EF_LEAD_NAME);
    }
    if (empty($ef_lead_title)) {
        return ef_error_message(E_EF, E_NO_EF_LEAD_TITLE);
    }
    if (empty($ef_lead_email)) {
        return ef_error_message(E_EF, E_NO_EF_LEAD_EMAIL);
    }
    if (empty($ef_lead_phone)) {
        return ef_error_message(E_EF, E_NO_EF_LEAD_PHONE);
    }
    if (empty($dept_id)) {
        return ef_error_message(E_EF, E_NO_DEPT_ID);
    }

    // Calls add_essential_function and passes in user defined parameters to be uploaded to database
    add_essential_function(
        $ef_name,
        $ef_lead_name,
        $ef_lead_title,
        $ef_lead_email,
        $ef_lead_phone,
        $dept_id
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function ef_submit(
    $ef_name,
    $ef_lead_name,
    $ef_lead_title,
    $ef_lead_email,
    $ef_lead_phone,
    $dept_id,
    $ef_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call essential_function()
    if (!empty($ef_submit_pressed)) {
        return essential_function(
            $ef_name,
            $ef_lead_name,
            $ef_lead_title,
            $ef_lead_email,
            $ef_lead_phone,
            $dept_id
        );
    }
    // Clear user fields
    return '';
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
    echo "                <select type='select' name='DeptID' style='font-size: .75em;width:320px; overflow=hidden;' >\n";
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



function show_essential_functions()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table style='margin-top: -100px;'>";
        echo "<tr><th colspan='4'><h4></h4></th></tr>";
        echo "<tr><th id='table_header'><h4>Existing Essential Functions</h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr><td  id='reference_table'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . "<br>-  " . $row ["Organization"] . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Essential Functions</h4>";
    }
    $conn->close();
}

