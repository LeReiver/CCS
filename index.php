<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 6:35 PM
 */

// Includes the following files
require_once('includes/utilities.php');
require_once('includes/login_code.php');
require_once('includes/db_code.php');
require_once('includes/constants.php');



// Requires secure connection
require_secure();
// Starts session
session_start();


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
    <title>CCS Login</title>
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
<body class="home_page tint">
<div >
    <div id="login_content">
        <?php echo '&nbsp;<br><br>'; ?>
        <div id="logo"><img src="images/ccs_logo.png" width="600" height="327" </div>
        <?php echo '&nbsp;<br><br>'; ?>
        <!-- User form-->
        <form method="POST" action="index.php">
            <table class="login_table">
                <tr>
                    <th colspan="5"><div class="login_header">Login To Your Account</div></th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Username" name="<?php echo LOGIN_USERNAME_KEY; ?>"
                               value="<?php echo $login_username ?>" autofocus ></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Password" name="<?php echo LOGIN_PASSWORD_KEY; ?>"
                               value="<?php echo $login_password ?>"></td>
                </tr>
                <tr>

                    <!-- Submit button -->
                    <td><div class="login_submit"><input type="submit" value="LOGIN"
                       name="<?php echo LOGIN_BUTTON_VALUE ?>" style="width:80px; margin-right: 170px;margin-left: 250px;" ></div> </td><td></td>
                </tr>
                <tr>

                    <!-- Error message -->
                    <td> <?php echo $error_message; ?></td><td> </td>
                </tr>
            </table>

        </form>
    </div>
</div>
</body>
</html>
