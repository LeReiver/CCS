<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 2/12/17
 * Time: 4:43 PM
 */

include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Impact Category Score Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">  <!-- Enables mobile auto-resize -->
    <link rel="stylesheet" href="includes/ccs.css.php" type="text/css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant|Gudea|Hind+Madurai|Rosario" rel="stylesheet">
    <link rel="stylesheet" href="includes/responsive_nav.css.php"> <!-- Hamburger Menu for Responsive Navigation -->
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.min.js"></script>
</head>
<body>
<?php
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="SELECT 	EFName, CatName, Duration, Rating, ScoreID
            FROM	RATING ra, RTO rt, I_CAT_SCORE ics, I_CAT ic, EF ef
            WHERE	ra.RatingID = ics.RatingID
            AND		rt.RtoID = ics.RtoID
            AND		ic.ImpCatID = ics.ImpCatID
            AND		ef.EFID = ics.EFID
            GROUP BY EFName, CatName, Duration, Rating
            ORDER BY EFName, CatName, rt.RtoID, Duration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table id='score_table'>";
    echo "<td colspan='9' style='line-height: .1; background: none;'><h4>Existing Impact Category Scores</h4></td>";
    echo "                  <tr><th id='table_header'>Essential Function</th><th id='table_header'>Category</th><th id='table_header'>Rating</th><th id='table_header'>Duration</th>\n";
    while ($row = $result->fetch_assoc()) {
        echo "                <tr id='reference_table'><td> <strong>"  . $row ["EFName"] . "</strong></td><td> <strong>"  . $row ["CatName"] . "</strong></td><td>" . $row["Duration"] . "</td>
            <td>" . $row["Rating"] . "</td>
        <td id='reference_table'  style='border:none;'>
            <input type='hidden' value=" .$row["ScoreID"]."  name='id'\>
            <form action='includes/delete.php' method='GET'>
            <button id='delete_row' name='delete_score' value=".$row["ScoreID"].">DELETE</button></form>";
        echo "</td></tr>\n";
    }
    echo "</table>";
} else {
    echo " <h4 id='empty_table'>You have no existing Impact Category Scores</h4>";
}
$conn->close();
?>
</body>
</html>
