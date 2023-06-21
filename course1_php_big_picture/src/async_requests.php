<?php
require __DIR__ . '/vendor/autoload.php';

$global_start = microtime(true);

$client = new GuzzleHttp\Client();

$promises = [
    '1' => $client->getAsync('https://google.com'),
    '2' => $client->getAsync('https://facebook.com'),
    '3' => $client->getAsync('https://wiki.com')
];

$results = GuzzleHttp\Promise\unwrap($promises);
$results = GuzzleHttp\Promise\settle($promises)->wait();

echo $results['1']['value']->getBody() . '<\br';
echo $results['2']['value']->getBody() . '<\br';
echo $results['3']['value']->getBody() . '<\br';


$global_end = microtime(true);

echo "Full page loaded in: " . round($global_end - $global_start) . "seconds";

# `php -S localhost:8080`
# above is a command line to run php index file on a local server (not good for prod tho, use nginx)
# by default it accesses index.php but you can access individual files with
# localhost:8080/network_requests.php
# `tail -f logs/query.log`
# to see the logs stream in