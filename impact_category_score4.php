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
include_once('includes/impact_category_score_code4.php');
include_once ('includes/RATING.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$impact_category_score_rating_id1 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_1);
$impact_category_score_rto_id1 = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_1);
$impact_category_score_imp_cat_id1 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_1);
$impact_category_score_ef_id1 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_1);
$impact_category_score_submit_pressed = get_post_value(IMPACT_CATEGORY_SCORE_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$impact_category_score_error_message = impact_category_score_submit(
    $impact_category_score_ef_id1,
    $impact_category_score_imp_cat_id1,
    $impact_category_score_rto_id1,
    $impact_category_score_rating_id1,
    $impact_category_score_submit_pressed
);


// Disables Cache-Control for browsers
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
?>

<!doctype html>
<html lang="en">
<head>
    <title>CCS | Impact Category Score</title>
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
    <h2>Impact Category Score 4</h2>
    <!-- Error message -->
    <p id="submit_error"><?php echo $impact_category_score_error_message ; ?></p>
    <form method="POST" action="impact_category_score4.php">
        <!-- User form-->
        <table class="form_table" style="margin: 20px 0 0 -200px;">
            <tr>
                <th colspan="5" class="form_label" style="text-align: start">The chart below will assist in rating the actual impact of the loss of the function.<br><br>
                </th>
            </tr>
            <tr>
                <th class="form_label" style="text-align: start" colspan="5"> For each criteria listed, ask yourself the question below and rate the impact of the loss across each of the time frames.<br><br>
                </th>
            </tr>
            <tr>
                <th class="form_label" style="text-align: start">If this function were disrupted,</th>
                <td> <?php get_essential_functions() ?></td>
            </tr>
        </table>
        <table class="form_table" style="margin: 10px 0 0 -200px;">
            <tr>
                <th class="form_label" style="text-align: start"> to what degree ...</th>
                <td> <?php get_impact_category() ?></td>
            </tr>
        </table>
        <table class="form_table" style="margin: 10px 0 0 -200px;">
            <tr><td></td>
                <th class="form_label" style="text-align: center">1 Hour<br>Tier 1</th>
                <th class="form_label" style="text-align: center">2 to 8 Hours<br>Tier 2</th>
                <th class="form_label" style="text-align: center">9 to 24 Hours<br>Tier 3</th>
                <th class="form_label" style="text-align: center">1 to 3 Days<br>Tier 4</th>
                <th class="form_label" style="text-align: center">4 to 7 Days<br>Tier 5</th>
                <th class="form_label" style="text-align: center">8 to 15 Days<br>Tier 6</th>
                <th class="form_label" style="text-align: center">16 to 30 Days<br>Tier 7</th>  </tr>
            <tr><td></td><td></td><td></td><td></td>
                <td  hidden > <?php get_rto() ?></td>
            <tr style="color: #fb543d"><td></td><td><?php echo "*" ?></td>
                <td><?php echo "*" ?></td><td><?php echo "*" ?></td>
                <td><?php RATING::get_rating() ?></td>
            </tr>
        </table>
        <!-- Submit form-->
        <div class="submit_table" style="margin-right: -100px;">
            <input class="data_submit" type="submit" value="SUBMIT"
                   name="<?php echo IMPACT_CATEGORY_SCORE_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;'>
            <!-- Reset button -->
            <input type="reset"  class="data_submit" value="CLEAR" style='width: 100px;'>
        </div>
    </form>
    <div  id="reports" style="margin: 0 0 100px 100px;">
        <?php show_impact_scores() ?>
    </div>
</div>
<script>
    // Adds selected class to current page in navigation
    $(document).ready(function(){
        $("[href='impact_category_score.php']").addClass("selected");
    });
</script>
</body>
</html>

