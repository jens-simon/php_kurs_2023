<?php

//  composer require fakerphp/faker

require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create("de_DE");
// generate data by calling methods

for ($i = 0; $i < 100; $i++) {
    echo $faker->name() . "<br>";
    // 'Vince Sporer'
    echo $faker->email() . "<br>";
    // 'walter.sophia@hotmail.com'
    echo $faker->text() . "<br>";
    // 'Numquam ut mollitia at consequuntur inventore dolorem.'
    echo $faker->isbn10() . "<br><br>";
}
