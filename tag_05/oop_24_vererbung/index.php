<?php

// Einfachvererbung in PHP

class Eltern  
{
    // properties (Merkmale)
    public $propEltern;

    // Methoden (getter/setter/magic)

}

class Kind extends Eltern
{
    // properties (Merkmale)
    public $propKind;

    // Methoden (getter/setter/magic)
}




$eltern = new Eltern;
$eltern->propEltern = "Wert";


$kind = new Kind;
$kind->propKind   = "Wert";
$kind->propEltern = "Wert"; // Das property der Eltern-Klasse 
// ist in der Kindklasse ansprechbar/nutzbar

var_dump($kind);

