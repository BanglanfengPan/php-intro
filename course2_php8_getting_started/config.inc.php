<?php
    # we should never call config files like this one just config.php because the user will be able to access them (security)
    define('MYSQL_HOST', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', 'secretpassword');
    define('MYSQL_DATABASE', 'php_learn');
?>