<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/5/16
 * Time: 12:16 AM
 * 
 * Holds multiple form functions
 *
 */

include ('RATING.php');

// Creates error_message object of type and detail
function impact_category_scoring_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . IMPACT_CATEGORY_SCORING_PAGE);
}

// Creates impact_categories object with supplied parameters
function impact_category_scoring(
    $impact_category_scoring_tier_1,
    $impact_category_scoring_tier_2,
    $impact_category_scoring_tier_3,
    $impact_category_scoring_tier_4,
    $impact_category_scoring_tier_5,
    $impact_category_scoring_tier_6,
    $impact_category_scoring_tier_7,
    $impact_category_scoring_imp_cat_id,
    $impact_category_scoring_efid
    )
{
    // If user field is left blank, give corresponding error
    if (empty($impact_category_scoring_tier_1)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_ONE);
    }
    if (empty($impact_category_scoring_tier_2)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_TWO);
    }
    if (empty($impact_category_scoring_tier_3)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_THREE);
    }
    if (empty($impact_category_scoring_tier_4)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_FOUR);
    }
    if (empty($impact_category_scoring_tier_5)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_FIVE);
    }
    if (empty($impact_category_scoring_tier_6)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_SIX);
    }
    if (empty($impact_category_scoring_tier_7)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_TIER_SEVEN);
    }
    if (empty($impact_category_scoring_imp_cat_id)) {
        return impact_category_scoring_error_message(E_IMPACT_CATEGORY_SCORING, E_NO_IMPACT_CATEGORY_SCORING_IMP_CAT_ID);
    }

    // Calls add_impact_category and passes in user defined parameters to be uploaded to database
    add_impact_category_scoring(
        $impact_category_scoring_tier_1,
        $impact_category_scoring_tier_2,
        $impact_category_scoring_tier_3,
        $impact_category_scoring_tier_4,
        $impact_category_scoring_tier_5,
        $impact_category_scoring_tier_6,
        $impact_category_scoring_tier_7,
        $impact_category_scoring_imp_cat_id,
        $impact_category_scoring_efid
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function impact_category_scoring_submit(
    $impact_category_scoring_tier_1,
    $impact_category_scoring_tier_2,
    $impact_category_scoring_tier_3,
    $impact_category_scoring_tier_4,
    $impact_category_scoring_tier_5,
    $impact_category_scoring_tier_6,
    $impact_category_scoring_tier_7,
    $impact_category_scoring_imp_cat_id,
    $impact_category_scoring_efid,
    $impact_category_scoring_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call essential_function()
    if (!empty($impact_category_scoring_submit_pressed)) {
        return impact_category_scoring(
            $impact_category_scoring_tier_1,
            $impact_category_scoring_tier_2,
            $impact_category_scoring_tier_3,
            $impact_category_scoring_tier_4,
            $impact_category_scoring_tier_5,
            $impact_category_scoring_tier_6,
            $impact_category_scoring_tier_7,
            $impact_category_scoring_imp_cat_id,
            $impact_category_scoring_efid
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



function score_impact_categories()
{
    // Get connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query
    $sql = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql1 = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $sql2 = "SELECT Rating, RatingID FROM RATING ";
    $sql3 = "SELECT Rating, RatingID FROM RATING ";
    $sql4 = "SELECT Rating, RatingID FROM RATING ";
    $sql5 = "SELECT Rating, RatingID FROM RATING ";
    $sql6 = "SELECT Rating, RatingID FROM RATING ";
    $sql7 = "SELECT Rating, RatingID FROM RATING ";
    $sql8 = "SELECT Rating, RatingID FROM RATING ";

    // Create result from connection and query
    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);
    $result5 = $conn->query($sql5);
    $result6 = $conn->query($sql6);
    $result7 = $conn->query($sql7);
    $result8 = $conn->query($sql8);

/*
    if ($result->num_rows > 0) {
        echo "<div class='scoring_grid'><tr>";
        while ($row = $result->fetch_assoc()) {*/

            echo " <tr><td>"; get_essential_functions();
            echo "</td></tr>";
            echo " <tr><td colspan='2'> to what degree ...</td>
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 1</th>
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 2</th>   
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 3</th>   
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 4</th>  
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 5</th>  
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 6</th> 
                    <th  colspan=\"1\" class=\"form_label\" style=\"text-align: center\">Tier 7</th>  </tr>";
            echo "    <tr><td colspan='2'><div id='select_dept'  >\n";
            echo "                <form style='font-size: 1.75em; font-weight: bold; float: right'>\n";
            // User input selector
            echo "                <select type='select' name='ImpCatID' style='font-size: .75em;'>\n";
            // While loop to retrieve every row in table that matches query
            if ($result1->num_rows > 0) {
                // output data of each row
                while ($row = $result1->fetch_assoc()) {
                    echo "                <option value='" . $row["ImpCatID"] . "'>" . $row ["CatName"] . ': ' . $row ["CatDesc"] . "</option>\n";
                }
                echo "                </select>\n";
                echo "                <td><select type='select' name='TierOne' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row = $result2->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";

                echo "                <td><select type='select' name='TierTwo' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result3->num_rows > 0) {
                // output data of each row
                while ($row = $result3->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";

                echo "                <td><select type='select' name='TierThree' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result4->num_rows > 0) {
                // output data of each row
                while ($row = $result4->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";

                echo "                <td><select type='select' name='TierFour' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result5->num_rows > 0) {
                // output data of each row
                while ($row = $result5->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";

                echo "                <td><select type='select' name='TierFive' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result6->num_rows > 0) {
                // output data of each row
                while ($row = $result6->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";

                echo "                <td><select type='select' name='TierSix' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result7->num_rows > 0) {
                // output data of each row
                while ($row = $result7->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";

                echo "                <td><select type='select' name='TierSeven' style='font-size: .75em;'>\n";
            }
            // While loop to retrieve every row in table that matches query
            if ($result8->num_rows > 0) {
                // output data of each row
                while ($row = $result8->fetch_assoc()) {
                    echo "                <option value='" . $row["RatingID"] . "'>" . $row["Rating"] . "</option>\n";
                }
                echo "                </select>\n";
            } else {
                echo "0 results";
            }
            echo "        </form>\n";
            echo "    </div></td></tr>\n";

////
//        }
//    }
    // Close connection
    $conn->close();

}


function scoring_grid()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>" . $row [score_impact_categories()] . "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}


function show_impact_categories()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT CatName, CatDesc, ImpCatID FROM I_CAT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td class='form_label' style='text-align: start' colspan='2'>" . $row["CatName"] . ":</td><td colspan='2'>" . $row["CatDesc"] . "</td></tr>";
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
            echo "                <form style='font-size: 1.75em; font-weight: bold; float: right'>\n";
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
            echo "                <form style='font-size: 1.75em; font-weight: bold; float: right'>\n";
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
                        
