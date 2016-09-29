<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 5:51 PM
 *
 * Various login and session functions
 */

// Session constant variables
const SESSION_DATA_ACCOUNT_USER_FIELD = 0;
const SESSION_DATA_ACCOUNT_SESSION_FEILD = 1;


// Saves session
function save_session()
{
    $username = get_session_value(SESSION_USERNAME_KEY);
    add_session($username, serialize($_SESSION));
}

// Restores session
function restore_session()
{
    $username = get_session_value(SESSION_USERNAME_KEY);
    $session_data = lookup_session($username);
    if (!empty($session_data)) {
        $_SESSION = unserialize($session_data[SESSION_DATA_ACCOUNT_SESSION_FEILD]);
    }
}

// Requires secure connection
function require_secure()
{
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        exit();
    }
}

// Requires login for session continuation
function require_login()
{
    if (!isset($_SESSION[SESSION_USERNAME_KEY]) || empty($_SESSION[SESSION_USERNAME_KEY])) {
        header('Location: ' . LOGIN_PAGE);
        exit;
    }
    restore_session();
}

// Gets $_POST value
function get_post_value($key)
{
    if (isset($_POST[$key])) {
        return htmlentities($_POST[$key]);
    }
    return'';
}

// Gets $_SESSION value
function get_session_value($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }
    return '';
}

// Sets $_SESSION value
function set_session_value($key, $value)
{
    $_SESSION[$key] = $value;
}




// Shows small logo image in top right corner
function show_logo()
{
    echo'<div id="top"></div>';
    echo '    <div id="logo_sm"><a href="home.php" ><img src="images/ccs_logo.png" width="140px" height="74" ></a></div>';
}
// Shows logged in user and logout button
function show_user()
{
    echo '<div id="user_pane">';
    echo '    ' . get_session_value(SESSION_USERNAME_KEY) . ' [<a id="logout" href="' . LOGOUT_PAGE .
        '">LOGOUT</a>]' . "<br>\n";
    echo '</div>' . "\n";
}

// Destroys session and gathers cookie information
function destroy_session()
{
    $session_info = session_get_cookie_params();
    $_SESSION = [];
    setcookie(session_name(), '',0 , $session_info['path'], $session_info['domain'], $session_info['httponly']);
    session_destroy();
}

/*
 * -------------  Used for testing to local csv -------------------------------
 *

const FILE_KEY_FIELD = 0;
const ACCOUNT_DATA_FILE = 'data/account_data.csv';

function lookup_key_value($key, $filename)
{
    $file = fopen($filename, 'r');
    flock($file, LOCK_SH);
    do {
        $line = fgetcsv($file);
        if ($line[FILE_KEY_FIELD] === $key) {
            break;
        }
    } while ($line);
    flock($file, LOCK_UN);
    fclose($file);
    return $line;
}

function add_key_value($key, $record, $filename)
{
    $file = fopen($filename, 'r+');                 // opens the file
    flock($file, LOCK_EX);                          // locks the file for individual use -  LOCK_EX = exclusive lock
    $contents = [];                                 // creates new array
    do {
        $line = fgetcsv($file);                     // loops through file
    if (!$line) {                                   // if reached the end then exit
            break;
        }
        $contents[$line[FILE_KEY_FIELD]] = $line;   // contents of key = line
    } while ($line);                                // continue until no more line exist
    $contents[$key] = $record;                      // set new values to contents
    ftruncate($file, 0);                            // zero's the pointer out
    rewind($file);                                  // sets file pinter back to beginning
foreach ($contents as $line) {                      // reads the lines, modifies
        fputcsv($file, $line);
    }
    flock($file, LOCK_UN);                          // unlocks file
    fclose($file);                                  // closes file
}

------------------------------------------------------------------------------------------*/



