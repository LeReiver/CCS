<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 9:11 PM
 */

// Includes the following files
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

// Disables Cache-Control for browsers
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");


// Creates variables using the get_post_value function and passes in constants for each entered field
$login_username = get_post_value(LOGIN_USERNAME_KEY);
$login_password = get_post_value(LOGIN_PASSWORD_KEY);
$login_pressed = get_post_value(LOGIN_BUTTON_VALUE);
$register_username = get_post_value(REGISTER_USERNAME_KEY);
$register_password = get_post_value(REGISTER_PASSWORD_KEY);
$register_confirm_password = get_post_value(REGISTER_CONFIRM_PASSWORD_KEY);
$register_pressed = get_post_value(REGISTER_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$error_message = login_or_register(
    $login_pressed,
    $register_pressed,
    $login_username,
    $login_password,
    $register_username,
    $register_password,
    $register_confirm_password
);
?>


<!doctype html>
<html lang="en">
<head>
    <title>Welcome</title>
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
// Shows logo
show_logo();
// Shows logged in user
show_user();
// Includes navigation file
include_once ('includes/nav.php');
?>
    <div id="welcome">
        <?php echo " <h1>Welcome " . get_session_value(SESSION_USERNAME_KEY)  . "!</h1>"; ?>
    </div>

<div id="login_content">
    <?php echo '&nbsp;<br><br>'; ?>
<!--    <div id="logo"><img src="images/ccs_logo.png" width="600" height="327" </div>-->
    <?php echo '&nbsp;<br><br>'; ?>
    <!-- User form-->
    <form method="POST" action="register.php">
        <table class="register_table">
            <tr>
            <tr><th colspan="5"><div class="register_header">Register a New Account</div></th></tr>
            <tr>
                <td><input type="text" placeholder="Username" name="<?php echo REGISTER_USERNAME_KEY; ?>"
                           value="<?php echo $register_username ?>"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Create Password" name="<?php echo REGISTER_PASSWORD_KEY; ?>"
                           value="<?php echo $register_password ?>"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Confirm Password" name="<?php echo REGISTER_CONFIRM_PASSWORD_KEY; ?>"
                           value="<?php echo $register_confirm_password ?>"></td>
            </tr>
            <tr>
                <!-- Error message -->
                <td> <?php echo $error_message; ?></td>
       
                <!-- Register button -->
                <td class="login_submit"><button type="submit" value="REGISTER"
                                                name="<?php echo REGISTER_BUTTON_VALUE ?>" style="width: 80px;">Register</button></td>
            </tr>
        </table>
    </form>
</div>
<script>
    // Adds selected class to current page in navigation
    $(document).ready(function(){
        $("[href='home.php']").addClass("selected");
    });
</script>
</body>
</html>