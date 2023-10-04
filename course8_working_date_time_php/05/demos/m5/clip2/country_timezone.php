<?php
echo '<pre>';

$country_ident = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'US');

echo count($country_ident) . ' identifiers found:</p>';
print_r($country_ident);
