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
include_once('includes/impact_categories_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$impact_category_name = get_post_value(IMPACT_CATEGORY_NAME_FIELD);
$impact_category_description = get_post_value(IMPACT_CATEGORY_DESCRIPTION_FIELD);
$impact_category_submit_pressed = get_post_value(IMPACT_CATEGORY_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$impact_category_error_message = impact_category_submit(
    $impact_category_name,
    $impact_category_description,
    $impact_category_submit_pressed
);


// Disables Cache-Control for browsers
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
?>

<!doctype html>
<html lang="en">
<head>
    <title>CCS | Impact Categories</title>
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
        <h2>Impact Categories</h2>
        <!-- Error message -->
        <p id="submit_error"><?php echo $impact_category_error_message ; ?></p>
        <div class="input_reference" id="reports">
            <!-- Reference Table -->
            <button onclick="open_impact_categories()">Show Impact Categories</button>
        </div>
        <form method="POST" action="impact_categories.php">
            <!-- User form-->
            <table class="form_table">
                <tr>
                    <th class="form_label">Impact Categories Name: </th>
                    <td colspan="2" class="form_input" style="padding-right: 25px; width: 400px;"><input type="text" name="<?php echo IMPACT_CATEGORY_NAME_FIELD; ?>"
                                                                 value="<?php echo $impact_category_name ?>" ></td>
                </tr>
                <tr>
                    <th class="form_label">Impact Categories Description: </th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo IMPACT_CATEGORY_DESCRIPTION_FIELD; ?>"
                                           value="<?php echo $impact_category_description ?>"
                                           rows="3" cols="30" class="form_label_textarea"></textarea></td>
                </tr>
                <!-- Submit form-->
                <div class="submit_table">
                    <tr>
                        <td></td>
                        <!-- Submit button -->
                        <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                name="<?php echo IMPACT_CATEGORY_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;margin-left: 250px;'></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Reset button -->
                        <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;margin-left: 250px;'></div></td>
                    </tr>
                </div>
            </table>
        </form>
    </div>
<script>
    function open_impact_categories() {
        window.open("impact_categories_table.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=430,height=400");
    }
    // Adds selected class to current page in navigation
    $(document).ready(function(){
        $("[href='impact_categories.php']").addClass("selected");
    });
    // Opens tables
</script>

</body>
</html>

