<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/26/16
 * Time: 4:02 PM
 */

// Includes the following files
include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');

class RATING {

    public static function get_rating()
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
        // While loop to retrieve every row in table that matches query
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        // User input radio buttons
                echo "               <input type='radio' name='RatingID' value='" . $row["RatingID"] . "'>"
                    . " &nbsp;" . ($row["RatingID"] - 1) . " - " .  $row ["Rating"] . "<br>\n";
            }
        } else {
            echo "0 results";
        }
        echo "    </div>\n";
        // Close connection
        $conn->close();
    }

//    public static function get_rating()
//    {
//        // Get connection
//        $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
//        // Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//        // SQL query
//        $sql = "SELECT Rating, RatingID FROM RATINGS";
//        // Create result from connection and query
//        $result = $conn->query($sql);
//        // User input selector
//        echo "                <select type='select' name='RatingID' style='font-size: .75em;'>\n";
//        // While loop to retrieve every row in table that matches query
//        if ($result->num_rows > 0) {
//            // output data of each row
//            while ($row = $result->fetch_assoc()) {
//                echo "                <option value='" . $row["RatingID"] . "'>" . ($row["RatingID"] - 1) . " - " .  $row ["Rating"] . "</option>\n";
//            }
//            echo "                </select>\n";
//        } else {
//            echo "0 results";
//        }
//        echo "    </div>\n";
//        // Close connection
//        $conn->close();
//    }

}
