<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/4/16
 * Time: 11:12 PM
 *
 * Destroys current session and redirects to logged out page
 */

// Includes following files
include_once('includes/utilities.php');
include_once('includes/constants.php');

// Starts session
session_start();
// Destroys session / redirects to logged out page
session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Logged Out</title>
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
    <h1>&nbsp;</h1>
    <h1>GOOD BYE!</h1>
    <h4 style="margin: 0 auto; font-size: 120%; text-align: center;">You have successfully logged out</h4><br><h3>Please close your browser for maximum security<br>&nbsp;<br>or<br></h3>
    <h4 style="margin: 0 auto; text-align: center;"><a href="index.php"> Return to Login page</a></h4>
</body>
</html>
