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
include_once('includes/impact_category_scoring_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field
$impact_category_scoring_tier_1 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_1_FIELD);
$impact_category_scoring_tier_2 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_2_FIELD);
$impact_category_scoring_tier_3 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_3_FIELD);
$impact_category_scoring_tier_4 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_4_FIELD);
$impact_category_scoring_tier_5 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_5_FIELD);
$impact_category_scoring_tier_6 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_6_FIELD);
$impact_category_scoring_tier_7 = get_post_value(IMPACT_CATEGORY_SCORING_TIER_7_FIELD);
$impact_category_scoring_imp_cat_id = get_post_value(IMPACT_CATEGORY_SCORING_IMP_CAT_ID);   //----------------  *** !!!  Not reading !!! ++++++++++++++++++++++++++++++++++++++++
$impact_category_scoring_efid = get_post_value(IMPACT_CATEGORY_SCORING_EFID);
$impact_category_scoring_submit_pressed = get_post_value(IMPACT_CATEGORY_SCORING_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$impact_category_scoring_error_message = impact_category_scoring_submit(
    $impact_category_scoring_tier_1,
    $impact_category_scoring_tier_2,
    $impact_category_scoring_tier_3,
    $impact_category_scoring_tier_4,
    $impact_category_scoring_tier_5,
    $impact_category_scoring_tier_6,
    $impact_category_scoring_tier_7,
    $impact_category_scoring_imp_cat_id,
    $impact_category_scoring_efid,
    $impact_category_scoring_submit_pressed
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
    <title>CCS | Impact Category Scoring</title>
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
        <h2>Impact Category Scoring</h2>
        <form method="POST" action="impact_category_scoring.php">
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
                <tr>
                    <th class="form_label" style="text-align: start"> to what degree ...</th>
                    <td> <?php get_impact_category() ?></td>   <!-- ----------------------------------   *** !!!   Not Reading User Input  !!! ***   +++++++++++++++++++++++++++++++++++ -->
                </tr>
                </table>

            
            <table class="form_table" style="margin: 10px 0 0 -200px;">
                <tr>
                    <th  colspan=1 class="form_label" style="text-align: center">1 Hour<br>Tier 1</th>
                    <th  colspan=1 class="form_label" style="text-align: center">2 to 8 Hours<br>Tier 2</th>
                    <th  colspan=1 class="form_label" style="text-align: center">9 to 24 Hours<br>Tier 3</th>
                    <th  colspan=1 class="form_label" style="text-align: center">1 to 3 Days<br>Tier 4</th>
                    <th  colspan=1 class="form_label" style="text-align: center">4 to 7 Days<br>Tier 5</th>
                    <th  colspan=1 class="form_label" style="text-align: center">8 to 15 Days<br>Tier 6</th>
                    <th  colspan=1 class="form_label" style="text-align: center">16 to 30 Days<br>Tier 7</th>  </tr>
                <tr>
                   <?php score_impact_categories()?>
                </tr>
                    <!-- Submit form-->
                <div class="submit_table">
                    <tr></tr><tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td>
                        <!-- Submit button -->
                        <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                name="<?php echo IMPACT_CATEGORY_SCORING_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;'></div></td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td>
                        <!-- Reset button -->
                        <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;'></div></td>
                    </tr>
                </div>
            </table>
        </form>
        <div id="reports" style="margin: 0 0 0 -200px;">
            <?php echo show_impact_scoring()?>
        </div>

        <div>
            <!-- Error message -->
            <p id="submit_error"><?php echo $impact_category_scoring_error_message ; ?></p>
        </div>
    </div>
</body>
</html>

