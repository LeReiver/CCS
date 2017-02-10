<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 1/26/17
 * Time: 2:34 PM
 */
include_once ('constants.php');

//if "delete" variable is called, connect to database and delete row
if (isset($_REQUEST['delete_row'])) {
    
    // Gets id of row to be deleted
    $delete_id = $_REQUEST['delete_row'];

    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $query = "DELETE FROM";
    $query .= " " . DEPARTMENT_TABLE;
    $query .= " WHERE DeptID = '$delete_id'";
    $db->query($query);
    $db->close();
}
// Redirects back to departments page
header('Location: ../departments.php');

