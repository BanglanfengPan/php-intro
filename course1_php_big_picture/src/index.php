<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/db.php';
require __DIR__ . '/courses.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('query_log');
$log->pushHandler(new StreamHandler('logs/query.log', Logger::DEBUG));

$myPDO = new PDO("sqlite:/Users/jklein/development/pluralsight/module_4/Module4.db");

$db = new DB($log);
$courses = new Courses($db);

// $result = write_query($myPDO, "insert into courses (name, author, create_date) values ('High Performance PHP', 'Jonathan Klein', '03/29/206')", $log);

// $courses = read_query($myPDO, "select * from courses", $log);

// foreach ($courses as $course) {
//     print($course['name']);
// }

# below we actually use a method within a class instead of function defined in this file
$result = $db->write_query("insert into courses (name, author, create_date) values ('High Performance PHP', 'Jonathan Klein', '03/29/206')");
$result =$courses->create_course('High Performance PHP', 'Jonathan Klein', '03/29/206');

$courses = $db->read_query("select * from courses");

foreach ($courses as $course) {
    print($course['name']);
}



# `php -S localhost:8080`
# above is a command line to run php index file on a local server (not good for prod tho, use nginx)
# `tail -f logs/query.log`
# to see the logs stream in

function read_query($db_handle, $query, $logger){
    $result = $db_handle->query($query);
    $logger->info("Read query executed", ['query' => $query]);
    return $result;
}

function write_query($db_handle, $query, $logger){
    $result = $db_handle->query($query);
    $logger->notice("Write query executed", ['query' => $query]);
    return $result;
}