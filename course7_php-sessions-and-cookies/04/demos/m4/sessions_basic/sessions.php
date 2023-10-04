<?php

// Initializing a session:

session_start();

$_SESSION['username'] = 'Anna';
echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Not Available';

echo "\n";

$_SESSION = [];
$ses_params = session_get_cookie_params();

$options = array(
    'expires' => time() - 60,
    'path'     => $ses_params['path'],
    'domain'   => $ses_params['domain'],
    'secure'   => $ses_params['secure'],
    'httponly' => $ses_params['httponly'],
    'samesite' => $ses_params['samesite']);

setcookie(session_name(), '', $options);

session_destroy();

echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Not Available';