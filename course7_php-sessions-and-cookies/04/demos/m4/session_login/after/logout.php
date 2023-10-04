<?php
session_start();

$_SESSION = [];
$ses_params = session_get_cookie_params();

$options = array(
    'lifetime' => time()-60,
    'path'     => $ses_params['path'],
    'domain'   => $ses_params['domain'],
    'secure'   => $ses_params['secure'],
    'httponly' => $ses_params['httponly'],
    'samesite' => $ses_params['samesite']);

setcookie(session_name(), '', $options);

session_destroy(); # clear out the session and destroy data associated with the session, only this part is needed

header("Location: login.php"); # only this part is required
session_regenerate_id(); # regenerates a sessions that has no data