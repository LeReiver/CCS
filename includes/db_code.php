<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 8:31 PM
 *
 * Database functions for connection and fetch data queries
 */

// Checks if user exists
function lookup_user($username)
{
    // Creates database object from mysqli() by establishing connection to database
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Creates a safe username by calling real_escape_scape_string on username
    $safe_username = $db->real_escape_string($username);
    // Creates the query
    $query = "SELECT * FROM " . USERS_TABLE . " WHERE ". USERS_USERNAME_FIELD .  " = '$safe_username';";
    // Creates result object from query
    $result = $db->query($query);
    // Returns fetched result rows into numeric arrays
    return $result->fetch_array(MYSQLI_NUM);
}

// Adds new user
function add_user($username, $hash)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $safe_username = $db->real_escape_string($username);
    $query = "INSERT INTO";
    $query .= " " . USERS_TABLE . " (" . USERS_USERNAME_FIELD . ", " . USERS_HASH_FIELD . ")";
    $query .= " VALUES ('$safe_username','$hash');";
    $db->query($query);
}

// Verifies current session
function lookup_session($username)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $safe_username = $db->real_escape_string($username);
    $query = "SELECT * ";
    $query .= " FROM " . ACCOUNT_DATA_TABLE;
    $query .= " WHERE ". ACCOUNT_DATA_USERNAME_FIELD .  " = '$safe_username';";
    $result = $db->query($query);
    return $result->fetch_array(MYSQLI_NUM);
}

// Creates new session
function add_session($username, $session)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $safe_username = $db->real_escape_string($username);
    $query = "INSERT INTO";
    $query .= " " . ACCOUNT_DATA_TABLE;
    $query .= " (" . ACCOUNT_DATA_USERNAME_FIELD . ", " . ACCOUNT_DATA_SESSION_FIELD . ")";
    $query .= " VALUES ('$safe_username','$session')";
    $query .= " ON DUPLICATE KEY UPDATE " . ACCOUNT_DATA_SESSION_FIELD . " = '$session';";
    $db->query($query);
}

// Adds Department
function add_department($dept_name, $dept_contact, $deptContact_title, 
                        $deptContact_email, $deptContact_phone, $organization_name)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . DEPARTMENT_TABLE . " (" . DEPT_NAME_FIELD . ", " . DEPT_CONTACT_FIELD . " , " . DEPT_CONTACT_TITLE_FIELD . " , "
                . DEPT_CONTACT_EMAIL_FIELD . " , " . DEPT_CONTACT_PHONE_FIELD . " , " . ORGANIZATION_NAME_FIELD . ")";
    $query .= " VALUES ('$dept_name','$dept_contact', '$deptContact_title', 
                '$deptContact_email', '$deptContact_phone', '$organization_name');";
    $db->query($query);
}

// Adds Essential Function
function add_essential_function($ef_name, $ef_lead_name, $ef_lead__title, $ef_lead_email,
                                 $ef_lead_phone, $dept_id)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . EF_TABLE . " (" . EF_NAME_FIELD . ", " . EF_LEAD_FIELD . " , " . EF_LEAD_TITLE_FIELD . " , "
        . EF_LEAD_EMAIL_FIELD . " , " . EF_LEAD_PHONE_FIELD . " , " . DEPARTMENT_ID_FIELD . ")";
    $query .= " VALUES ('$ef_name','$ef_lead_name', '$ef_lead__title', 
                '$ef_lead_email', '$ef_lead_phone', '$dept_id');";
    $db->query($query);
}

// Adds Essential Function Process
function add_function_process($ef_id, $func_process_description)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . FUNC_PROCESS_TABLE . " (" . FUNC_PROCESS_DESCRIPTION_FIELD . ", " . FUNC_PROCESS_EFID_FIELD . ")";
    $query .= " VALUES ('$func_process_description', '$ef_id');";
    $db->query($query);
}


// Adds Essential Function Category
function add_function_category($ef_id, $func_category_name)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . FUNC_PROCESS_TABLE . " (" . FUNC_CATEGORY_NAME_FIELD . ", " . FUNC_CATEGORY_EFID_FIELD . ")";
    $query .= " VALUES ('$func_category_name', '$ef_id');";
    $db->query($query);
}

// Adds Impact Category
function add_impact_category($impact_category_name, $impact_category_description)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_TABLE . " ( " . IMPACT_CATEGORY_NAME_FIELD . ", " . IMPACT_CATEGORY_DESCRIPTION_FIELD . ")";
    $query .= " VALUES ('$impact_category_name', '$impact_category_description');";
    $db->query($query);
}

// Adds Essential Function Details

function add_function_detail($func_detail_interviewer,  $func_detail_efid, $func_detail_responsibilities, $func_detail_internal_dep,
    $func_detail_external_dep, $func_detail_peak_times, $func_detail_considerations, $func_detail_reg_loss, $func_detail_rto,
    $func_detail_it_support, $func_detail_backup_process, $func_detail_factors)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . FUNC_DETAILS_TABLE . " (" . FUNC_DETAILS_INTERVIEWER_FIELD . ", " . FUNC_DETAILS_EFID_FIELD . ", "
        . FUNC_DETAILS_RESPONSIBILITIES_FIELD . " , " . FUNC_DETAILS_INTERNAL_DEP_FIELD . " , " . FUNC_DETAILS_EXTERNAL_DEP_FIELD . " , "
        . FUNC_DETAILS_PEAK_TIMES_FIELD . " , " . FUNC_DETAILS_CONSIDERATIONS_FIELD . " , " . FUNC_DETAILS_REG_LOSS_FIELD . " , "
        . FUNC_DETAILS_RTO_FIELD . " , " . FUNC_DETAILS_IT_SUPPORT_FIELD . " , "
        . FUNC_DETAILS_BACKUP_PROCESS_FIELD . "," . FUNC_DETAILS_FACTORS_FIELD . ")";
    $query .= " VALUES ('$func_detail_interviewer', '$func_detail_efid', '$func_detail_responsibilities', '$func_detail_internal_dep',
    '$func_detail_external_dep', '$func_detail_peak_times', '$func_detail_considerations', '$func_detail_reg_loss', '$func_detail_rto',
    '$func_detail_it_support', '$func_detail_backup_process', '$func_detail_factors' );";
    $db->query($query);
}

// Adds Impact Category Scoring
function add_impact_category_scoring($impact_category_scoring_tier_1, $impact_category_scoring_tier_2, $impact_category_scoring_tier_3,
    $impact_category_scoring_tier_4, $impact_category_scoring_tier_5, $impact_category_scoring_tier_6, $impact_category_scoring_tier_7,
    $impact_category_scoring_imp_cat_id, $impact_category_scoring_efid )
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORING_TABLE . " (" . IMPACT_CATEGORY_SCORING_TIER_1_FIELD . ", " . IMPACT_CATEGORY_SCORING_TIER_2_FIELD . " , " . IMPACT_CATEGORY_SCORING_TIER_3_FIELD . " , "
        . IMPACT_CATEGORY_SCORING_TIER_4_FIELD . " , " . IMPACT_CATEGORY_SCORING_TIER_5_FIELD . " , " . IMPACT_CATEGORY_SCORING_TIER_6_FIELD . ", " . IMPACT_CATEGORY_SCORING_TIER_7_FIELD . ", "
        . IMPACT_CATEGORY_SCORING_IMP_CAT_ID . ", " . IMPACT_CATEGORY_SCORING_EFID . ")";
    $query .= " VALUES ('$impact_category_scoring_tier_1', '$impact_category_scoring_tier_2', '$impact_category_scoring_tier_3', 
                '$impact_category_scoring_tier_4', '$impact_category_scoring_tier_5', '$impact_category_scoring_tier_6', '$impact_category_scoring_tier_7',
                 '$impact_category_scoring_imp_cat_id', '$impact_category_scoring_efid');";
    $db->query($query);
}

// Adds Impact Category Scoring
function add_impact_category_score($impact_category_scoring_ef_id, $impact_category_scoring_imp_cat_id, $impact_category_scoring_rto_id,
                                   $impact_category_scoring_rating_id)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID . ", " . IMPACT_CATEGORY_SCORE_RTO_ID . ", " . IMPACT_CATEGORY_SCORE_RATING_ID . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id', '$impact_category_scoring_imp_cat_id',' $impact_category_scoring_rto_id' ,
     '$impact_category_scoring_rating_id');";
    $db->query($query);
}


// Adds Impact Category Scoring Tier1
function add_impact_category_score_tier1($impact_category_scoring_ef_id1, $impact_category_scoring_imp_cat_id1, $impact_category_scoring_rto_id1,
                                         $impact_category_scoring_rating_id1)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_1 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_1 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_1 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_1 . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id1', '$impact_category_scoring_imp_cat_id1',' $impact_category_scoring_rto_id1' ,
     '$impact_category_scoring_rating_id1');";
    $db->query($query);
}

// Adds Impact Category Scoring Tier2
function add_impact_category_score_tier2( $impact_category_scoring_ef_id2, $impact_category_scoring_imp_cat_id2,$impact_category_scoring_rto_id2,
                                          $impact_category_scoring_rating_id2)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_2 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_2 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_2 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_2 . ")";
    $query .= " VALUES ('$impact_category_scoring_ef_id2', '$impact_category_scoring_imp_cat_id2',' $impact_category_scoring_rto_id2' , 
     '$impact_category_scoring_rating_id2');";
    $db->query($query);
}

// Adds Impact Category Scoring Tier3
function add_impact_category_score_tier3(  $impact_category_scoring_ef_id3, $impact_category_scoring_imp_cat_id3,$impact_category_scoring_rto_id3,
                                          $impact_category_scoring_rating_id3)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_3 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_3 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_3 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_3 . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id3', '$impact_category_scoring_imp_cat_id3',' $impact_category_scoring_rto_id3' ,
     '$impact_category_scoring_rating_id3');";
    $db->query($query);
}

// Adds Impact Category Scoring Tier4
function add_impact_category_score_tier4($impact_category_scoring_ef_id4, $impact_category_scoring_imp_cat_id4, $impact_category_scoring_rto_id4,
                                         $impact_category_scoring_rating_id4)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_4 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_4 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_4 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_4 . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id4', '$impact_category_scoring_imp_cat_id4',' $impact_category_scoring_rto_id4' ,
     '$impact_category_scoring_rating_id4');";
    $db->query($query);
}

// Adds Impact Category Scoring Tier5
function add_impact_category_score_tier5(  $impact_category_scoring_ef_id5, $impact_category_scoring_imp_cat_id5,$impact_category_scoring_rto_id5,
                                          $impact_category_scoring_rating_id5)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_5 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_5 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_5 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_5 . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id5', '$impact_category_scoring_imp_cat_id5',' $impact_category_scoring_rto_id5' ,
     '$impact_category_scoring_rating_id5');";
    $db->query($query);
}

// Adds Impact Category Scoring Tier6
function add_impact_category_score_tier6(  $impact_category_scoring_ef_id6, $impact_category_scoring_imp_cat_id6,$impact_category_scoring_rto_id6,
                                          $impact_category_scoring_rating_id6)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_6 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_6 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_6 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_6 . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id6', '$impact_category_scoring_imp_cat_id6',' $impact_category_scoring_rto_id6' ,
     '$impact_category_scoring_rating_id6');";
    $db->query($query);
}

// Adds Impact Category Scoring Tier7
function add_impact_category_score_tier7( $impact_category_scoring_ef_id7, $impact_category_scoring_imp_cat_id7,$impact_category_scoring_rto_id7,
                                          $impact_category_scoring_rating_id7)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO";
    $query .= " " . IMPACT_CATEGORY_SCORE_TABLE . " (". IMPACT_CATEGORY_SCORE_EF_ID_7 . ", "
        . IMPACT_CATEGORY_SCORE_IMP_CAT_ID_6 . ", " . IMPACT_CATEGORY_SCORE_RTO_ID_7 . ", " . IMPACT_CATEGORY_SCORE_RATING_ID_6 . ")";
    $query .= " VALUES ( '$impact_category_scoring_ef_id7', '$impact_category_scoring_imp_cat_id7',' $impact_category_scoring_rto_id7' ,
     '$impact_category_scoring_rating_id7');";
    $db->query($query);
}
