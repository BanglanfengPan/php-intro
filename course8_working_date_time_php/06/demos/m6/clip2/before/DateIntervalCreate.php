<?php

echo '<pre>';

$interval = new DateInterval('P2Y');
print_r($interval);

echo '<hr>';

$interval = new DateInterval('P1W');
print_r($interval);

echo '<hr>';

$interval = new DateInterval('P2Y3M4D');
print_r($interval);

echo '<hr>';

$interval = new DateInterval('P2Y3M4DT6H8M');
print_r($interval);