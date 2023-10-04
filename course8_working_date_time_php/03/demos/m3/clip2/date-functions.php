<?php

$timestamp_now = time();
echo "Timestamp for now: {$timestamp_now} \n";

$timestamp_tomorrow = $timestamp_now + (60 * 60 * 24);
echo "Timestamp for tomorrow: {$timestamp_tomorrow} \n";

$timestamp_tomorrow = strtotime('+1 day');
echo "Timestamp for tomorrow: {$timestamp_tomorrow} \n" ;

$timestamp_newyear = strtotime('first day of January 2020');;
echo "Timestamp for New Year: {$timestamp_newyear} \n";

$timestamp_newyear2 = mktime(0, 0, 0, 1, 1, 2020);
echo "Timestamp for New Year mktime(): {$timestamp_newyear2} \n";

echo "\n \n";

echo 'Today is ' . date('g:i:s a \o\n l, F j, Y') . "\n" ;
echo 'Tomorrow is ' . date('g:i:s a \o\n l, F j, Y', $timestamp_tomorrow). "\n";
echo 'New year 2020 is a ' . date('l', $timestamp_newyear). "\n";

echo "\n \n";

$year = 2021;

if (checkdate(2, 29, $year)) {
    echo  "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}