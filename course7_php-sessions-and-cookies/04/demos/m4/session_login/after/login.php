<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

$username = "";
$password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}

// Verify credentials
if ($username != "" && $password != "") {
    if ($username == "annapurna" && $password == "anna01") {

        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    } else {
        echo "Oops! Something went wrong. Please try again";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP Sessions</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="background">
        <div class="container col-md-8">

            <div class="navbar-area text-center">
                <a class="page-scroll" href="dashboard.php">HOME</a>
            </div>

            <div class="text-center">

                <h3 class="title">Our Services</h3>

                <form method="post" action="login.php">
                    <div class="row">
                        <label for="username" class="col-sm-3">Username:</label>
                        <input  type="text" name="username" class="col-sm-6" />
                    </div>
                    <div class="row">
                        <label for="password" class="col-sm-3">Password:</label>
                        <input  type="password" name="password" class="col-sm-6" />
                    </div>
                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>



1. user -> POST TO php server 
2. php server -> cookie to the user
3. php server -. htmo to the user
4. 
