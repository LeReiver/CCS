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