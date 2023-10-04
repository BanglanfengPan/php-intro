<?php

echo '<br>';

$date1 = new DateTime();
echo 'Date1: ' . $date1->format('g:i:s a, F j, Y') . '<br>';

$date2 = $date1->modify('+1 day 9:30 pm');
echo 'Date1: ' . $date1->format('g:i:s a, F j, Y') . '<br>';
echo 'Date2: ' . $date2->format('g:i:s a, F j, Y') . '<br>';

echo '<hr>';

$date3 = new DateTimeImmutable();
echo 'Date3: ' . $date3->format('g:i:s a, F j, Y') . '<br>';

$date4 = $date3->modify('+1 day 9:30 pm');
echo 'Date3: ' . $date3->format('g:i:s a, F j, Y') . '<br>';
echo 'Date4: ' . $date4->format('g:i:s a, F j, Y') . '<br>';