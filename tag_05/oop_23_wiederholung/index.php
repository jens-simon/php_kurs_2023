<?php

// Objekt-Welt

require_once "classes/Person.php"; // Warning /Fatal Error
//include_once "classes/Person.php"; // Warning / Warning

echo "hallo , guten Morgen!<br>";

// Erzeigen eines Objektes
// Wert
// Variable = Wert
$zahl = 10;
$vorname ="Jens";
$person = new Person("Jens", "Simon", "Köln");

echo gettype($zahl)."<br>";
echo gettype($vorname)."<br>";
echo gettype($person)."<br>"; // funktioniert nicht


/*

echo $zahl;
echo $vorname;
echo $person; // funktioniert nicht
*/
//print_r($person);
var_dump($person);


// Wert des Proerties/Eigenschaft setzen

// public Zugriff auf das Property
//$person->vorname = "Jens";
echo $person->vorname;


$person2 = new Person("Tim", "Müller", "Berlin");
//$person2->werteSetzen("Jens", "Simon", "Köln");



$person2->vorname  = "Tim";
echo $person2->vorname;

// nicht public /Getter/Setter
// besssere Praxis
echo $person2->getNachname();

$person2 = new Person("Anne", "Meier", "Berlin");