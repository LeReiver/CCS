<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/22/16
 * Time: 3:06 PM
 */

// Includes the following files
include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');
include_once('includes/func_processes_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$func_process_description = get_post_value(FUNC_PROCESS_DESCRIPTION_FIELD);
$ef_id = get_post_value(FUNC_PROCESS_EFID_FIELD);
$func_process_submit_pressed = get_post_value(FUNC_PROCESS_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$func_process_error_message = func_process_submit(
    $ef_id,
    $func_process_description,
    $func_process_submit_pressed
);


// Disables Cache-Control for browsers
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCS | Function Processes</title>
    <link rel="stylesheet" href="includes/ccs.css.php" type="text/css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
    <div id="form_content">
        <h2>Function Processes</h2>
        <!-- Error message -->
        <p id="submit_error"><?php echo $company_error_message ; ?></p>
        <form method="POST" action="function_processes.php">
            <!-- User form-->
            <table class="form_table">
                <tr>
                    <!--  Input label -->
                    <th class="form_label">Essential Function: </th>
                    <!-- User selector gets essential functions -->
                    <td colspan="2" class="form_input"> <?php get_essential_functions() ?></td>
                </tr>
                <tr><th class="form_label">Function Processes Description: </th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_PROCESS_DESCRIPTION_FIELD; ?>"
                                           value="<?php echo $func_process_description ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <!-- Submit form-->
                <div class="submit_table">
                    <tr>
                        <td></td>
                        <!-- Submit button -->
                        <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                name="<?php echo FUNC_PROCESS_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;margin-left: 400px;'></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Reset button -->
                        <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;margin-left: 400px;'></div></td>
                    </tr>
                </div>
            </table>
        </form>
    </div>
</body>
</html>

