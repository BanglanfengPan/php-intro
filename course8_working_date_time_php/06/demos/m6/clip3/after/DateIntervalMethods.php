<?php
echo '<pre>';

$date1 = new DateTime('12 January 2020 4:30 am');
echo 'Date 1: ' . $date1->format('F j, Y g:i a') . '<br>';

$date2 = new DateTime('10 September 2020 5:30:20 am');
echo 'Date 2: ' . $date2->format('F j, Y g:i:s a') . '<br>';

$interval = new DateInterval('P2Y');
echo 'Date 1 add 2 years: ' . $date1->add($interval)->format('F j, Y g:i:s a') . '<br>';


$interval = new DateInterval('P1Y3M4DT6H8M');
echo 'Date 2 sub 1Y3M4DT6H8M: ' . $date2->sub($interval)->format('F j, Y g:i:s a') . '<br>';

$diff_interval = $date1->diff($date2);
echo 'Interval: ' . $diff_interval->format('%r %y years %m months %d days %h hours %i minutes');