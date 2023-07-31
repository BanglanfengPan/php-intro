<?php
// https://www.php.net/manual/en/mongodb-driver-bulkwrite.delete.php

    $Pid = $_GET["Pid"];

    $manager = new MongoDB\Driver\Manager("mongodb+srv://test-user:test-password@cluster66380.brzyuqw.mongodb.net/PersonalDB?retryWrites=true&w=majority");

    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->delete(['Pid'=>intval($Pid)], ['limit' => 1]);

    $result = $manager->executeBulkWrite('PersonalDB.Person', $bulk);

    // header("Location: list.php");
?>