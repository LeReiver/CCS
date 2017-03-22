<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 8:38 PM
 *
 * Login functions
 */

// Creates error_message object of type and detail
function error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><br><div id ="error_detail">' . $detail . '</div>';
}

// Sets the session using username and redirects user to Departments page
function set_user($username) {
    $_SESSION[SESSION_USERNAME_KEY] = $username;
    header('Location: ' . DEPT_PAGE);
}

// Login function for login button
function login($username, $password)
{
    // Throws error if user fields left blank
    if (empty($username)) {
        return error_message(E_LOGIN, E_NO_USERNAME);
    }
    if (empty($password)) {
        return error_message(E_LOGIN, E_NO_PASSWORD);
    }
    //  Looks up username
    $user = lookup_user($username);
    // If not exists throws error
    if (!$user) {
        return error_message(E_LOGIN, E_USERNAME_NOT_FOUND);
    }
    // Verify password to login else throw error
    if (!password_verify($password, $user[ACCOUNT_PASSWORD_HASH_FIELD ])) {
        return error_message(E_LOGIN, E_PASSWORD_INCORRECT);
    }
    // Sets username for session handling
    set_user($username);
}

// Registers new user
function register($username, $password, $confirm)
{
    // Throws error if user fields left blank
    if (empty($username)) {
        return error_message(E_REGISTER, E_NO_USERNAME);
    }
    if (empty($password)) {
        return error_message(E_REGISTER, E_NO_PASSWORD);
    }
    if (empty($confirm)) {
        return error_message(E_REGISTER, E_NO_CONFIRM);
    }
    //  Confirms password
    if ($password !== $confirm) {
        return error_message(E_REGISTER, E_CONFIRM_MISMATCH);
    }
    //  Looks up username
    $user = lookup_user($username);
    if (!empty($user)) {
        return error_message(E_REGISTER, E_ACCOUNT_EXISTS);
    }
    // Adds user
    add_user($username, password_hash($password, PASSWORD_DEFAULT));
    // Sets username for session handling
    set_user($username);
}

// Creates login_or_register object upon login or registered pressed
function login_or_register(
    $login_pressed,
    $register_pressed,
    $login_username,
    $login_password,
    $register_username,
    $register_password,
    $register_confirm_password
)
{
    // If user name and user password fields are not empty, call login() upon login button pressed
    if (!empty($login_pressed)) {
        return login($login_username, $login_password);
    // Otherwise, if user name and user password and confirm password fields are not empty, call register() upon register button pressed
    } elseif (!empty($register_pressed)) {
        return register($register_username, $register_password, $register_confirm_password);
    }
    // Clear user fields
    return '';
}