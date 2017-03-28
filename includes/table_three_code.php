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


function show_table_three()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT rt.Duration, ef.EFName, ic.CatName, ra.RatingID ,rt.RtoID
FROM EF ef, RTO rt, I_CAT ic, RATING ra, I_CAT_SCORE ics
WHERE ef.EFID = ics.EFID AND ic.ImpCatID = ics.ImpCatID AND ics.RtoID = rt.RtoID AND ics.RatingID = ra.RatingID AND ra.RatingID != 0 ORDER BY RtoID, EFName";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='80%' style='margin: 100px 0 0 60px; text-align: start;'>";
        echo "<tr><th><h4>RTO</h4></th><th><h4>Essential Function</h4></th><th><h4>Impact Category</h4></th><th><h4>Rating</h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td  id='table_reference'>" . $row ["Duration"] . "</td><td> " . $row ["EFName"] 
                . "</td><td> " . $row ["CatName"] . "</td><td> " . $row ["RatingID"] . "</td></tr>\n";

//            echo "<tr style='background-color: transparent'><td></td></tr>";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Recovery Time Objectives with Corresponding Essential Functions</h4>";
    }
    $conn->close();
}



                        