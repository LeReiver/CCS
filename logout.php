<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 8:41 PM
 *
 * User logout, cookie handling, and page redirection
 */

// Includes the following files
require_once('includes/utilities.php');
require_once('includes/constants.php');

// Starts session
session_start();

// Gathers session cookie parameters into session_info object
$session_info = session_get_cookie_params();

// Clears session
$_SESSION = [];
// Sets cookie information
setcookie(session_name(), '',0 , $session_info['path'],
    $session_info['domain'], $session_info['httponly']);

// Destroys the session
session_destroy();

// Redirects user to logged out page
header('Location: ' . LOGGED_OUT_PAGE);

