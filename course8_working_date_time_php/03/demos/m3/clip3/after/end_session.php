<?php

$inactivity_limit = 8;

session_start();

if (! isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit;
} elseif ($_SESSION['authenticated'] + $inactivity_limit < time()) {
    $_SESSION = [];

    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), time() - 86400, '/');
    }

    session_destroy();
    header('Location: login.php?expired=true');
    exit;
} else {
    $_SESSION['authenticated'] = time();
}