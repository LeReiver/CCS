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
    <?php include_once ('includes/head_files.php'); ?>
</head>
<body>
<h1>&nbsp;</h1>
<h1>GOOD BYE!</h1>
<h2>You have successfully logged out</h2><br><h3>Please close your browser for maximum security<br>&nbsp;<br>or<br></h3>
<h4><a href="index.php"> Return to Login page</a></h4>
</body>
</html>
