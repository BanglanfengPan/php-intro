<?php

$username = 'admin';
$password = 'password';

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Parcel Tracker"');
    header('HTTP/1.0 401 Unauthorizied');
    echo 'You must provide a valud username and password to access this application';
    exit;
} #this is what will force user get authorized

if ($_SERVER["PHP_AUTH_USER"] !== $username ||
    $_SERVER['PHP_AUTH_PW'] !== $password) {
    header('HTTP/1.0 401 Unauthorizied');
    echo 'Either username or password was not valid\n';
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>HTTP Basic Authentication in Pire PHP</title>
</head>

<body>
    <h1>Welcome!</h1>
    <p>It's nice to meet you</p>
</body>

</html>

