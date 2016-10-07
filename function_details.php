<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/22/16
 * Time: 3:06 PM
 * 
 * User Function Details page
 */

// Includes the following files
include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');
include_once('includes/func_details_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$func_detail_interviewer = get_post_value(FUNC_DETAILS_INTERVIEWER_FIELD);
$func_detail_efid = get_post_value(FUNC_DETAILS_EFID_FIELD);
$func_detail_responsibilities = get_post_value(FUNC_DETAILS_RESPONSIBILITIES_FIELD);
$func_detail_internal_dep = get_post_value(FUNC_DETAILS_INTERNAL_DEP_FIELD);
$func_detail_external_dep = get_post_value(FUNC_DETAILS_EXTERNAL_DEP_FIELD);
$func_detail_peak_times = get_post_value(FUNC_DETAILS_PEAK_TIMES_FIELD);
$func_detail_considerations = get_post_value(FUNC_DETAILS_CONSIDERATIONS_FIELD);
$func_detail_reg_loss = get_post_value(FUNC_DETAILS_REG_LOSS_FIELD);
$func_detail_rto = get_post_value(FUNC_DETAILS_RTO_FIELD);
$func_detail_it_support = get_post_value(FUNC_DETAILS_IT_SUPPORT_FIELD);
$func_detail_backup_process = get_post_value(FUNC_DETAILS_BACKUP_PROCESS_FIELD);
$func_detail_factors = get_post_value(FUNC_DETAILS_FACTORS_FIELD);
$func_detail_submit_pressed = get_post_value(FUNC_DETAILS_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$func_detail_error_message = func_detail_submit(
    $func_detail_interviewer,
    $func_detail_efid,
    $func_detail_responsibilities,
    $func_detail_internal_dep,
    $func_detail_external_dep,
    $func_detail_peak_times,
    $func_detail_considerations,
    $func_detail_reg_loss,
    $func_detail_rto,
    $func_detail_it_support,
    $func_detail_backup_process,
    $func_detail_factors,
    $func_detail_submit_pressed
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
    <title>CCS | Essential Functions</title>
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
        <h2>Essential Function Details</h2>
        <form method="POST" action="function_details.php">
            <!-- User form-->
            <table class="form_table" style="margin: 0 100px 0 -300px; width:1200px">
                <tr>
                    <th class="form_label">Interviewer Name: </th>
                    <td colspan="2" class="form_input"><input type="text" name="<?php echo FUNC_DETAILS_INTERVIEWER_FIELD; ?>"
                                     value="<?php echo $func_detail_interviewer ?>"></td>
                </tr>
                <tr>
                  <th class="form_label">Essential Function: </th>    <!--  Input label-->
                    <td colspan="2" class="form_input"> <?php get_essential_functions() ?></td> <!-- User selector gets departments -->
                </tr>
                <tr>
                    <th class="form_label">Briefly describe the services this function provides (to the public, members or other agencies/businesses):</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_RESPONSIBILITIES_FIELD; ?>"
                                     value="<?php echo $func_detail_responsibilities ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">List other internal departments that depend on this function (Internal Dependencies):</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_INTERNAL_DEP_FIELD; ?>"
                                                                 value="<?php echo $func_detail_internal_dep ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">List outside agencies or businesses that depend on this function (external dependencies):</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_EXTERNAL_DEP_FIELD; ?>"
                                                                 value="<?php echo $func_detail_external_dep ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">Indicate any peak time(s) of year, month, or day for this function (critical times for performance of the function or increased demand):</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_PEAK_TIMES_FIELD; ?>"
                                                                 value="<?php echo $func_detail_peak_times ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">Are there any other peak load or stress considerations to note (things that may increase demand for the function)?</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_CONSIDERATIONS_FIELD; ?>"
                                                                 value="<?php echo $func_detail_considerations ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>

                <tr>
                    <th class="form_label">The loss of this function would have the following  ramifications due to regulatory statutes, contractual agreements
                                            and/or law: (Specify the agreement/law/statute, any specific time requirements and associated fines):</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_REG_LOSS_FIELD; ?>"
                                                                 value="<?php echo $func_detail_reg_loss ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">How long can this function continue without its usual information systems support? Assume that loss of support occurs
                                            during your busiest, or peak, season or period.  Select only one.</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_RTO_FIELD; ?>"
                                                              value="<?php echo $func_detail_rto ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">List the information systems/applications required to support this essential function:</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_IT_SUPPORT_FIELD; ?>"
                                                                 value="<?php echo $func_detail_it_support ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">Have you developed or established any work around/backup procedures (manual or otherwise) that can be employed to continue
                                            this function in the event the associated applications are not available?  IF YES, how often are these procedures tested?</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_BACKUP_PROCESS_FIELD; ?>"
                                                                 value="<?php echo $func_detail_backup_process ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>
                <tr>
                    <th class="form_label">Specify any other factors that should be considered when evaluating the impact of the loss of this function: (also to explain any scoring
                                            issues from the chart above):</th>
                    <td colspan="2" class="form_input"><textarea name="<?php echo FUNC_DETAILS_FACTORS_FIELD; ?>"
                                                                 value="<?php echo $func_detail_factors ?>" rows="3" cols="42" class="form_label_textarea"></textarea></td>
                </tr>



                <!-- Submit form-->
                <div class="submit_table">
                    <tr>
                        <td></td>
                        <!-- Submit button -->
                        <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                name="<?php echo FUNC_DETAILS_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;margin-left: 350px;'></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Reset button -->
                        <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;margin-left: 350px;'></div></td>
                    </tr>
                </div>
            </table>
        </form>
        <div>
            <!-- Error message -->
            <p id="submit_error"><?php echo $func_detail_error_message ; ?></p>
         </div>
        <a href="#top" class="top">Back to top</a>
    </div>
</body>
</html>
