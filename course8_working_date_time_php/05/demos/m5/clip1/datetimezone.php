<?php

// Returns a numerically indexed array containing all defined timezone identifiers
$tzone_idents = DateTimeZone::listIdentifiers();

echo '<br/>';
echo 'Total timezone identifiers = ' . count($tzone_idents);
echo '<br/><pre>';
print_r($tzone_idents);

$tzone = new DateTimeZone('America/Los_Angeles');

echo '<br/>';

// Returns location information for a timezone
print_r($tzone->getLocation());

echo '<br/>';

// Returns the name of the timezone
echo $tzone->getName();