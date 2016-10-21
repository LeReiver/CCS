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
include_once('includes/impact_category_score_code.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}

// Creates variables using the get_post_value function and passes in constants for each entered field

//$impact_category_score_rating_id = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID);
//$impact_category_score_rto_id = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID);
//$impact_category_score_imp_cat_id = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID); 
//$impact_category_score_ef_id = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID);
//$impact_category_score_submit_pressed = get_post_value(IMPACT_CATEGORY_SCORE_SUBMIT_BUTTON_VALUE);

$impact_category_score_rating_id1 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_1);
$impact_category_score_rto_id1  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_1);
$impact_category_score_imp_cat_id1 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_1);
$impact_category_score_ef_id1 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_1);
$impact_category_score_rating_id2 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_2);
$impact_category_score_rto_id2  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_2);
$impact_category_score_imp_cat_id2 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_2);
$impact_category_score_ef_id2 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_2);
$impact_category_score_rating_id3 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_3);
$impact_category_score_rto_id3  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_3);
$impact_category_score_imp_cat_id3 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_3);
$impact_category_score_ef_id3 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_3);
$impact_category_score_rating_id4 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_4);
$impact_category_score_rto_id4  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_4);
$impact_category_score_imp_cat_id4 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_4);
$impact_category_score_ef_id4 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_4);
$impact_category_score_rating_id5 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_5);
$impact_category_score_rto_id5  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_5);
$impact_category_score_imp_cat_id5 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_5);
$impact_category_score_ef_id5 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_5);
$impact_category_score_rating_id6 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_6);
$impact_category_score_rto_id6  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_6);
$impact_category_score_imp_cat_id6 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_6);
$impact_category_score_ef_id6 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_6);
$impact_category_score_rating_id7 = get_post_value(IMPACT_CATEGORY_SCORE_RATING_ID_7);
$impact_category_score_rto_id7  = get_post_value(IMPACT_CATEGORY_SCORE_RTO_ID_7);
$impact_category_score_imp_cat_id7 = get_post_value(IMPACT_CATEGORY_SCORE_IMP_CAT_ID_7);
$impact_category_score_ef_id7 = get_post_value(IMPACT_CATEGORY_SCORE_EF_ID_7);
    
$impact_category_score_submit_pressed = get_post_value(IMPACT_CATEGORY_SCORE_SUBMIT_BUTTON_VALUE);

// Creates error message corresponding with the submit button
$impact_category_score_error_message = impact_category_score_submit(
    $impact_category_score_rto_id1,
    $impact_category_score_ef_id1,
    $impact_category_score_imp_cat_id1,
    $impact_category_score_rating_id1,
    $impact_category_score_rto_id2,
    $impact_category_score_ef_id2,
    $impact_category_score_imp_cat_id2,
    $impact_category_score_rating_id2,
    $impact_category_score_rto_id3,
    $impact_category_score_ef_id3,
    $impact_category_score_imp_cat_id3,
    $impact_category_score_rating_id3,
    $impact_category_score_rto_id4,
    $impact_category_score_ef_id4,
    $impact_category_score_rating_id4,
    $impact_category_score_imp_cat_id4,
    $impact_category_score_rto_id5,
    $impact_category_score_ef_id5,
    $impact_category_score_imp_cat_id5,
    $impact_category_score_rating_id5,
    $impact_category_score_rto_id6,
    $impact_category_score_ef_id6,
    $impact_category_score_imp_cat_id6,
    $impact_category_score_rating_id6,
    $impact_category_score_rto_id7,
    $impact_category_score_ef_id7,
    $impact_category_score_imp_cat_id7,
    $impact_category_score_rating_id7,
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
    <meta charset="UTF-8">
    <title>CCS | Impact Category Score</title>
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
    <h2>Impact Category Score</h2>
    <form method="POST" action="impact_category_score.php">
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

        </table>

        <table class="form_table" style="margin: 10px 0 0 -200px;">
            <tr>
                <th class="form_label" style="text-align: start"> to what degree ...</th>
                <td> <?php get_impact_category() ?></td>
            </tr>
        </table>

<!--        <table class="form_table" style="margin: 10px 0 0 -200px;">-->
<!--            <tr>-->
<!--                <th class="form_label" style="text-align: start">Choose RTO</th>-->
<!--                <td> --><?php //get_rto() ?><!--</td>-->
<!--            </tr>-->
<!--        </table>-->

        <table class="form_table" style="margin: 10px 0 0 -200px;">
<!--            <tr><td></td>-->
<!--                <th class="form_label" style="text-align: center">1 Hour<br>Tier 1</th>-->
<!--                <th class="form_label" style="text-align: center">2 to 8 Hours<br>Tier 2</th>-->
<!--                <th class="form_label" style="text-align: center">9 to 24 Hours<br>Tier 3</th>-->
<!--                <th class="form_label" style="text-align: center">1 to 3 Days<br>Tier 4</th>-->
<!--                <th class="form_label" style="text-align: center">4 to 7 Days<br>Tier 5</th>-->
<!--                <th class="form_label" style="text-align: center">8 to 15 Days<br>Tier 6</th>-->
<!--                <th class="form_label" style="text-align: center">16 to 30 Days<br>Tier 7</th>  </tr>-->
            <tr>
                <?php score_all_impact_categories() ?>
            </tr>

            <!-- Submit form-->
            <div class="submit_table">
                <tr></tr><tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <!-- Submit button -->
                    <td class="data_submit"> <div><input type="submit" value="SUBMIT"
                                                         name="<?php echo IMPACT_CATEGORY_SCORE_SUBMIT_BUTTON_VALUE ?>" style='width: 100px;'></div></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <!-- Reset button -->
                    <td class="data_submit"> <div><input type="reset" value="CLEAR" style='width: 100px;'></div></td>
                </tr>
            </div>
        </table>
    </form>
    <div  id="reports" style="margin: 0 0 100px 100px;">
        <?php echo show_impact_score()?>
    </div>

    <div>
        <!-- Error message -->
        <p id="submit_error"><?php echo $impact_category_score_error_message ; ?></p>
    </div>
</div>
</body>
</html>

