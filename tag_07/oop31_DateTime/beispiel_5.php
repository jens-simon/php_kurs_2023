<?php
$datetime1 = new DateTime('1970-01-01');
echo print_r($datetime1);

$datetime2 = new DateTime('12.01.2023');
echo print_r($datetime2);

$datetime3 = new DateTime(); // 2023-01-11 10:47:10 
$datetime3->setDate(2024, 5, 22); // 2024-05-12
echo print_r($datetime3);
$datetime3->setTime(12, 3, 44);
echo print_r($datetime3);




