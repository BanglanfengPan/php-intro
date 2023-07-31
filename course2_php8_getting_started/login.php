<?php
    # name of HTML determined $_POST!!!!!!!

    require 'config.inc.php';

    session_start();

    $message = '';

    if (isset($_POST['name']) && isset($_POST['password'])) {
        $db = new mysqli(
            MYSQL_HOST, # where we are running the database
            MYSQL_USER, # username
            MYSQL_PASSWORD, # password for the user
            MYSQL_DATABASE, # database we are connecting to in the mysql server
        );

        $sql = sprintf("SELECT * FROM users WHERE name='%s'", $db->real_escape_string($_POST['name']));

        $result = $db->query($sql);

        $row = $result->fetch_object(); # all columns are now properties of this row project 

        if ($row != null) {
            $hash = $row->hash;
            if (password_verify($_POST['password'], $hash)) {
                $message = 'Login Successful.';

                $_SESSION['username'] = $row->name;

                $_SESSION['isAdmin'] = $row->isAdmin;


            } else {
                $message = 'Login failed.';
            }
        } else {
            $message = 'Login failed.';
        }

        $db->close();
    }
    
    echo $message;
    var_dump($_POST);
?>

<form
    action=""
    method="post">
    User name: <input type="text" name="name" value=""><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Login"><br>
</form>