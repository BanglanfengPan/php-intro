<?php

echo '<br/>';

$dtime = new DateTime('October 23, 2020');

$tzone = $dtime->getTimezone();
echo 'Default Timezone: ' . $tzone->getName() . '<br/>';

echo 'Offset DT: ' . $dtime->getOffset() . '<br/>';
echo 'Offset TZ: ' . $tzone->getOffset($dtime) . '<br/>';

echo '<hr>';

$tzone_la = new DateTimeZone('America/Los_Angeles');

$dtime->setTimezone($tzone_la);
$new_tz = $dtime->getTimezone();
echo 'New Timezone: ' . $new_tz->getName() . '<br/>';

echo '<hr>';

$dtime2 = new DateTime('October 23, 2020', $tzone_la);
$new_tz2 = $dtime2->getTimezone();
echo 'New Timezone2: ' . $new_tz2->getName() . '<br/>';

echo '<hr>';

$dtime3 = new DateTime('October 23, 2020 America/New_York', $tzone_la);
$new_tz3 = $dtime3->getTimezone();
echo 'New Timezone3: ' . $new_tz3->getName() . '<br/>';

