<?php

include 'session.php';
if (isset($_SESSION['user'])) {
    echo "Hello, " . $_SESSION['user'];
} else {
    echo ' you are not allowed to access this page!';
    //REdirect to login page
    header('Location: login.php');
}
