<?php

$timestamp_now = time();
echo "Timestamp for now: {$timestamp_now} \n";

$timestamp_tomorrow = $timestamp_now + (60 * 60 * 24);
echo "Timestamp for tomorrow: {$timestamp_tomorrow} \n";

$timestamp_tomorrow = strtotime('+1 day');
echo "Timestamp for tomorrow: {$timestamp_tomorrow} \n" ;

$timestamp_newyear = strtotime('first day of January 2020');
echo "Timestamp for New Year: {$timestamp_newyear} \n";

$timestamp_newyear2 = mktime(0, 0, 0, 1, 1, 2020);
echo "Timestamp for New Year mktime(): {$timestamp_newyear2} \n";