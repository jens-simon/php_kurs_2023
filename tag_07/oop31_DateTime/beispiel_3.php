<?php
$datetime = new DateTimeImmutable('1970-01-01');
$datumVeraendert1 = $datetime->modify('+1 week'); // 1 Woche danach
$datumVeraendert2 = $datetime->modify('-2 days'); // 2 Tage davor
var_dump($datetime); // insgesamt 5 Tage danach
var_dump($datumVeraendert1); 
var_dump($datumVeraendert2);