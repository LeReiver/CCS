<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 6:35 PM
 * 
 * User register page
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


// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

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
    <title>CCS Register</title>
    <?php include_once ('includes/head_files.php'); ?>
</head>
<body class="tint">
<div >
    <div id="login_content">
        <?php echo '&nbsp;<br><br>'; ?>
        <div id="logo"><img src="images/ccs_logo.png" width="600" height="327" </div>
        <?php echo '&nbsp;<br><br>'; ?>
        <!-- User form-->
        <form method="POST" action="register.php">
            <table class="login_table">
                <tr>
            <tr><th colspan="5"><div class="login_header">Register a New Account</div></th></tr>
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

                <!-- Register button -->
                <td class="login_submit"><input type="submit" value="REGISTER"
                    name="<?php echo REGISTER_BUTTON_VALUE ?>" style="width: 80px; margin-right: 170px;margin-left: 250px;"></td><td></td> </tr>

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
