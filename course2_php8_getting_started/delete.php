<?php

    //check if it is admin deleting
    require 'auth.inc.php';

    //delete.php?id=2 # get data through url
    # check if there is a value for id and if it is digits
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: select.php'); # redirect back to php (PHP works this way)
    };

    include_once 'db.php';

    $sql = "DELETE FROM users WHERE id=$id";
    $db->query($sql);
    echo '<p>  User deleted. </p>';
    $db->close();
?>
