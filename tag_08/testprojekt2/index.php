<?php

// bitte einmal in der Kommandozeile
// composer install
// eingeben, damit der vendor Ordner wieder geladen wird!!



//  so sind die beiden genutzten Pakete bei der Entwicklung installliert worden
//  composer require fakerphp/faker
//  composer require kevinlebrun/colors.php
//  
// es entstehen:
// composer.json
// composer.lock
// und der vendor Ordner




require_once 'vendor/autoload.php';
//require_once __DIR__ . '/vendor/autoload.php';

// Color
use Colors\Color;
$c = new Color();

echo "\nDieses Skript kann sowohl im Webserver(XAMPP) als auch im Terminal ausgeführt werden!!<br><br>\n".PHP_EOL;

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create("de_DE");
// generate data by calling methods

for ($i = 0; $i < 2; $i++) {
    echo $c($faker->name() . "<br>")->white()->bold()->highlight('green').PHP_EOL ;
  
    echo $c($faker->email() . "<br>")->red().PHP_EOL;
  
    echo $faker->text() . "<br>".PHP_EOL;
  
    echo $faker->isbn10() . "<br><br>".PHP_EOL;
}
