<?php

// Von ISO zu local (DE)
$date = new DateTime("2023-01-11 08:51:28"); // Datum plus Uhrzeit

//print_r($date);

//echo $date->format('d.m.Y H:i:s'). " Uhr";

// Heute ist der 11.01.2023 es ist jetzt 09:02:55 Uhr

$datum = $date->format('d.m.Y');
$uhr = $date->format('H:i');//:s');


echo "Heute ist der ".$datum." es ist jetzt ".$uhr." Uhr";


// Von DE zu ISO
// Eingabe
// "11.02.2023"
$date = new DateTime("11.01.2023"." "."08:09:44");
//print_r($date);
$isoDatum = $date->format('Y-m-d H:i:s');


$isoDatum = $date->format('Y-m-d H:i:s');
echo "ISO-Datum: ".$isoDatum;