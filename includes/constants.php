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
//const DB_USER = 'lereive2';
//const DB_PASSWORD = 'redBrick@45';
//const DB_DATABASE = 'lereive2_CCS_TEST';

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
const IMPACT_CATEGORY_SCORING_PAGE = '/Git_htdocs/ccs_git/impact_category_scoring_2.php';




/* hostpond */

//const HOME_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/home.php';
//const REGISTER_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/register.php';
//const LOGIN_PAGE = 'https://plum.hostpond.com/~lereive2/CCS//index.php';
//const LOGOUT_PAGE = 'https://plum.hostpond.com/~lereive2/CCS//logout.php';
//const LOGGED_OUT_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/logged_out.php';
//const NO_ACCESS_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/no_access.php';
//const EF_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/essential_functions.php';
//const FUNC_PROCESS_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/function_processes.php';
//const FUNC_CATEGORY_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/function_categories.php';
//const IMPACT_CATEGORY_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/impact_categories.php';
//const FUNC_DETAILS_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/function_details.php';
//const IMPACT_CATEGORY_SCORING_PAGE = 'https://plum.hostpond.com/~lereive2/CCS/impact_category_scoring_2.php';



// -----------------------------------------------------------------------------------------------------------------------


// Department constants

const DEPARTMENT_TABLE = 'DEPT';
const DEPT_NAME_FIELD = 'DeptName';
const DEPT_CONTACT_FIELD = 'DeptContact';
const DEPT_CONTACT_TITLE_FIELD = 'DeptContactTitle';
const DEPT_CONTACT_EMAIL_FIELD = 'DeptContactEmail';
const DEPT_CONTACT_PHONE_FIELD = 'DeptContactPhone';
const ORGANIZATION_NAME_FIELD = 'Organization';
const COMPANY_SUBMIT_BUTTON_VALUE = 'company_submit_pressed';


// Department errors

const E_DEPARTMENT = 'Error uploading Department to database!';

const E_NO_ORG_NAME = 'Organization name must be supplied.';
const E_NO_DEPT_NAME = 'Department name must be supplied.';
const E_NO_DEPT_CONT = 'Department name must be supplied.';
const E_NO_CONT_NAME = 'Contact name must be supplied.';
const E_NO_CONT_TITLE = 'Contact title must be supplied.';
const E_NO_CONT_EMAIL = 'Contact email must be supplied.';
const E_NO_CONT_PHONE = 'Contact phone must be supplied.';

// -----------------------------------------------------------------------------------------------------------------------



// Essential Function constants

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

const E_EF = 'Error uploading Essential Functions to database!';

const E_NO_EF_NAME = 'Essential Function name must be supplied.';
const E_NO_EF_LEAD_NAME = 'Essential Function lead name must be supplied.';
const E_NO_EF_LEAD_TITLE = 'Essential Function lead title must be supplied.';
const E_NO_EF_LEAD_EMAIL = 'Essential Function lead email must be supplied.';
const E_NO_EF_LEAD_PHONE = 'Essential Function lead phone number must be supplied.';
const E_NO_IMPACT_SCORE = 'Impact Score must be supplied.';
const E_NO_DEPT_ID = 'Corresponding Department ID must be supplied.';

// -----------------------------------------------------------------------------------------------------------------------



// Essential Function Process constants

const FUNC_PROCESS_TABLE = 'EF_PROC';
const FUNC_PROCESS_DESCRIPTION_FIELD = 'ProcDesc';
const FUNC_PROCESS_EFID_FIELD = 'EFID';
const FUNC_PROCESS_SUBMIT_BUTTON_VALUE = 'func_process_submit_pressed';


// Essential Function Process errors

const E_FUNC_PROCESS = 'Error uploading Essential Function Process to database!';

const E_NO_FUNC_PROCESS_DESCRIPTION = 'Essential Function Process description must be supplied.';
const E_NO_EFID = 'Essential Function must be supplied.';

// -----------------------------------------------------------------------------------------------------------------------



// Impact Category constants

const IMPACT_CATEGORY_TABLE = 'I_CAT';
const IMPACT_CATEGORY_NAME_FIELD = 'CatName';
const IMPACT_CATEGORY_DESCRIPTION_FIELD = 'CatDesc';
const IMPACT_CATEGORY_SUBMIT_BUTTON_VALUE = 'impact_category_submit_pressed';


// Impact Category errors

const E_IMPACT_CATEGORY = 'Error uploading Impact Category to database!';

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

const E_FUNC_CATEGORY = 'Error uploading Function Category to database!';

const E_NO_FUNC_CATEGORY_NAME = 'Essential Function Category name must be supplied.';
const E_NO_FUNC_CATEGORY_DESCRIPTION = 'Essential Function Category description must be supplied.';


// -----------------------------------------------------------------------------------------------------------------------



//Essential  Function Details constants

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

const E_FUNC_DETAILS = 'Error uploading Function Details to database!';

const E_NO_FUNC_DETAILS_INTERVIEWER = 'Essential Function Details Interviewer\'s name must be supplied.';
const E_NO_FUNC_DETAILS_RESPONSIBILITIES = 'Essential Function Details Responsibilities must be supplied.';
const E_NO_FUNC_DETAILS_INTERNAL_DEP = 'Essential Function Details Internal Dependencies must be supplied.';
const E_NO_FUNC_DETAILS_EXTERNAL_DEP = 'Essential Function Details External Dependencies must be supplied.';
const E_NO_FUNC_DETAILS_PEAK_TIMES = 'Essential Function Details Peak Times must be supplied.';
const E_NO_FUNC_DETAILS_CONSIDERATIONS = 'Essential Function Details Considerations must be supplied.';
const E_NO_FUNC_DETAILS_REG_LOSS = 'Essential Function Details Regulatory Loss must be supplied.';
const E_NO_FUNC_DETAILS_RTO = 'Essential Function Details RTO must be supplied.';
const E_NO_FUNC_DETAILS_IT_SUPPORT = 'Essential Function DetailsIT Support must be supplied.';
const E_NO_FUNC_DETAILS_BACKUP_PROCESS = 'Essential Function Details Backup Process must be supplied.';
const E_NO_FUNC_DETAILS_FACTORS = 'Essential Function Details Factors must be supplied.';
const E_NO_FUNC_DETAILS_EFID = 'Essential Function must be supplied.';


// -----------------------------------------------------------------------------------------------------------------------



// Impact Category Scoring constants

const IMPACT_CATEGORY_SCORING_TABLE = 'I_CAT_SCORING';
const IMPACT_CATEGORY_SCORING_TIER_1_FIELD = 'TierOne';
const IMPACT_CATEGORY_SCORING_TIER_2_FIELD = 'TierTwo';
const IMPACT_CATEGORY_SCORING_TIER_3_FIELD = 'TierThree';
const IMPACT_CATEGORY_SCORING_TIER_4_FIELD = 'TierFour';
const IMPACT_CATEGORY_SCORING_TIER_5_FIELD = 'TierFive';
const IMPACT_CATEGORY_SCORING_TIER_6_FIELD = 'TierSix';
const IMPACT_CATEGORY_SCORING_TIER_7_FIELD = 'TierSeven';
const IMPACT_CATEGORY_SCORING_IMP_CAT_ID = 'ImpCatID';
const IMPACT_CATEGORY_SCORING_SUBMIT_BUTTON_VALUE = 'impact_category_scoring_submit_pressed';


// Impact Category Scoring  errors

const E_IMPACT_CATEGORY_SCORING = 'Error uploading Function Details to database!';

const E_NO_IMPACT_CATEGORY_SCORING_TIER_ONE = 'Impact Category Tier One must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_TWO = 'Impact Category Tier Two must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_THREE = 'Impact Category Tier Three must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_FOUR = 'Impact Category Tier Four must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_FIVE = 'Impact Category Tier Five must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_SIX = 'Impact Category Tier Six must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_TIER_SEVEN = 'Impact Category Tier Seven must be supplied.';
const E_NO_IMPACT_CATEGORY_SCORING_IMP_CAT_ID = 'Impact Category Impact Category ID must be supplied.';
 









































