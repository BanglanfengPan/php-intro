<?php

include 'session.php';
if (isset($_GET['user'])) {
    echo "Set user " . $_GET['user'] . 'into Session!';
    $_SESSION['user'] = $_GET['user'];
} else {
    echo "user not found in the query string!";
}
