<?php

echo '<br>';
$date = new DateTime();
echo $date->format('g:i:s a, F j, Y') . '<br>';

echo $date->setDate(2019, 13, 23)
        ->setTime(3, 75)
        ->format('g:i:s a, F j, Y') . '<br>';