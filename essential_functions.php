<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/22/16
 * Time: 3:06 PM
 * 
 * User Essential Functions page
 */

// Includes the following files
include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');
include_once('includes/ef_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$ef_name = get_post_value(EF_NAME_FIELD);
$ef_lead_name = get_post_value(EF_LEAD_FIELD);
$ef_lead_title = get_post_value(EF_LEAD_TITLE_FIELD);
$ef_lead_email = get_post_value(EF_LEAD_EMAIL_FIELD);
$ef_lead_phone = get_post_value(EF_LEAD_PHONE_FIELD);
$dept_id = get_post_value(DEPARTMENT_ID_FIELD);
$ef_submit_pressed = get_post_value(EF_SUBMIT_BUTTON_VALUE);
$add_new_function = get_post_value(EF_ADD_FUNCTION_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$ef_error_message = ef_submit(
    $ef_name,
    $ef_lead_name,
    $ef_lead_title,
    $ef_lead_email,
    $ef_lead_phone,
    $dept_id,
    $ef_submit_pressed
);

// Disables Cache-Control for browsers
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
?>

<!doctype html>
<html lang="en">
<head>
    <title>CCS | Essential Functions</title>
    <?php include_once ('includes/head_files.php'); ?>
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
        <h2>Add Essential Functions</h2>
        <!-- Error message -->
        <p id="submit_error"><?php echo $ef_error_message ; ?></p>
        <div class="input_reference" id="reports">
            <!-- Reference Table -->
            <button onclick="open_essential_functions()">Show Essential Functions</button>
        </div>
        <form method="POST" action="essential_functions.php">
            <!-- User form-->
            <table class="form_table" style="margin: 20px 200px 0 0;">
            <tr>
                  <th class="form_label">Department: </th>    <!--  Input label-->
                  <td colspan="2" class="form_input"> <?php get_departments() ?></td> <!-- User selector gets departments -->
                </tr>
                <tr><th class="form_label">Essential Function Name: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo EF_NAME_FIELD; ?>"
                                           value="<?php echo $ef_name ?>"></td>
                </tr>
                <tr>
                    <th class="form_label">Essential Function Lead Name: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo EF_LEAD_FIELD; ?>"
                                           value="<?php echo $ef_lead_name ?>"></td>
                </tr>
                <tr>
                    <th class="form_label">Essential Function Lead Title: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo EF_LEAD_TITLE_FIELD; ?>"
                                           value="<?php echo $ef_lead_title?>"></td>
                </tr>
                <tr><th class="form_label">Essential Function Lead Email: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo EF_LEAD_EMAIL_FIELD; ?>"
                                           value="<?php echo $ef_lead_email ?>"></td>
                </tr>
                <tr>
                    <th class="form_label">Essential Function Lead Phone Number: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo EF_LEAD_PHONE_FIELD; ?>"
                                           value="<?php echo $ef_lead_phone ?>"></td>
                </tr>
                <!-- Submit form-->
                <div class="submit_table">
                    <tr>
                        <td></td>
                        <!-- Submit button -->
                        <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                name="<?php echo EF_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;margin-left: 250px;'></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Reset button -->
                        <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;margin-left: 250px;'></div></td>
                    </tr>
                </div>
            </table>
        </form>
        <div>
    </div>
<script>
    // Adds selected class to current page in navigation
    $(document).ready(function(){
        $("[href='essential_functions.php']").addClass("selected");
    });
    // Opens tables
    function open_essential_functions() {
        window.open("essential_functions_table.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=430,height=400");
    }
</script>
</body>
</html>
