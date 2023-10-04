<?php

$date = new DateTime();
$sun_info = date_sun_info($date->getTimestamp(), 28.704060, 77.102493);

echo '<pre>';
print_r($sun_info);
?>