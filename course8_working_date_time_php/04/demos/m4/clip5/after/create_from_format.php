<?php

echo '<br>';

$date = new DateTime('09/05/2020');
echo $date->format('F j, Y') . '<br>';

$date = DateTime::createFromFormat('d/m/Y', '09/05/2020');
echo $date->format('F j, Y') . '<br>';

