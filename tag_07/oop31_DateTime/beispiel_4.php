<?php
$datetime1 = new DateTime('1970-01-01');
$datetime2 = new DateTime('now');
$differenz = $datetime2->diff($datetime1);

print_r($differenz);

echo $differenz->format('%s'); // (absolute) Tage

$date = new DateTime();
echo $date->getTimestamp();

