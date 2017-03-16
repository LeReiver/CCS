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
function func_detail_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><br><div id ="error_detail" style="margin: -25px 200px 0 0;">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . TABLE_FOUR_PAGE);
}

// Creates function_detail object with supplied parameters
function function_detail(
    $func_detail_interviewer,
    $func_detail_efid,
    $func_detail_responsibilities,
    $func_detail_internal_dep,
    $func_detail_external_dep,
    $func_detail_peak_times,
    $func_detail_considerations,
    $func_detail_reg_loss,
    $func_detail_rto,
    $func_detail_it_support,
    $func_detail_backup_process,
    $func_detail_factors
    )
{
    // If user field is left blank, give corresponding error
    if (empty($func_detail_interviewer)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_INTERVIEWER);
    }
    if (empty($func_detail_responsibilities)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_RESPONSIBILITIES);
    }
    if (empty($func_detail_internal_dep)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_INTERNAL_DEP);
    }
    if (empty($func_detail_external_dep)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_EXTERNAL_DEP);
    }
    if (empty($func_detail_peak_times)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_PEAK_TIMES);
    }
    if (empty($func_detail_considerations)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_CONSIDERATIONS);
    }
    if (empty($func_detail_reg_loss)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_REG_LOSS);
    }
    if (empty($func_detail_rto)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_RTO);
    }
    if (empty($func_detail_it_support)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_IT_SUPPORT);
    }
    if (empty($func_detail_backup_process)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_BACKUP_PROCESS);
    }
    if (empty($func_detail_factors)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_FUNC_DETAILS_FACTORS);
    }
    if (empty($func_detail_efid)) {
        return func_detail_error_message(E_FUNC_PROCESS, E_NO_EFID);
    }





    // Calls add_function_detail and passes in user defined parameters to be uploaded to database
    add_function_detail(
        $func_detail_interviewer,
        $func_detail_efid,
        $func_detail_responsibilities,
        $func_detail_internal_dep,
        $func_detail_external_dep,
        $func_detail_peak_times,
        $func_detail_considerations,
        $func_detail_reg_loss,
        $func_detail_rto,
        $func_detail_it_support,
        $func_detail_backup_process,
        $func_detail_factors
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function func_detail_submit(
    $func_detail_interviewer,
    $func_detail_efid,
    $func_detail_responsibilities,
    $func_detail_internal_dep,
    $func_detail_external_dep,
    $func_detail_peak_times,
    $func_detail_considerations,
    $func_detail_reg_loss,
    $func_detail_rto,
    $func_detail_it_support,
    $func_detail_backup_process,
    $func_detail_factors,
    $func_detail_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call function_detail()
    if (!empty($func_detail_submit_pressed)) {
        return function_detail(
            $func_detail_interviewer,
            $func_detail_efid,
            $func_detail_responsibilities,
            $func_detail_internal_dep,
            $func_detail_external_dep,
            $func_detail_peak_times,
            $func_detail_considerations,
            $func_detail_reg_loss,
            $func_detail_rto,
            $func_detail_it_support,
            $func_detail_backup_process,
            $func_detail_factors
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
    echo "                <form style='font-size: .75em; font-weight: bold; margin-top: 1em; float: right; '>\n";
    // User input selector
    echo "                <select type='select' name='EFID' style='font-size: .75em; width: 450px; overflow: hidden;'>\n";
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
function get_rto()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql = "SELECT RtoID, Duration FROM RTO";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div id='select_dept'  >\n";
    echo "                <form style='font-size: .75em; font-weight: bold; margin-top: 1em; float: right'>\n";
    // User input selector
    echo "                <select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
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
        echo "<table>";
        echo "<tr><th colspan='4'><h4></h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["CatName"] . ":</td><td>" . $row["CatDesc"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}


function get_essential_functions_2()
{


    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Organization, DeptName, DeptID FROM DEPT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><td>";
        while ($row = $result->fetch_assoc()) {
            $conn2 = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
            // Check connection
            if ($conn2->connect_error) {
                die("Connection failed: " . $conn2->connect_error);
            }
            // SQL query
            $sql2 = "SELECT DEPT.Organization, DEPT.DeptName, EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
            // Create result from connection and query
            $result2 = $conn2->query($sql2);
            echo "    <div id='select_dept'  >\n";
            echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em; float: right; width: 400px; overflow: hidden'>\n";
            // User input selector
            echo "                <select type='select' name='EFID' style='font-size: .75em;'>\n";
            // While loop to retrieve every row in table that matches query
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    echo "                <option value='" . $row2["EFID"] . "'>" . $row2 ["EFName"] . ": "
                        . $row2["DeptName"] . " Department, " . $row2 ["Organization"] . "</option>\n";
                }
                echo "                </select>\n";
            } else {
                echo "0 results";
            }
            echo "        </form>\n";
            echo "    </div>\n";

            echo "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}


/*
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
    echo "                <select type='select' name='EFID' style='font-size: 1em;'>\n";
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
}*/

/*
function show_impact_categories()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT CatName, CatDesc FROM I_CAT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["CatName"] . ":</td><td>" . $row["CatDesc"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}

*/
































                        