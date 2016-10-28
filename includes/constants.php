<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 2:03 PM
 * 
 * Constants for project
 */


// Login field names
 

const LOGIN_USERNAME_KEY = 'login_username';
const LOGIN_PASSWORD_KEY = 'login_password';
const LOGIN_BUTTON_VALUE = 'login';
const REGISTER_USERNAME_KEY = 'register_username';
const REGISTER_PASSWORD_KEY = 'register_password';
const REGISTER_CONFIRM_PASSWORD_KEY = 'register_confirm_password_key';
const REGISTER_BUTTON_VALUE = 'register';


// Session keys
 
const SESSION_USERNAME_KEY = 'username';


// User account fields

const ACCOUNT_USERNAME_FIELD = 0;
const ACCOUNT_PASSWORD_HASH_FIELD = 1;



// Files and paths

const USER_ACCOUNT_FILE = 'data/users.csv';


// Login error messages

const E_LOGIN = 'Error logging in!';
const E_REGISTER = 'Error registering!';
const E_SUBMIT = 'Error submitting data!';


const E_NO_USERNAME = 'Username must be supplied.';
const E_NO_PASSWORD = 'Password must be supplied.';
const E_NO_CONFIRM = 'Please confirm your password.';
const E_NO_DATA = 'Data field cannot be empty.';
const E_CONFIRM_MISMATCH = 'Your passwords do not match!';
const E_ACCOUNT_EXISTS = 'User name already exists! Please try a different username.';
const E_USERNAME_NOT_FOUND = 'Username does not exist.';
const E_PASSWORD_INCORRECT = 'Password is incorrect.' ;
const E_WRONG_DATA_TYPE = 'Data!';


// Database constants

/* localhost */
const DB_SERVER = '127.0.0.1';
const DB_USER = 'ccs_admin';
const DB_PASSWORD = 'ccs_admin';
const DB_DATABASE = 'CCS_01';

/* hostpond */
//const DB_SERVER = 'plum.hostpond.com';
//const DB_USER = 'lereive2_admin';
//const DB_PASSWORD = '*****';
//const DB_DATABASE = 'lereive2_ccs';

const USERS_TABLE = 'Users';
const USERS_USERNAME_FIELD = 'Username';
const USERS_HASH_FIELD = 'Hash';

const ACCOUNT_DATA_TABLE = 'account_data';
const ACCOUNT_DATA_USERNAME_FIELD = 'username';
const ACCOUNT_DATA_SESSION_FIELD = 'session';


// Page constants

/* localhost */

const HOME_PAGE = '/Git_htdocs/ccs_git/home.php';
const REGISTER_PAGE = '/Git_htdocs/ccs_git/register.php';
const LOGIN_PAGE = '/Git_htdocs/ccs_git/index.php';
const LOGOUT_PAGE = '/Git_htdocs/ccs_git/logout.php';
const LOGGED_OUT_PAGE = '/Git_htdocs/ccs_git/logged_out.php';
const NO_ACCESS_PAGE = '/Git_htdocs/ccs_git/no_access.php';
const EF_PAGE = '/Git_htdocs/ccs_git/essential_functions.php';
const FUNC_PROCESS_PAGE = '/Git_htdocs/ccs_git/function_processes.php';
const FUNC_CATEGORY_PAGE = '/Git_htdocs/ccs_git/function_categories.php';
const IMPACT_CATEGORY_PAGE = '/Git_htdocs/ccs_git/impact_categories.php';
const FUNC_DETAILS_PAGE = '/Git_htdocs/ccs_git/function_details.php';
const IMPACT_CATEGORY_SCORING_PAGE = '/Git_htdocs/ccs_git/impact_category_scoring.php';
const IMPACT_CATEGORY_SCORE_ALL_PAGE = '/Git_htdocs/ccs_git/impact_category_score_all.php';
const IMPACT_CATEGORY_SCORE_1_PAGE = '/Git_htdocs/ccs_git/impact_category_score1.php';
const IMPACT_CATEGORY_SCORE_2_PAGE = '/Git_htdocs/ccs_git/impact_category_score2.php';
const IMPACT_CATEGORY_SCORE_3_PAGE = '/Git_htdocs/ccs_git/impact_category_score3.php';
const IMPACT_CATEGORY_SCORE_4_PAGE = '/Git_htdocs/ccs_git/impact_category_score4.php';
const IMPACT_CATEGORY_SCORE_5_PAGE = '/Git_htdocs/ccs_git/impact_category_score5.php';
const IMPACT_CATEGORY_SCORE_6_PAGE = '/Git_htdocs/ccs_git/impact_category_score6.php';
const IMPACT_CATEGORY_SCORE_7_PAGE = '/Git_htdocs/ccs_git/impact_category_score7.php';
const TABLE_TWO_PAGE = '/Git_htdocs/ccs_git/table_two.php';
const TABLE_THREE_PAGE = '/Git_htdocs/ccs_git/table_three.php';
const TABLE_FOUR_PAGE = '/Git_htdocs/ccs_git/table_four.php';




///* hostpond */
////
//const HOME_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/home.php';
//const REGISTER_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/register.php';
//const LOGIN_PAGE = 'https://plum.hostpond.com/~lereive2/ccs//index.php';
//const LOGOUT_PAGE = 'https://plum.hostpond.com/~lereive2/ccs//logout.php';
//const LOGGED_OUT_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/logged_out.php';
//const NO_ACCESS_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/no_access.php';
//const EF_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/essential_functions.php';
//const FUNC_PROCESS_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/function_processes.php';
//const FUNC_CATEGORY_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/function_categories.php';
//const IMPACT_CATEGORY_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_categories.php';
//const FUNC_DETAILS_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/function_details.php';
//const IMPACT_CATEGORY_SCORING_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_scoring.php';
//const IMPACT_CATEGORY_SCORE_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score.php';
//const IMPACT_CATEGORY_SCORE_ALL_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score_all.php';
//const IMPACT_CATEGORY_SCORE_1_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score1.php';
//const IMPACT_CATEGORY_SCORE_2_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score2.php';
//const IMPACT_CATEGORY_SCORE_3_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score3.php';
//const IMPACT_CATEGORY_SCORE_4_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score4.php';
//const IMPACT_CATEGORY_SCORE_5_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score5.php';
//const IMPACT_CATEGORY_SCORE_6_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score6.php';
//const IMPACT_CATEGORY_SCORE_7_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/impact_category_score7.php';
//const TABLE_TWO_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/table_two.php';
//const TABLE_THREE_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/table_three.php';
//const TABLE_FOUR_PAGE = 'https://plum.hostpond.com/~lereive2/ccs/table_four.php';


// -----------------------------------------------------------------------------------------------------------------------


// Department database constants

const DEPARTMENT_TABLE = 'DEPT';
const DEPT_NAME_FIELD = 'DeptName';
const DEPT_CONTACT_FIELD = 'DeptContact';
const DEPT_CONTACT_TITLE_FIELD = 'DeptContactTitle';
const DEPT_CONTACT_EMAIL_FIELD = 'DeptContactEmail';
const DEPT_CONTACT_PHONE_FIELD = 'DeptContactPhone';
const ORGANIZATION_NAME_FIELD = 'Organization';
const COMPANY_SUBMIT_BUTTON_VALUE = 'company_submit_pressed';


// Department errors

const E_DEPARTMENT = 'Error!';

const E_NO_ORG_NAME = 'Organization name must be supplied.';
const E_NO_DEPT_NAME = 'Department name must be supplied.';
const E_NO_DEPT_CONT = 'Department name must be supplied.';
const E_NO_CONT_NAME = 'Contact name must be supplied.';
const E_NO_CONT_TITLE = 'Contact title must be supplied.';
const E_NO_CONT_EMAIL = 'Contact email must be supplied.';
const E_NO_CONT_PHONE = 'Contact phone must be supplied.';

// -----------------------------------------------------------------------------------------------------------------------



// Essential Function database constants

const EF_TABLE = 'EF';
const EF_NAME_FIELD = 'EFName';
const EF_LEAD_FIELD = 'EFLead';
const EF_LEAD_TITLE_FIELD = 'EFLeadTitle';
const EF_LEAD_EMAIL_FIELD = 'EFLeadEmail';
const EF_LEAD_PHONE_FIELD = 'EFLeadPhone';
const IMPACT_SCORE_FIELD = 'IScore';
const DEPARTMENT_ID_FIELD = 'DeptID';
const EF_SUBMIT_BUTTON_VALUE = 'ef_submit_pressed';
const EF_ADD_FUNCTION_BUTTON_VALUE = 'add_new_function';


// Essential Function errors

const E_EF = 'Error!';

const E_NO_EF_NAME = 'Essential Function name must be supplied.';
const E_NO_EF_LEAD_NAME = 'Lead name must be supplied.';
const E_NO_EF_LEAD_TITLE = 'Lead title must be supplied.';
const E_NO_EF_LEAD_EMAIL = 'Lead email must be supplied.';
const E_NO_EF_LEAD_PHONE = 'Lead phone number must be supplied.';
const E_NO_IMPACT_SCORE = 'Impact Score must be supplied.';
const E_NO_DEPT_ID = 'Corresponding Department ID must be supplied.';

// -----------------------------------------------------------------------------------------------------------------------



// Essential Function Process database constants

const FUNC_PROCESS_TABLE = 'EF_PROC';
const FUNC_PROCESS_DESCRIPTION_FIELD = 'ProcDesc';
const FUNC_PROCESS_EFID_FIELD = 'EFID';
const FUNC_PROCESS_SUBMIT_BUTTON_VALUE = 'func_process_submit_pressed';


// Essential Function Process errors

const E_FUNC_PROCESS = 'Error!';

const E_NO_FUNC_PROCESS_DESCRIPTION = 'Process description must be supplied.';
const E_NO_EFID = 'Essential Function must be supplied.';

// -----------------------------------------------------------------------------------------------------------------------



// Impact Category database constants

const IMPACT_CATEGORY_TABLE = 'I_CAT';
const IMPACT_CATEGORY_NAME_FIELD = 'CatName';
const IMPACT_CATEGORY_DESCRIPTION_FIELD = 'CatDesc';
const IMPACT_CATEGORY_SUBMIT_BUTTON_VALUE = 'impact_category_submit_pressed';


// Impact Category errors

const E_IMPACT_CATEGORY = 'Error!';

const E_NO_IMPACT_CATEGORY_NAME = 'Impact Category name must be supplied.';
const E_NO_IMPACT_CATEGORY_DESCRIPTION = 'Impact Category description must be supplied.';


// -----------------------------------------------------------------------------------------------------------------------



//Essential  Function Category constants

const FUNC_CATEGORY_TABLE = 'I_FUNC';
const FUNC_CATEGORY_NAME_FIELD = 'FuncName';
const FUNC_CATEGORY_DESCRIPTION_FIELD = 'FuncDesc';
const FUNC_CATEGORY_EFID_FIELD = 'EFID';
const FUNC_CATEGORY_SUBMIT_BUTTON_VALUE = 'function_category_submit_pressed';


//Essential  Function Category errors

const E_FUNC_CATEGORY = 'Error!';

const E_NO_FUNC_CATEGORY_NAME = 'Category name must be supplied.';
const E_NO_FUNC_CATEGORY_DESCRIPTION = 'Category description must be supplied.';


// -----------------------------------------------------------------------------------------------------------------------



//Essential  Function Details database constants

const FUNC_DETAILS_TABLE = 'EF_DETAIL';
const FUNC_DETAILS_INTERVIEWER_FIELD = 'Interviewer';
const FUNC_DETAILS_RESPONSIBILITIES_FIELD = 'Responsibilities';
const FUNC_DETAILS_INTERNAL_DEP_FIELD = 'InternalDep';
const FUNC_DETAILS_EXTERNAL_DEP_FIELD = 'ExternalDep';
const FUNC_DETAILS_PEAK_TIMES_FIELD = 'PeakTimes';
const FUNC_DETAILS_CONSIDERATIONS_FIELD = 'Considerations';
const FUNC_DETAILS_REG_LOSS_FIELD = 'RegLoss';
const FUNC_DETAILS_RTO_FIELD = 'Rto';
const FUNC_DETAILS_IT_SUPPORT_FIELD = 'ITSupport';
const FUNC_DETAILS_BACKUP_PROCESS_FIELD = 'BackupProc';
const FUNC_DETAILS_FACTORS_FIELD = 'Factors';
const FUNC_DETAILS_EFID_FIELD = 'EFID';
const FUNC_DETAILS_SUBMIT_BUTTON_VALUE = 'function_detail_submit_pressed';


//Essential  Function Details errors

const E_FUNC_DETAILS = 'Error!';

const E_NO_FUNC_DETAILS_INTERVIEWER = 'Interviewer\'s name must be supplied.';
const E_NO_FUNC_DETAILS_RESPONSIBILITIES = 'Responsibilities must be supplied.';
const E_NO_FUNC_DETAILS_INTERNAL_DEP = 'Internal Dependencies must be supplied.';
const E_NO_FUNC_DETAILS_EXTERNAL_DEP = 'External Dependencies must be supplied.';
const E_NO_FUNC_DETAILS_PEAK_TIMES = 'Peak Times must be supplied.';
const E_NO_FUNC_DETAILS_CONSIDERATIONS = 'Considerations must be supplied.';
const E_NO_FUNC_DETAILS_REG_LOSS = 'Regulatory Loss must be supplied.';
const E_NO_FUNC_DETAILS_RTO = 'RTO must be supplied.';
const E_NO_FUNC_DETAILS_IT_SUPPORT = 'IT Support must be supplied.';
const E_NO_FUNC_DETAILS_BACKUP_PROCESS = 'Backup Process must be supplied.';
const E_NO_FUNC_DETAILS_FACTORS = 'Factors must be supplied.';
const E_NO_FUNC_DETAILS_EFID = 'Essential Function must be supplied.';


// -----------------------------------------------------------------------------------------------------------------------



// Impact Category Scoring database constants

const IMPACT_CATEGORY_SCORING_TABLE = 'I_CAT_SCORING';
const IMPACT_CATEGORY_SCORING_TIER_1_FIELD = '1Hour';
const IMPACT_CATEGORY_SCORING_TIER_2_FIELD = '2to8Hours';
const IMPACT_CATEGORY_SCORING_TIER_3_FIELD = '9to24Hours';
const IMPACT_CATEGORY_SCORING_TIER_4_FIELD = '1to3Days';
const IMPACT_CATEGORY_SCORING_TIER_5_FIELD = '4to7Days';
const IMPACT_CATEGORY_SCORING_TIER_6_FIELD = '8to15Days';
const IMPACT_CATEGORY_SCORING_TIER_7_FIELD = '16to31Days';
const IMPACT_CATEGORY_SCORING_IMP_CAT_ID = 'ImpCatID';
const IMPACT_CATEGORY_SCORING_EFID = 'EFID';
const IMPACT_CATEGORY_SCORING_SUBMIT_BUTTON_VALUE = 'impact_category_scoring_submit_pressed';


// Impact Category Scoring  errors

const E_IMPACT_CATEGORY_SCORING = 'Error!';

const E_NO_IMPACT_CATEGORY_SCORING_TIER_ONE = 'Tier One must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_TWO = 'Tier Two must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_THREE = 'Tier Three must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_FOUR = 'Tier Four must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_FIVE = 'Tier Five must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_SIX = 'Tier Six must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_SEVEN = 'Tier Seven must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_IMP_CAT_ID = 'Impact Category ID must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_EFID = 'EF ID must be supplied.';

 

// ------------------------------------------

// Impact Category Score database constants

const IMPACT_CATEGORY_SCORE_TABLE = 'I_CAT_SCORE';
const IMPACT_CATEGORY_SCORE_RATING_ID = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_1 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_1 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_1 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_1 = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_2 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_2 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_2 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_2 = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_3 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_3 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_3 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_3 = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_4 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_4 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_4 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_4 = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_5 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_5 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_5 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_5 = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_6 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_6 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_6 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_6 = 'EFID';
const IMPACT_CATEGORY_SCORE_RATING_ID_7 = 'RatingID';
const IMPACT_CATEGORY_SCORE_RTO_ID_7 = 'RtoID';
const IMPACT_CATEGORY_SCORE_IMP_CAT_ID_7 = 'ImpCatID';
const IMPACT_CATEGORY_SCORE_EF_ID_7 = 'EFID';
const IMPACT_CATEGORY_SCORE_SUBMIT_BUTTON_VALUE = 'impact_category_score_submit_pressed';


// Impact Category Score  errors

const E_IMPACT_CATEGORY_SCORE = 'Error!';

const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID = 'Rating must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID  = 'RTO must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID = 'Impact Category must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID = 'Essential Function must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_1 = 'Rating 1 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_1  = 'RTO 1 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_1 = 'Impact Category 1 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_1 = 'Essential Function 1 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_2 = 'Rating 2 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_2  = 'RTO 2 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_2 =   'Impact Category 2 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_2 =   'Essential Function 2 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_3 =   'Rating 3 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_3  =   'RTO 3 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_3 =   'Impact Category 3 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_3 =   'Essential Function 3 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_4 =   'Rating 4 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_4  =   'RTO 4 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_4 =   'Impact Category 4 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_4 =   'Essential Function 4 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_5 =   'Rating 5 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_5  =   'RTO 5 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_5 =   'Impact Category 5 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_5 =   'Essential Function 5 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_6 =   'Rating 6 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_6  =   'RTO 6 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_6 =   'Impact Category 6 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_6 =   'Essential Function 6 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RATING_ID_7 =   'Rating 7 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_RTO_ID_7  =   'RTO 7 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_IMP_CAT_ID_7 =   'Impact Category 7 must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORE_EF_ID_7 =   'Essential Function 7 must be supplied.';






































