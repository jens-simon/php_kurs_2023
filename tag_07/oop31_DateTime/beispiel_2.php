<?php
$date = new DateTime('-30 days');  // ab jetzt

$datum = $date->format('d.m.Y');
$uhr = $date->format('H:i');//:s');


echo "In 4 Wochen ist der ".$datum." es ist jetzt ".$uhr." Uhr";


$date = new DateTime('13.01.2023');//

$date->modify('+1 days');  // ab einem speziellen Datum, aber nicht jetzt
print_r($date);


$date->modify('+3 days');  // ab einem speziellen Datum, aber nicht jetzt
print_r($date);


