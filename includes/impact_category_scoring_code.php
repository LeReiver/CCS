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
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
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
        return impact_category_error_message(E_IMPACT_CATEGORY, E_NO_EFID);
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


function get_rating()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql = "SELECT Rating, RatingID FROM RATING";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div id='select_dept'  >\n";
    echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em; float: right'>\n";
    // User input selector
    echo "                <select type='select' name='RatingID' style='font-size: .75em;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["Rating"] . "</option>\n";
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
    echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em; float: right'>\n";
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
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["CatName"] . ":</td><td>" . $row["CatDesc"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}

function get_rto_2()
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
        while ($row2 = $result->fetch_assoc()) {
            $conn2 = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
            // Check connection
            if ($conn2->connect_error) {
                die("Connection failed: " . $conn2->connect_error);
            }
            // SQL query
            $sql2 = "SELECT RtoID, Duration FROM RTO";
            // Create result from connection and query
            $result2 = $conn2->query($sql2);
            echo "    <div id='select_dept'  >\n";
            echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em; float: right'>\n";
            // User input selector
            echo "                <select type='select' name='RtoID' style='font-size: .75em;'>\n";
            // While loop to retrieve every row in table that matches query
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    echo "                <option value='" . $row2["RtoID"] . "'>" . $row2 ["Duration"] . "</option>\n";
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


function get_rating_2()
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
        while ($row2 = $result->fetch_assoc()) {
            $conn2 = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
            // Check connection
            if ($conn2->connect_error) {
                die("Connection failed: " . $conn2->connect_error);
            }
            // SQL query
            $sql2 = "SELECT Rating, RatingID FROM RATING";
            // Create result from connection and query
            $result2 = $conn2->query($sql2);
            echo "    <div id='select_dept'  >\n";
            echo "                <form style='font-size: 1.75em; font-weight: bold; margin-top: 1em; float: right'>\n";
            // User input selector
            echo "                <select type='select' name='RatingID' style='font-size: .75em;'>\n";
            // While loop to retrieve every row in table that matches query
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    echo "                <option value='" . $row2["RatingID"] . "'>" . $row2 ["Rating"] . "</option>\n";
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
