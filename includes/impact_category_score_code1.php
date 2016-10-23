<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/5/16
 * Time: 12:16 AM
 *
 * Holds multiple form functions for impact_category_score.php
 *
 */

// Require the following files
require_once ('constants.php');


// Creates error_message object of type and detail
function impact_category_score_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page
function next_page() {
    header('Location: ' . IMPACT_CATEGORY_SCORE_2_PAGE);
}

// Creates impact_categories object with supplied parameters
function impact_category_score(
    $impact_category_score_ef_id1,
    $impact_category_score_imp_cat_id1,
    $impact_category_score_rto_id1,
    $impact_category_score_rating_id1

    // If user field is left blank, give corresponding error
    )
{

    if (empty($impact_category_score_ef_id1)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_1);
    }
    if (empty($impact_category_score_imp_cat_id1)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_1);
    }
    if (empty($impact_category_score_rto_id1)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_1);
    }
    if (empty($impact_category_score_rating_id1)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_1);
    }
    // Calls add_impact_category and passes in user defined parameters to be uploaded to database
    add_impact_category_score(
        $impact_category_score_ef_id1,
        $impact_category_score_imp_cat_id1,
        $impact_category_score_rto_id1,
        $impact_category_score_rating_id1
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function impact_category_score_submit(
    $impact_category_score_ef_id1,
    $impact_category_score_imp_cat_id1,
    $impact_category_score_rto_id1,
    $impact_category_score_rating_id1,
    $impact_category_score_submit_pressed
    // If no user field is left empty upon submit button pressed, call impact_category_score()
    )
{
    if (!empty($impact_category_score_submit_pressed)) {
        return impact_category_score(
            $impact_category_score_ef_id1,
            $impact_category_score_imp_cat_id1,
            $impact_category_score_rto_id1,
            $impact_category_score_rating_id1
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
    echo "                <form style='font-size: 1.75em; font-weight: bold; float: right'>\n";
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
    echo "    </div>\n";
    // Close connection
    $conn->close();

}

function get_impact_category()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div id='select_dept'  >\n";
    echo "                <form>\n";
    // User input selector
    echo "                <select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select>\n";
    } else {
        echo "0 results";
    }
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
    $sql = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 1";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div id='select_dept'  >\n";
    echo "                <form style='font-size: 1.75em; font-weight: bold; float: right'>\n";
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
    echo "    </div>\n";
    // Close connection
    $conn->close();
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
    echo "                <form style='font-size: 1.75em; font-weight: bold; align-content: center'>\n";
    // User input selector
    echo "                <select type='select' name='RatingID' style='font-size: .75em; padding: 0;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row ["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
    } else {
        echo "0 results";
    }
    echo "    </div>\n";
    // Close connection
    $conn->close();
}



function score_impact_categories()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql2 = "SELECT Rating, RatingID FROM RATING ";
    // Create result from connection and query
    $result2 = $conn->query($sql2);

            echo "                <select type='select' name='RatingID' style='font-size: .75em;'>\n";

            // While loop to retrieve every row in table that matches query
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row = $result2->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) . " - " . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";
            } else {
                echo "0 results";
            }
            echo "    \n";

    // Close connection
    $conn->close();

}


// Outputs table showing essential function impact scores
function show_impact_score()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT ic.CatName, ic.CatDesc, ics.1Hour, ics.2to8Hours, ics.9to24Hours, ics.1to3Days, ics.4to7Days, ics.8to15Days, ics.16to31Days, ef.EFName
            FROM I_CAT ic, I_CAT_SCORING ics, EF ef WHERE ic.ImpCatID = ics.ImpcatID AND ics.EFID = ef.EFID ORDER BY ef.EFID";
//    $sql = "SELECT ic.CatName, ic.CatDesc, ics.1Hour, ics.2to8Hours, ics.9to24Hours, ics.1to3Days, ics.4to7Days, ics.8to15Days, ics.16to31Days FROM I_CAT ic, I_CAT_SCORING ics WHERE ic.ImpCatID = ics.ImpcatID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<td colspan='9' style='line-height: .1; background: none;'><h4>Existing Impact Category Scores</h4></td>";
        echo "                  <tr><th id='table_header'>Essential Function</th><th id='table_header'>Category</th><th id='table_header'>1 Hr</th><th id='table_header'>2-8 Hrs</th>
                  <th id='table_header'>9-24 Hrs</th><th id='table_header'>1-3Day</th><th id='table_header'>4-7Day</th><th id='table_header'>8-15Day</th><th id='table_header'>16-31Day</th></th>\n";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr id='reference_table'><td> <strong>"  . $row ["EFName"] . "</strong></td><td> <strong>"  . $row ["CatName"] . "</strong></td><td>" . $row["1Hour"] . "</td>
            <td>" . $row["2to8Hours"] . "</td><td>" . $row ["9to24Hours"] . "</td><td>" . $row["1to3Days"] . "</td><td>" . $row["4to7Days"] . "</td><td>" . $row ["8to15Days"] . "</td><td>" . $row["16to31Days"] . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4 id='empty_table'>You have no existing Impact Category Scores</h4>";
    }
    $conn->close();
}



function score_all_impact_categories()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql_rating1 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rating2 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rating3 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rating4 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rating5 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rating6 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rating7 = "SELECT Rating, RatingID FROM RATING ";
    $sql_rto1 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 1";
    $sql_rto2 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 2";
    $sql_rto3 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 3";
    $sql_rto4 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 4";
    $sql_rto5 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 5";
    $sql_rto6 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 6";
    $sql_rto7 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 7";


    // Create result from connection and query
    $rs_rating1 = $conn->query($sql_rating1);
    $rs_rating2 = $conn->query($sql_rating2);
    $rs_rating3 = $conn->query($sql_rating3);
    $rs_rating4 = $conn->query($sql_rating4);
    $rs_rating5 = $conn->query($sql_rating5);
    $rs_rating6 = $conn->query($sql_rating6);
    $rs_rating7 = $conn->query($sql_rating7);
    $rs_rto1 = $conn->query($sql_rto1);
    $rs_rto2 = $conn->query($sql_rto2);
    $rs_rto3 = $conn->query($sql_rto3);
    $rs_rto4 = $conn->query($sql_rto4);
    $rs_rto5 = $conn->query($sql_rto5);
    $rs_rto6 = $conn->query($sql_rto6);
    $rs_rto7 = $conn->query($sql_rto7);

    echo "    <div id='select_dept'  >\n";
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($rs_rto1->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto1->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";
        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    }
    if ($rs_rto2->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto2->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    }
    if ($rs_rto3->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto3->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    }
    if ($rs_rto4->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto4->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    }
    if ($rs_rto5->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto5->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    }
    if ($rs_rto6->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto6->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    }
    if ($rs_rto7->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto7->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
        }
        echo "                </select>\n";
    } else {
        echo "0 results";
    }
    echo "    </div></tr> \n";

    // Select Rating

    echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve every row in table that matches query
    if ($rs_rating1->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating1->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
    }
    // While loop to retrieve every row in table that matches query
    if ($rs_rating2->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating2->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
    }
    // While loop to retrieve every row in table that matches query
    if ($rs_rating3->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating3->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
    }
    // While loop to retrieve every row in table that matches query
    if ($rs_rating4->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating4->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1)." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
    }
    // While loop to retrieve every row in table that matches query
    if ($rs_rating5->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating5->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
    }
    // While loop to retrieve every row in table that matches query
    if ($rs_rating6->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating6->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
    }
    // While loop to retrieve every row in table that matches query
    if ($rs_rating7->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating7->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "                </select>\n";
    }

    else {
        echo "0 results";
    }
//            echo "        </form>\n";


    echo "    </td></tr>\n";

    $conn->close();

}



function show_table_three()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT rt.Duration, ef.EFName, ic.CatName, ra.RatingID
FROM EF ef, RTO rt, I_CAT ic, RATING ra, I_CAT_SCORE ics
WHERE ef.EFID = ics.EFID AND ic.ImpCatID = ics.ImpCatID AND ics.RtoID = rt.RtoID AND ics.RatingID = ra.RatingID AND ra.RatingID != 0 ORDER BY Duration";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='100%' style='margin-left: 200px;'>";
        echo "<tr><th><h4>RTO</h4></th><th><h4>Essential Function</h4></th><th><h4>Impact Category</h4></th><th><h4>Rating</h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr><td  id='table_reference'>" . $row ["Duration"] . "</td><td> " . $row ["EFName"]
                . "</td><td> " . $row ["CatName"] . "</td><td> " . $row ["RatingID"] . "</td></tr>\n";

            echo "<tr style='background-color: transparent'><td></td></tr>";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Recovery Time Objectives with Corresponding Essential Functions</h4>";
    }
    $conn->close();
}


// outputs a data table with existing scores
function show_impact_scores()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//    $sql = "SELECT ic.CatName, ic.CatDesc, ics.1Hour, ics.2to8Hours, ics.9to24Hours, ics.1to3Days, ics.4to7Days, ics.8to15Days, ics.16to31Days, ef.EFName
//            FROM I_CAT ic, I_CAT_SCORING ics, EF ef WHERE ic.ImpCatID = ics.ImpcatID AND ics.EFID = ef.EFID ORDER BY ef.EFName";
//    $sql = "SELECT ic.CatName, ic.CatDesc, ics.1Hour, ics.2to8Hours, ics.9to24Hours, ics.1to3Days, ics.4to7Days, ics.8to15Days, ics.16to31Days FROM I_CAT ic, I_CAT_SCORING ics WHERE ic.ImpCatID = ics.ImpcatID";


    $sql ="SELECT 	EFName, CatName, Rating, Duration
            FROM	(SELECT ef.EFName as 'Essential Function'
                        FROM  I_CAT ic, I_CAT_SCORE ics, EF ef, RATING ra, RTO rt WHERE ic.ImpCatID = ics.ImpCatID
            AND ics.EFID = ef.EFID AND ics.ImpCatID = ic.ImpCatID AND ics.RatingID = ra.RatingID
            AND ics.RtoID = rt.RtoID
                        ORDER BY ef.EFName, ic.CatName) as EFName,	
                    (SELECT ic.CatName as 'Category' 
                        FROM  I_CAT ic, I_CAT_SCORE ics, EF ef, RATING ra, RTO rt
                        WHERE ic.ImpCatID = ics.ImpCatID AND ics.EFID = ef.EFID AND ics.ImpCatID = ic.ImpCatID
            AND ics.RatingID = ra.RatingID AND ics.RtoID = rt.RtoID
                        ORDER BY ef.EFName, ic.CatName) as CatName,
                    RATING ra, RTO rt, I_CAT_SCORE ics, I_CAT ic, EF ef,
                    (SELECT ra.Rating as '2to8Hrs'
                        FROM RTO rt, RATING ra ) AS Duration
            -- 		(SELECT ra.Rating as '2to8Hrs'
            -- 			FROM RTO rt, RATING ra  WHERE rt.RtoID = 2) AS Tier2,
            -- 		(SELECT ra.Rating as '9to24Hrs'
            --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 3) AS Tier3,
                -- 	(SELECT ra.Rating as '1to3Days'
            --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 4) AS Tier4,
            --  		(SELECT ra.Rating as '4to7Days'
            --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 5) AS Tier5,
            --  		(SELECT ra.Rating as '8-15Days'
            --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 6) AS Tier6,
            -- 		(SELECT ra.Rating as '16-31Days'
            -- 			FROM RTO rt, RATING ra  WHERE rt.RtoID = 7) AS Tier7
            WHERE	ra.RatingID = ics.RatingID
            AND		rt.RtoID = ics.RtoID
            AND		ic.ImpCatID = ics.ImpCatID
            AND		ef.EFID = ics.EFID
            GROUP BY EFName, CatName, Duration, Rating
            ORDER BY EFName, CatName, Duration";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<td colspan='9' style='line-height: .1; background: none;'><h4>Existing Impact Category Scores</h4></td>";
        echo "                  <tr><th id='table_header'>Essential Function</th><th id='table_header'>Category</th><th id='table_header'>Rating</th><th id='table_header'>Duration</th>\n";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr id='reference_table'><td> <strong>"  . $row ["EFName"] . "</strong></td><td> <strong>"  . $row ["CatName"] . "</strong></td><td>" . $row["Rating"] . "</td>
            <td>" . $row["Duration"] . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4 id='empty_table'>You have no existing Impact Category Scores</h4>";
    }
    $conn->close();
}
/*

// outputs a data table with existing scores
function show_impact_scores()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//    $sql = "SELECT ic.CatName, ic.CatDesc, ics.1Hour, ics.2to8Hours, ics.9to24Hours, ics.1to3Days, ics.4to7Days, ics.8to15Days, ics.16to31Days, ef.EFName
//            FROM I_CAT ic, I_CAT_SCORING ics, EF ef WHERE ic.ImpCatID = ics.ImpcatID AND ics.EFID = ef.EFID ORDER BY ef.EFName";
//    $sql = "SELECT ic.CatName, ic.CatDesc, ics.1Hour, ics.2to8Hours, ics.9to24Hours, ics.1to3Days, ics.4to7Days, ics.8to15Days, ics.16to31Days FROM I_CAT ic, I_CAT_SCORING ics WHERE ic.ImpCatID = ics.ImpcatID";

//    $sql ="SELECT 	EFName, CatName, Rating
//            FROM
//                (SELECT ef.EFName as 'Essential Function'
//    			FROM  I_CAT ic, I_CAT_SCORE ics, EF ef, RATING ra, RTO rt WHERE ic.ImpCatID = ics.ImpCatID
//    			AND ics.EFID = ef.EFID AND ics.ImpCatID = ic.ImpCatID AND ics.RatingID = ra.RatingID
//    			AND ics.RtoID = rt.RtoID
//    			ORDER BY ef.EFName, ic.CatName) as EFName,
//    		    (SELECT ic.CatName as 'Category'
//    			FROM  I_CAT ic, I_CAT_SCORE ics, EF ef, RATING ra, RTO rt
//    			WHERE ic.ImpCatID = ics.ImpCatID AND ics.EFID = ef.EFID AND ics.ImpCatID = ic.ImpCatID
//    			AND ics.RatingID = ra.RatingID AND ics.RtoID = rt.RtoID
//    			ORDER BY ef.EFName, ic.CatName) as CatName,
//    		    RATING ra, RTO rt, I_CAT_SCORE ics, I_CAT ic, EF ef,
//    	 	         (SELECT ra.Rating as 'r'
//      			FROM RTO rt, RATING ra WHERE rt.RtoID = 1) AS Rating
//                --  		(SELECT ra.Rating as '2to8Hrs'
//                --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 2) AS Tier2,
//                --  		(SELECT ra.Rating as '9to24Hrs'
//                --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 3) AS Tier3,
//                --  		(SELECT ra.Rating as '1to3Days'
//                --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 4) AS Tier4,
//                --  		(SELECT ra.Rating as '4to7Days'
//                --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 5) AS Tier5,
//                --  		(SELECT ra.Rating as '8-15Days'
//                --  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 6) AS Tier6,
//                --  		(SELECT ra.Rating as '16-31Days'
//                -- 			FROM RTO rt, RATING ra  WHERE rt.RtoID = 7) AS Tier7
//            WHERE	ra.RatingID = ics.RatingID
//            AND		rt.RtoID = ics.RtoID
//            AND		ic.ImpCatID = ics.ImpCatID
//            AND		ef.EFID = ics.EFID
//            GROUP BY EFName, CatName
//            ORDER BY EFName, CatName";

    $sql ="SELECT 	EFName, CatName, Rating, Duration
FROM	(SELECT ef.EFName as 'Essential Function'
			FROM  I_CAT ic, I_CAT_SCORE ics, EF ef, RATING ra, RTO rt WHERE ic.ImpCatID = ics.ImpCatID
AND ics.EFID = ef.EFID AND ics.ImpCatID = ic.ImpCatID AND ics.RatingID = ra.RatingID
AND ics.RtoID = rt.RtoID
			ORDER BY ef.EFName, ic.CatName) as EFName,
		(SELECT ic.CatName as 'Category'
			FROM  I_CAT ic, I_CAT_SCORE ics, EF ef, RATING ra, RTO rt
			WHERE ic.ImpCatID = ics.ImpCatID AND ics.EFID = ef.EFID AND ics.ImpCatID = ic.ImpCatID
AND ics.RatingID = ra.RatingID AND ics.RtoID = rt.RtoID
			ORDER BY ef.EFName, ic.CatName) as CatName,
		RATING ra, RTO rt, I_CAT_SCORE ics, I_CAT ic, EF ef,
		(SELECT ra.Rating as '1 Hour'
 			FROM RTO rt, RATING ra WHERE rt.RtoID = 1) AS Duration
-- 		(SELECT ra.Rating as '2to8Hrs'
-- 			FROM RTO rt, RATING ra  WHERE rt.RtoID = 2) AS Tier2,
-- 		(SELECT ra.Rating as '9to24Hrs'
--  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 3) AS Tier3,
 	-- 	(SELECT ra.Rating as '1to3Days'
--  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 4) AS Tier4,
--  		(SELECT ra.Rating as '4to7Days'
--  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 5) AS Tier5,
--  		(SELECT ra.Rating as '8-15Days'
--  			FROM RTO rt, RATING ra  WHERE rt.RtoID = 6) AS Tier6,
-- 		(SELECT ra.Rating as '16-31Days'
-- 			FROM RTO rt, RATING ra  WHERE rt.RtoID = 7) AS Tier7
WHERE	ra.RatingID = ics.RatingID
AND		rt.RtoID = ics.RtoID
AND		ic.ImpCatID = ics.ImpCatID
AND		ef.EFID = ics.EFID
GROUP BY CatName, Rating
ORDER BY EFName, CatName";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<td colspan='9' style='line-height: .1; background: none;'><h4>Existing Impact Category Scores</h4></td>";
        echo "                  <tr><th id='table_header'>Essential Function</th><th id='table_header'>Category</th><th id='table_header'>1 Hr</th><th id='table_header'>2-8 Hrs</th>
                  <th id='table_header'>9-24 Hrs</th><th id='table_header'>1-3Day</th><th id='table_header'>4-7Day</th><th id='table_header'>8-15Day</th><th id='table_header'>16-31Day</th></th>\n";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr id='reference_table'><td> <strong>"  . $row ["EFName"] . "</strong></td><td> <strong>"  . $row ["CatName"] . "</strong></td><td>" . $row["Rating"] . "</td>
            <td>" . $row["Rating"] . "</td><td>" . $row ["Rating"] . "</td><td>" . $row["Rating"] . "</td><td>" . $row["Rating"] . "</td><td>" . $row ["Rating"] . "</td><td>" . $row["Rating"] . "</td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4 id='empty_table'>You have no existing Impact Category Scores</h4>";
    }
    $conn->close();
}*/
