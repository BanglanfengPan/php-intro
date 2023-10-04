<?php

if (isset($_POST['login'])) {

    session_start();

    if ('datetime' == $_POST['username']  && 'admin' == $_POST['password'] ) {

        $_SESSION['authenticated'] = true;
        header('Location: dashboard1.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div id="main-content">

            <h1>User Login</h1>

            <form method="post">
                <div class="controls">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="controls">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="controls btn">
                    <input type="submit" name="login" value="Log In" />
                </div>
            </form>

        </div>

    </body>
</html>