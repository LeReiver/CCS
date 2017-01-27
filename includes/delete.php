<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 1/26/17
 * Time: 2:34 PM
 */
include_once ('constants.php');
include_once('dept_code.php');


$id = $_GET["DeptID"];

if (isset($_GET['delete'])) {
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "DELETE FROM DEPT WHERE id = '$id'";
}

$conn->close();

// Redirects back to departments page
header('Location: ../departments.php');
