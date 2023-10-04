<?php

echo '<pre>';

$from = new DateTime('December 31, 2019');
$to = new DateTime('January 1, 2021');

//$interval = new DateInterval('P2W');
$meeting_dates = DateInterval::createFromDateString('last thursday of next month');


$meetings = new DatePeriod($from, $meeting_dates, $to, DatePeriod::EXCLUDE_START_DATE);

foreach ($meetings as $meeting) {
    echo $meeting->format('l, F j, Y') . '<br>';
}