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
function impact_category_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><br><br><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . IMPACT_CATEGORY_PAGE);
}

// Creates impact_categories object with supplied parameters
function impact_category(
    $impact_category_name,
    $impact_category_description
    )
{
    // If user field is left blank, give corresponding error
    if (empty($impact_category_name)) {
        return impact_category_error_message(E_IMPACT_CATEGORY, E_NO_IMPACT_CATEGORY_NAME);
    }
    if (empty($impact_category_description)) {
        return impact_category_error_message(E_IMPACT_CATEGORY, E_NO_IMPACT_CATEGORY_DESCRIPTION);
}

    // Calls add_impact_category and passes in user defined parameters to be uploaded to database
    add_impact_category(
        $impact_category_name,
        $impact_category_description
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function impact_category_submit(
    $impact_category_name,
    $impact_category_description,
    $impact_category_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call essential_function()
    if (!empty($impact_category_submit_pressed)) {
        return impact_category(
            $impact_category_name,
            $impact_category_description
        );
    }
    // Clear user fields
    return '';
}

// Fetches from database using SQL query and returns data into user input selector
function get_rto()
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
    echo "                <select type='select' name='EFID' style='font-size: 1.95em;'>\n";
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



function show_impact_categories()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT CatName, CatDesc FROM I_CAT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='350px'style='margin-top: -100px;' >";
        echo "<tr><th colspan='4'><h4></h4></th></tr>";
        echo "<tr><th id='table_header'><h4>Impact Categories</h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr><td  id='reference_table'>" . $row ["CatDesc"] . " ("
                . $row["CatName"] .") " . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Impact Categories</h4>";
    }
    $conn->close();
}


