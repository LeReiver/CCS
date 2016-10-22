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
function func_category_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . FUNC_CATEGORY_PAGE);
}

// Creates function_category object with supplied parameters
function function_category(
    $ef_id,
    $func_category_name
    )
{
    // If user field is left blank, give corresponding error
    if (empty($ef_id)) {
        return func_category_error_message(E_FUNC_CATEGORY, E_NO_EFID);
    }
    if (empty($func_category_name)) {
        return func_category_error_message(E_FUNC_CATEGORY, E_NO_FUNC_CATEGORY_NAME);
}

    // Calls add_function_category and passes in user defined parameters to be uploaded to database
    add_function_category(
        $ef_id,
        $func_category_name
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function func_category_submit(
    $ef_id,
    $func_category_name,
    $func_category_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call essential_function()
    if (!empty($func_category_submit_pressed)) {
        return function_category(
            $ef_id,
            $func_category_name
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
//    echo "        </form>\n";
    echo "    </div>\n";
    // Close connection
    $conn->close();
}
                        