<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 1/26/17
 * Time: 2:34 PM
 */
include_once ('constants.php');

//if "delete_dept" variable is called, connect to database and delete row
if (isset($_REQUEST['delete_dept'])) {

    // Gets id of row to be deleted
    $delete_id = $_REQUEST['delete_dept'];

    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $query = "DELETE FROM";
    $query .= " " . DEPARTMENT_TABLE;
    $query .= " WHERE DeptID = '$delete_id'";
    $db->query($query);
    $db->close();
    header('Location: ../departments.php');
}

//if "delete_ef" variable is called, connect to database and delete row
if (isset($_REQUEST['delete_ef'])) {

    // Gets id of row to be deleted
    $delete_id = $_REQUEST['delete_ef'];

    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $query = "DELETE FROM";
    $query .= " " . EF_TABLE;
    $query .= " WHERE EFID = '$delete_id'";
    $db->query($query);
    $db->close();
    // Redirects back to essential function page
    header('Location: ../essential_functions.php');
}

//if "delete_ef_proc" variable is called, connect to database and delete row
if (isset($_REQUEST['delete_ef_proc'])) {

    // Gets id of row to be deleted
    $delete_id = $_REQUEST['delete_ef_proc'];

    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $query = "DELETE FROM";
    $query .= " " . FUNC_PROCESS_TABLE;
    $query .= " WHERE ProcID = '$delete_id'";
    $db->query($query);
    $db->close();
    // Redirects back to function_processes page
    header('Location: ../function_processes.php');
}


//if "delete_impact_category" variable is called, connect to database and delete row
if (isset($_REQUEST['delete_impact_category'])) {

    // Gets id of row to be deleted
    $delete_id = $_REQUEST['delete_impact_category'];

    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $query = "DELETE FROM";
    $query .= " " . IMPACT_CATEGORY_TABLE;
    $query .= " WHERE ImpCatID = '$delete_id'";
    $db->query($query);
    $db->close();
    // Redirects back to departments page
    header('Location: ../impact_categories.php');
}



//if "delete_detail" variable is called, connect to database and delete row
if (isset($_REQUEST['delete_detail'])) {

    // Gets id of row to be deleted
    $delete_id = $_REQUEST['delete_detail'];

    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $query = "DELETE FROM";
    $query .= " " . FUNC_DETAILS_TABLE;
    $query .= " WHERE DetailID = '$delete_id'";
    $db->query($query);
    $db->close();
    // Redirects back to departments page
    header('Location: ../function_details.php');
}

