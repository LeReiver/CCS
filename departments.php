<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/22/16
 * Time: 3:06 PM
 *
 * User Departments page
 */

// Includes the following files
include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');
include_once ('includes/dept_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$dept_name = get_post_value(DEPT_NAME_FIELD);
$dept_contact = get_post_value(DEPT_CONTACT_FIELD);
$deptContact_title = get_post_value(DEPT_CONTACT_TITLE_FIELD);
$deptContact_email = get_post_value(DEPT_CONTACT_EMAIL_FIELD);
$deptContact_phone = get_post_value(DEPT_CONTACT_PHONE_FIELD);
$organization_name = get_post_value(ORGANIZATION_NAME_FIELD);
$company_submit_pressed = get_post_value(COMPANY_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$company_error_message = department_submit(
    $dept_name,
    $dept_contact,
    $deptContact_title,
    $deptContact_email,
    $deptContact_phone,
    $organization_name,
    $company_submit_pressed
);

// Disables Cache-Control for browsers
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");

?>

<!doctype html>
<html lang="en">
<head>
    <title>CCS | Departments</title>
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
    <div id="form_content">
            <!-- Error message -->
            <p id="submit_error"><?php echo $company_error_message ; ?></p>
            <form method="POST" action="departments.php">

                <h2>Add A New Department</h2>
                <div class="input_reference" id="reports">
                    <!-- Reference Table -->
                    <button onclick="open_departments()">Show Departments</button>
                </div>

            <!-- User form-->
            <table class="form_table" style="margin: 20px 300px 0 0;">
                <tr>
                    <th class="form_label">Department Name: </th> <!--  Input label-->
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo DEPT_NAME_FIELD; ?>"
                                           value="<?php echo $dept_name ?>" autofocus></td> <!-- User input -->
                </tr>
                <tr>
                    <th class="form_label">Department Contact: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo DEPT_CONTACT_FIELD; ?>"
                                           value="<?php echo $dept_contact ?>"></td>
               </tr>
                <tr>
                    <th class="form_label">Title: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo DEPT_CONTACT_TITLE_FIELD; ?>"
                                           value="<?php echo $deptContact_title?>"></td>
                </tr>
                <tr>
                    <th class="form_label">Email: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo DEPT_CONTACT_EMAIL_FIELD; ?>"
                                           value="<?php echo $deptContact_email ?>"></td>
                </tr>
                <tr>
                    <th class="form_label">Phone Number: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo DEPT_CONTACT_PHONE_FIELD; ?>"
                                           value="<?php echo $deptContact_phone ?>"></td>
                </tr>
                <tr><th class="form_label">Organization Name: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo ORGANIZATION_NAME_FIELD; ?>" value="<?php echo $organization_name ?>"   ></td>
                </tr>
                <!-- Submit form-->
                <div class="submit_table">
                    <tr>
                    <td></td>
                        <!-- Submit button -->
                    <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                            name="<?php echo COMPANY_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;margin-left: 150px;'></div></td>
                    </tr>
                    <tr>
                        <!-- Reset button -->
                        <td></td>
                        <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;margin-left: 150px;'></div></td>
                    </tr>

                </div>
            </table>
        </form>
    </div>
<script>
    // Adds selected class to current page in navigation
    $(document).ready(function(){
        $("[href='departments.php']").addClass("selected");
    });
    // Opens tables
    function open_departments() {
        window.open("departments_table.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=430,height=400");
    }
</script>
<!-- Requires use of responsive nav script for handling responsive navigation   -->
<?php require('includes/responsive_nav.php'); ?>
</body>
</html>
