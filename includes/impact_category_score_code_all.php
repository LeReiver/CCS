<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/5/16
 * Time: 12:16 AM
 * 
 * Holds multiple form functions for impact_category_score-b.php
 *
 */

// Require the following files
require_once ('constants.php');


// Creates error_message object of type and detail
function impact_category_score_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><br><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . TABLE_THREE_PAGE);
}

// Creates impact_categories object with supplied parameters
function impact_category_score(
    $impact_category_score_ef_id1,
    $impact_category_score_imp_cat_id1,
    $impact_category_score_rto_id1,
    $impact_category_score_rating_id1,
    $impact_category_score_ef_id2,
    $impact_category_score_imp_cat_id2,
    $impact_category_score_rto_id2,
    $impact_category_score_rating_id2,
    $impact_category_score_ef_id3,
    $impact_category_score_imp_cat_id3,
    $impact_category_score_rto_id3,
    $impact_category_score_rating_id3,
    $impact_category_score_ef_id4,
    $impact_category_score_imp_cat_id4,
    $impact_category_score_rto_id4,
    $impact_category_score_rating_id4,
    $impact_category_score_ef_id5,
    $impact_category_score_imp_cat_id5,
    $impact_category_score_rto_id5,
    $impact_category_score_rating_id5,
    $impact_category_score_ef_id6,
    $impact_category_score_imp_cat_id6,
    $impact_category_score_rto_id6,
    $impact_category_score_rating_id6,
    $impact_category_score_ef_id7,
    $impact_category_score_imp_cat_id7,
    $impact_category_score_rto_id7,
    $impact_category_score_rating_id7

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
    if (empty($impact_category_score_rating_id2)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_2);
    }
    if (empty($impact_category_score_rto_id2)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_2);
    }
    if (empty($impact_category_score_imp_cat_id2)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_2);
    }
    if (empty($impact_category_score_ef_id2)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_2);
    }
    if (empty($impact_category_score_rating_id3)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_3);
    }
    if (empty($impact_category_score_rto_id3)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_3);
    }
    if (empty($impact_category_score_imp_cat_id3)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_3);
    }
    if (empty($impact_category_score_ef_id3)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_3);
    }
    if (empty($impact_category_score_rating_id4)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_4);
    }
    if (empty($impact_category_score_rto_id4)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_4);
    }
    if (empty($impact_category_score_imp_cat_id4)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_4);
    }
    if (empty($impact_category_score_ef_id4)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_4);
    }
    if (empty($impact_category_score_rating_id5)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_5);
    }
    if (empty($impact_category_score_rto_id5)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_5);
    }
    if (empty($impact_category_score_imp_cat_id5)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_5);
    }
    if (empty($impact_category_score_ef_id5)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_5);
    }
    if (empty($impact_category_score_rating_id6)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_6);
    }
    if (empty($impact_category_score_rto_id6)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_6);
    }
    if (empty($impact_category_score_imp_cat_id6)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_6);
    }
    if (empty($impact_category_score_ef_id6)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_6);
    }
    if (empty($impact_category_score_rating_id7)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_7);
    }
    if (empty($impact_category_score_rto_id7)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_7);
    }
    if (empty($impact_category_score_imp_cat_id7)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_7);
    }
    if (empty($impact_category_score_ef_id7)) {
        return impact_category_score_error_message(E_IMPACT_CATEGORY_SCORE, E_NO_IMPACT_CATEGORY_SCORE_EF_ID_7);
    }

    // Calls add_impact_category and passes in user defined parameters to be uploaded to database
    add_impact_category_score_tier1(
        $impact_category_score_ef_id1,
        $impact_category_score_imp_cat_id1,
        $impact_category_score_rto_id1,
        $impact_category_score_rating_id1
    );
    add_impact_category_score_tier2(
        $impact_category_score_ef_id2,
        $impact_category_score_imp_cat_id2,
        $impact_category_score_rto_id2,
        $impact_category_score_rating_id2
    );
    add_impact_category_score_tier3(
        $impact_category_score_ef_id3,
        $impact_category_score_imp_cat_id3,
        $impact_category_score_rto_id3,
        $impact_category_score_rating_id3
    );
    add_impact_category_score_tier4(
        $impact_category_score_ef_id4,
        $impact_category_score_imp_cat_id4,
        $impact_category_score_rto_id4,
        $impact_category_score_rating_id4
    );
    add_impact_category_score_tier5(
        $impact_category_score_ef_id5,
        $impact_category_score_imp_cat_id5,
        $impact_category_score_rto_id5,
        $impact_category_score_rating_id5
    );
    add_impact_category_score_tier6(
        $impact_category_score_ef_id6,
        $impact_category_score_imp_cat_id6,
        $impact_category_score_rto_id6,
        $impact_category_score_rating_id6
    );
    add_impact_category_score_tier7(
        $impact_category_score_ef_id7,
        $impact_category_score_imp_cat_id7,
        $impact_category_score_rto_id7,
        $impact_category_score_rating_id7
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
    $impact_category_score_ef_id2,
    $impact_category_score_imp_cat_id2,
    $impact_category_score_rto_id2,
    $impact_category_score_rating_id2,
    $impact_category_score_ef_id3,
    $impact_category_score_imp_cat_id3,
    $impact_category_score_rto_id3,
    $impact_category_score_rating_id3,
    $impact_category_score_ef_id4,
    $impact_category_score_imp_cat_id4,
    $impact_category_score_rto_id4,
    $impact_category_score_rating_id4,
    $impact_category_score_ef_id5,
    $impact_category_score_imp_cat_id5,
    $impact_category_score_rto_id5,
    $impact_category_score_rating_id5,
    $impact_category_score_ef_id6,
    $impact_category_score_imp_cat_id6,
    $impact_category_score_rto_id6,
    $impact_category_score_rating_id6,
    $impact_category_score_ef_id7,
    $impact_category_score_imp_cat_id7,
    $impact_category_score_rto_id7,
    $impact_category_score_rating_id7,
    $impact_category_score_submit_pressed
    // If no user field is left empty upon submit button pressed, call impact_category_score()
    )
{
    if (!empty($impact_category_score_submit_pressed)) {
        return impact_category_score(
            $impact_category_score_ef_id1,
            $impact_category_score_imp_cat_id1,
            $impact_category_score_rto_id1,
            $impact_category_score_rating_id1,
            $impact_category_score_ef_id2,
            $impact_category_score_imp_cat_id2,
            $impact_category_score_rto_id2,
            $impact_category_score_rating_id2,
            $impact_category_score_ef_id3,
            $impact_category_score_imp_cat_id3,
            $impact_category_score_rto_id3,
            $impact_category_score_rating_id3,
            $impact_category_score_ef_id4,
            $impact_category_score_imp_cat_id4,
            $impact_category_score_rto_id4,
            $impact_category_score_rating_id4,
            $impact_category_score_ef_id5,
            $impact_category_score_imp_cat_id5,
            $impact_category_score_rto_id5,
            $impact_category_score_rating_id5,
            $impact_category_score_ef_id6,
            $impact_category_score_imp_cat_id6,
            $impact_category_score_rto_id6,
            $impact_category_score_rating_id6,
            $impact_category_score_ef_id7,
            $impact_category_score_imp_cat_id7,
            $impact_category_score_rto_id7,
            $impact_category_score_rating_id7
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
//    echo "        </form>\n";
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
//    echo "        </form>\n";
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
//    echo "        </form>\n";
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
    $sql = "SELECT Rating, RatingID FROM RATINGS";
    // Create result from connection and query
    $result = $conn->query($sql);
    echo "    <div id='select_dept'  >\n";
    echo "                <form style='font-size: 1.75em; font-weight: bold; align-content: center'>\n";
    // User input selector
    echo "                <select type='select' name='Rating' style='font-size: .75em; padding: 0;'>\n";
    // While loop to retrieve every row in table that matches query
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                <option value='" . $row["Rating"] . "'>" . $row ["RatingID"] ." ". $row ["Rating"] . "</option>\n";
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



function score_impact_categories()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql2 = "SELECT Rating, RatingID FROM RATINGS ";
    // Create result from connection and query
    $result2 = $conn->query($sql2);

            echo "                <select type='select' name='RatingID' style='font-size: .75em;'>\n";

            // While loop to retrieve every row in table that matches query
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row = $result2->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] . " - " . $row["Rating"] . "</option>\n";
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
    $sql_rating1 = "SELECT Rating, RatingID FROM RATINGS ";
    $sql_rating2 = "SELECT Rating, RatingID FROM RATINGS ";
    $sql_rating3 = "SELECT Rating, RatingID FROM RATINGS ";
    $sql_rating4 = "SELECT Rating, RatingID FROM RATINGS ";
    $sql_rating5 = "SELECT Rating, RatingID FROM RATINGS ";
    $sql_rating6 = "SELECT Rating, RatingID FROM RATINGS ";
    $sql_rating7 = "SELECT Rating, RatingID FROM RATINGS ";

    $sql_rto1 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 1";
    $sql_rto2 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 2";
    $sql_rto3 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 3";
    $sql_rto4 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 4";
    $sql_rto5 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 5";
    $sql_rto6 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 6";
    $sql_rto7 = "SELECT RtoID, Duration FROM RTO WHERE RtoID = 7";

    $sql_impcat1 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql_impcat2 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql_impcat3 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql_impcat4 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql_impcat5 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql_impcat6 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql_impcat7 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";

    $sql_ef1 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $sql_ef2 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $sql_ef3 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $sql_ef4 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $sql_ef5 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $sql_ef6 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";
    $sql_ef7 = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName FROM DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID";


    // Create result from connection and query


    $rs_ef1 = $conn->query($sql_ef1);
    $rs_ef2 = $conn->query($sql_ef2);
    $rs_ef3 = $conn->query($sql_ef3);
    $rs_ef4 = $conn->query($sql_ef4);
    $rs_ef5 = $conn->query($sql_ef5);
    $rs_ef6= $conn->query($sql_ef6);
    $rs_ef7 = $conn->query($sql_ef7);

    $rs_impcat1 = $conn->query($sql_impcat1);
    $rs_impcat2 = $conn->query($sql_impcat2);
    $rs_impcat3 = $conn->query($sql_impcat3);
    $rs_impcat4 = $conn->query($sql_impcat4);
    $rs_impcat5 = $conn->query($sql_impcat5);
    $rs_impcat6 = $conn->query($sql_impcat6);
    $rs_impcat7 = $conn->query($sql_impcat7);

    $rs_rto1 = $conn->query($sql_rto1);
    $rs_rto2 = $conn->query($sql_rto2);
    $rs_rto3 = $conn->query($sql_rto3);
    $rs_rto4 = $conn->query($sql_rto4);
    $rs_rto5 = $conn->query($sql_rto5);
    $rs_rto6 = $conn->query($sql_rto6);
    $rs_rto7 = $conn->query($sql_rto7);

    $rs_rating1 = $conn->query($sql_rating1);
    $rs_rating2 = $conn->query($sql_rating2);
    $rs_rating3 = $conn->query($sql_rating3);
    $rs_rating4 = $conn->query($sql_rating4);
    $rs_rating5 = $conn->query($sql_rating5);
    $rs_rating6 = $conn->query($sql_rating6);
    $rs_rating7 = $conn->query($sql_rating7);


    echo "        <tr><th class='form_label' style='text-align: start' margin: colspan='2'>If this function were disrupted,</th>";
    echo "                <td class='styled-select slate'><select  type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef1->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef1->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
        echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat1->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat1->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO

    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 1 Hour</th>";
    echo "                <td hidden ><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto1->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto1->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "       <div id='select_dept'  >\n";
    echo "            <th class='form_label' style='text-align: end; width: 90px; padding: 0 2px;'> will create </th>";
    echo "                <td class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating1->num_rows > 0) {
    // output data of each row
        while ($row = $rs_rating1->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select>";
        echo "        </td>";
        echo "    </tr>";
        echo "</table>\n";
    }
    
    
    // Tier 2

    // Hidden table field for spacing

    echo "    <div id='select_dept'  >\n";
    echo "    <table  hidden class='form_table' style='margin: 20px 0 0 -200px; width: 700px;'>";
    echo "        <tr>";
    echo "           <th  class='form_label' style='text-align: start'>The chart below will assist in rating the actual impact of the loss of the function.<br><br>";
    echo "            </th>";
    echo "        </tr>";
    echo "  </table>";
    echo "  <table class='form_table' style='margin: 0 0 0 -200px;'>";
    echo "    <div id='select_dept'  >\n";
    echo "         <tr>";
    echo "            <th class='form_label' style='text-align: start' colspan='2'>If this function were disrupted,</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef2->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef2->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat2->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat2->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo " </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 2 to 8 Hours</th>";
    echo "                <td hidden ><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto2->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto2->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "                <th class='form_label' style='text-align: end; width: 90px; padding-right: 1px;'> will create </th>";
    echo "                <td class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating2->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating2->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] -1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select></td></tr></table>\n";
    }

    // Tier 3


    // Hidden table field for spacing

    echo "    <div id='select_dept'  >\n";
    echo "    <table  hidden class='form_table' style='margin: 20px 0 0 -200px; width: 700px;'>";
    echo "        <tr>";
    echo "           <th  class='form_label' style='text-align: start'>The chart below will assist in rating the actual impact of the loss of the function.<br><br>";
    echo "            </th>";
    echo "        </tr>";
    echo "  </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -200px;'>";
    echo "    <div id='select_dept'  >\n";
    echo "            <tr><th class='form_label' style='text-align: start' colspan='2'>If this function were disrupted,</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef3->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef3->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat3->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat3->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo " </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 9 - 24 Hours</th>";
    echo "                <td hidden ><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto3->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto3->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "                <th class='form_label' style='text-align: end; width: 90px; padding-right: 1px;'> will create </th>";
    echo "                <td class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating3->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating3->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select></td></tr></table>\n";
    }


    // Tier 4


    // Hidden table field for spacing

    echo "    <div id='select_dept'  >\n";
    echo "    <table  hidden class='form_table' style='margin: 20px 0 0 -200px; width: 700px;'>";
    echo "        <tr>";
    echo "           <th  class='form_label' style='text-align: start'>The chart below will assist in rating the actual impact of the loss of the function.<br><br>";
    echo "            </th>";
    echo "        </tr>";
    echo "  </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -200px;'>";
    echo "    <div id='select_dept'  >\n";
    echo "            <tr><th class='form_label' style='text-align: start' colspan='2'>If this function were disrupted,</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef4->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef4->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat4->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat4->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo " </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 1 to 3 Days</th>";
    echo "                <td hidden  class='styled-select slate'><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto4->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto4->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "                <th class='form_label' style='text-align: end; width: 90px; padding-right: 1px;'> will create </th>";
    echo "                <td class='styled-select slate' class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating4->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating4->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select></td></tr></table>\n";
    }


    // Tier 5




    // Hidden table field for spacing

    echo "    <div id='select_dept'  >\n";
    echo "    <table  hidden class='form_table' style='margin: 20px 0 0 -200px; width: 700px;'>";
    echo "        <tr>";
    echo "           <th  class='form_label' style='text-align: start'>The chart below will assist in rating the actual impact of the loss of the function.<br><br>";
    echo "            </th>";
    echo "        </tr>";
    echo "  </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -200px;'>";
    echo "    <div id='select_dept'  >\n";
    echo "            <tr><th class='form_label' style='text-align: start' colspan='2'>If this function were disrupted,</th>";
    echo "                <td colspan='2' class='styled-select slate' class='styled-select slate'><select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef5->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef5->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat5->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat5->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo " </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 4 to 7 Days</th>";
    echo "                <td hidden  class='styled-select slate'><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto5->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto5->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "                <th class='form_label' style='text-align: end; width: 90px; padding-right: 1px;'> will create </th>";
    echo "                <td class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating5->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating5->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select></td></tr></table>\n";
    }


    // Tier 6



    // Hidden table field for spacing

    echo "    <div id='select_dept'  >\n";
    echo "    <table  hidden class='form_table' style='margin: 20px 0 0 -200px; width: 700px;'>";
    echo "        <tr>";
    echo "           <th  class='form_label' style='text-align: start'>The chart below will assist in rating the actual impact of the loss of the function.<br><br>";
    echo "            </th>";
    echo "        </tr>";
    echo "  </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -200px;'>";
    echo "    <div id='select_dept'  >\n";
    echo "            <tr><th class='form_label' style='text-align: start' colspan='2'>If this function were disrupted,</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef6->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef6->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat6->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat6->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo " </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 8 to 15 Days</th>";
    echo "                <td hidden  class='styled-select slate'><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto6->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto6->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "                <th class='form_label' style='text-align: end; width: 90px; padding-right: 1px;'> will create </th>";
    echo "                <td class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating6->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating6->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select></td></tr></table>\n";
    }




    // Tier 7



    // Hidden table field for spacing

    echo "    <div id='select_dept'  >\n";
    echo "    <table  hidden class='form_table' style='margin: 20px 0 0 -200px; width: 700px;'>";
    echo "        <tr>";
    echo "           <th  class='form_label' style='text-align: start'>The chart below will assist in rating the actual impact of the loss of the function.<br><br>";
    echo "            </th>";
    echo "        </tr>";
    echo "  </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -200px;'>";
    echo "    <div id='select_dept'  >\n";
    echo "            <tr><th class='form_label' style='text-align: start' colspan='2'>If this function were disrupted,</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='EFID' style='font-size: .75em;'>\n";
    // While loop to retrieve essential function id
    if ($rs_ef7->num_rows > 0) {
        // output data of each row
        while ($row = $rs_ef7->fetch_assoc()) {
            echo "                <option value='" . $row["EFID"] . "'>" . $row ["EFName"] . ": "
                . $row["DeptName"] . " Department, " . $row ["Organization"] . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "<tr><th class='form_label' style='text-align: start' colspan='2'> to what degree ...</th>";
    echo "                <td colspan='2' class='styled-select slate'><select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
    // While loop to retrieve impact category id
    if ($rs_impcat7->num_rows > 0) {
        // output data of each row
        while ($row = $rs_impcat7->fetch_assoc()) {
            echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatDesc"] . " (" . $row ["CatName"] . ")" . "</option>\n";
        }
        echo "                </select></td></tr>\n";
    }
    echo "               <tr><style='font-size: 1.75em; font-weight: bold; float: right'>\n";
    // User input selector - Select RTO
    echo " </table>";
    echo "    <table class='form_table' style='margin: 0 0 0 -350px;'>";
    echo "                <th class='form_label' style='text-align: end; width: 375px; padding: 0 2px;'> A loss of 16 to 31 Days</th>";
    echo "                <td hidden  class='styled-select slate'><select type='select' name='RtoID' style='font-size: .75em;'>\n";
    // While loop to retrieve rto id
    if ($rs_rto7->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rto7->fetch_assoc()) {
            echo "                <option value='" . $row["RtoID"] . "'>" . $row["Duration"] . "</option>\n";
        }
        echo "                </select></td>\n";

    }
    echo "                <th class='form_label' style='text-align: end; width: 90px; padding-right: 1px;'> will create </th>";
    echo "                <td class='styled-select slate'><select type='select' name='RatingID' style='font-size: .75em;'>\n";

    // While loop to retrieve rating id
    if ($rs_rating7->num_rows > 0) {
        // output data of each row
        while ($row = $rs_rating7->fetch_assoc()) {
            echo "                <option value='" . $row["RatingID"] . "'>" . ($row ["RatingID"] - 1) ." - ". $row["Rating"] . "</option>\n";
        }
        echo "               </select>";
    } else {
        echo "0 results";
    }
    echo "    </td>";
    echo "</tr>\n";

    $conn->close();

}


function show_table_three()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT rt.Duration, ef.EFName, ic.CatName, ra.RatingID ,rt.RtoID
FROM EF ef, RTO rt, I_CAT ic, RATING ra, I_CAT_SCORE ics
WHERE ef.EFID = ics.EFID AND ic.ImpCatID = ics.ImpCatID AND ics.RtoID = rt.RtoID AND ics.RatingID = ra.RatingID AND ra.RatingID != 0 ORDER BY RtoID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='100%' style='margin-left: 200px;'>";
        echo "<tr><th><h4>RTO</h4></th><th><h4>Essential Function</h4></th><th><h4>Impact Category</h4></th><th><h4>Rating</h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr><td  id='table_reference'>" . $row ["Duration"] . "</td><td> " . $row ["EFName"]
                . "</td><td> " . $row ["CatName"] . "</td><td> " . $row ["RatingID"] . "</td></tr>\n";

//            echo "<tr style='background-color: transparent'><td></td></tr>";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Recovery Time Objectives with Corresponding Essential Functions</h4>";
    }
    $conn->close();
}


//
//
//    if ($rs_rto2->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rto2->fetch_assoc()) {
//            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
//    }
//
//
//
//
//    if ($rs_rto3->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rto3->fetch_assoc()) {
//            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    if ($rs_rto4->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rto4->fetch_assoc()) {
//            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
//    }
//
//
//
//
//    if ($rs_rto5->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rto5->fetch_assoc()) {
//            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
//    }
//
//
//
//
//    if ($rs_rto6->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rto6->fetch_assoc()) {
//            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RtoID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    if ($rs_rto7->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rto7->fetch_assoc()) {
//            echo "                <option value='" . $row["RtoID"] . "'>" . $row ["Duration"] . "</option>\n";
//        }
//        echo "                </select>\n";
//    } else {
//        echo "0 results";
//    }
//    echo "    </div></tr> \n";
//
//
//
//
//
//    // Select Rating
//
//
//
//
//    echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating1->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating1->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating2->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating2->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating3->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating3->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating4->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating4->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating5->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating5->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating6->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating6->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//        echo "                <td><select type='select' name='RatingID' style='font-size: .75em;'>\n";
//    }
//
//
//
//    // While loop to retrieve every row in table that matches query
//    if ($rs_rating7->num_rows > 0) {
//        // output data of each row
//        while ($row = $rs_rating7->fetch_assoc()) {
//            echo "                <option value='" . $row["RatingID"] . "'>" . $row ["RatingID"] ." - ". $row["Rating"] . "</option>\n";
//        }
//        echo "                </select>\n";
//    }
//