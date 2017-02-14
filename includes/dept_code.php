<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/5/16
 * Time: 12:16 AM
 * 
 * Holds multiple form functions 
 */

// Creates error_message object of type and detail
function company_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page 
function next_page() {
    header('Location: ' . EF_PAGE);
}

// Creates essential_function object with supplied parameters
function department(
     $dept_name,
     $dept_contact,
     $deptContact_title,
     $deptContact_email,
     $deptContact_phone,
     $organization_name
    )
{
    // If user field is left blank, give corresponding error
    if (empty($dept_name)) {
        return company_error_message(E_DEPARTMENT, E_NO_DEPT_NAME);
    }
    if (empty($dept_contact)) {
        return company_error_message(E_DEPARTMENT, E_NO_CONT_NAME);
    }
    if (empty($deptContact_title)) {
        return company_error_message(E_DEPARTMENT, E_NO_CONT_TITLE);
    }
    if (empty($deptContact_email)) {
        return company_error_message(E_DEPARTMENT, E_NO_CONT_EMAIL);
    }
    if (empty($deptContact_phone)) {
        return company_error_message(E_DEPARTMENT, E_NO_CONT_PHONE);
    }
    if (empty($organization_name)) {
        return company_error_message(E_DEPARTMENT, E_NO_ORG_NAME);
    }

    // Calls add_essential_function and passes in user defined parameters to be uploaded to database
    add_department(
        $dept_name,
        $dept_contact,
        $deptContact_title,
        $deptContact_email,
        $deptContact_phone,
        $organization_name
    );
    // Calls next_page function
    next_page();
}

// Creates ef_submit object for submit button
function department_submit(
    $dept_name,
    $dept_contact,
    $deptContact_title,
    $deptContact_email,
    $deptContact_phone,
    $organization_name,
    $company_submit_pressed
    )
{
    // If no user field is left empty upon submit button pressed, call essential_function()
    if (!empty($company_submit_pressed)) {
        return department(
            $dept_name,
            $dept_contact,
            $deptContact_title,
            $deptContact_email,
            $deptContact_phone,
            $organization_name
        );
    }
    // Clear user fields
    return '';
}

//function show_departments()
//{
//    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//    $sql = "SELECT Organization, DeptName, DeptID FROM DEPT as DEPT";
//    $result = $conn->query($sql);
//
//    if ($result->num_rows > 0) {
//        echo "<table style='margin-top: -100px;'>";
//        echo "<tr><th colspan='4'><h4></h4></th></tr>";
//        echo "<tr><th id='table_header' colspan='2'><h4>Existing Departments</h4></th><th></th></tr>";
//        while ($row = $result->fetch_assoc()) {
//        echo "<tr><td id='reference_table'>" . $row["DeptName"] . ": "
//            . $row["Organization"] . "</td>
//            <td id='reference_table'>
//                <input type='hidden' value=" .$row["DeptID"]."  name='id'/>
//                <form action='includes/delete.php' method='GET'>
//                <button id='delete_row' name='delete_dept' value=".$row["DeptID"].">DELETE</button></form>";
//        echo "</td></tr>";
//        }
//        echo "</table>";
//    } else {
//        echo " <h4>You have no existing Departments</h4>";
//    }
//
//
//    $conn->close();
//}



/*
function show_departments()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Organization, DeptName FROM DEPT as DEPT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table style='margin-top: -100px;'>";
        echo "<tr><th colspan='4'><h4></h4></th></tr>";
        echo "<tr><th id='table_header'><h4>Existing Departments</h4></th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "                <tr><td  id='reference_table'>" . $row ["DeptName"] . ": "
                . $row["Organization"] . "<button id='delete_row'>DELETE</button></td></tr>\n";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Departments</h4>";
    }
    $conn->close();
}*/