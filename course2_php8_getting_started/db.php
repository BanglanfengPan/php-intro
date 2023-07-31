<?php

$db = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'), # username
    getenv('DB_PASSWORD'), # password for the user
    getenv('DB_NAME')# database we are connecting to in the mysql server
);
