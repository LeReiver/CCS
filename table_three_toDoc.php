<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/22/16
 * Time: 3:06 PM
 */

header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("content-disposition: attachment;filename=table_three.doc");// Disables Cache-Control in browsers for testing
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");


// Includes the following files
include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');
include_once('includes/table_three_code.php');

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
    <title>CCS | Table Three</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">  <!-- Enables mobile auto-resize -->
    <!-- <link rel="stylesheet" href="includes/ccs.css.php" type="text/css"> -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Assistant|Gudea|Hind+Madurai|Rosario" rel="stylesheet">
    <!-- <link rel="stylesheet" href="includes/responsive_nav.css.php"> <!Hamburger Menu for Responsive Navigation -->
    <!-- <script src="jquery-ui/external/jquery/jquery.js"></script> -->
    <!-- <script src="jquery-ui/jquery-ui.min.js"></script> -->
</head>

<body>
    <div id="form_content">
        <h2 style="top: 20px;">Table Three</h2>
        <div class="table_reference_page" id="reports">
            <?php show_table_three()?>
        </div>
    </div>
<script>
    // Adds selected class to current page in navigation
    $(document).ready(function(){
        $("[href='table_three.php']").addClass("selected");
    });
</script>
</body>
</html>
