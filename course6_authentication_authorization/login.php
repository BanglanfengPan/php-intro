<?php

//echo 'Hello World!';


include 'session.php';

//Here is a login form


if (isset($_POST['user']) && isset($_POST['password'])) {
    // Validate the user & pass in your DB
    $valid = true;
    if ($valid){
        $_SESSION['user'] = $_POST['user'];
    }else{
        // do nothing
    }
} else {
    echo "Please enter user name and password!";
}
