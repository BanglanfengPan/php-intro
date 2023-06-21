<?php
    //delete.php?id=2 # get data through url
    # check if there is a value for id and if it is digits
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) { 
        $id = $_GET['id'];
    } else {
        header('Location: select.php'); # redirect back to php (PHP works this way)
    };

    $db = new mysqli(
        'localhost', # where we are running the database
        'root', # username
        'secretpassword', # password for the user
        'php_learn', # database we are connecting to in the mysql server
    );

    $sql = "DELETE FROM users WHERE id=$id";
    $db->query($sql);
    echo '<p>  User deleted. </p>';
    $db->close();
?>