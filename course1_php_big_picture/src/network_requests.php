<?php
require __DIR__ . '/vendor/autoload.php';

$global_start = microtime(true);

$client = new GuzzleHttp\Client();
request_endpoint($client, 'http://jkle.in/long_endpoint/1');
request_endpoint($client, 'http://jkle.in/long_endpoint/2');
request_endpoint($client, 'http://jkle.in/long_endpoint/3');
$global_end = microtime(true);

echo "Full page loaded in: " . round($global_end - $global_start) . "seconds";

function request_endpoint($client, $url){
    echo "Requesting URL: $url...";
    $start = microtime(true);
    $response = $client->request('GET', $url);
    $end = microtime(true);

    echo response->getBody();
    echo "</br>Request completed in: " . round($end - $start) . "seconds</br></br>";
}

# `php -S localhost:8080`
# above is a command line to run php index file on a local server (not good for prod tho, use nginx)
# by default it accesses index.php but you can access individual files with
# localhost:8080/network_requests.php
# `tail -f logs/query.log`
# to see the logs stream in
