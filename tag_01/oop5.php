<?php

$nachnahme = "";
$vorname = "";

$arr = array();
//var_dump($arr);

// Klassendefinition
class Person // Der Klassename ist Person
{
    public $vorname; // Property / Attribut
    public $nachname ; // Property / Attribut

    public function shrinkName($name) {
        if ($name !== 'Möller')
        return strtolower($name);
 
        return $name;
    }

    public function shrinkNameBesser() {
        var_dump($this);

        if ($this->nachname !== 'Möller')
        return strtolower($this->nachname);
 
        return $this->nachname;
    }
}
var_dump($this);

$jens = new Person; // hier wird ein Objekt gebildet von der Klasse Person
$jens->vorname = "Jens"; // Das Property 'vorname' wird mit einem Wert versehen
$jens->nachname = "Simon"; // Property 'nachname' wird mit einem Wert versehen 
//echo $jens->shrinkName($jens->vorname);
echo $jens->shrinkNameBesser();
//var_dump($jens);

// Und noch ein Objekt
$tim = new Person(); // Die runden Klammern müssen nicht zwingend genutzt werden, später mehr ..
$tim->vorname = "Tim";
$tim->nachname = "Möller";
//echo $tim->shrinkName($tim->nachname);
echo $tim->shrinkNameBesser();
//var_dump($tim);

$jens = new Person; // hier wird ein Objekt gebildet von der Klasse Person
$jens->vorname = "Jens"; // Das Property 'vorname' wird mit einem Wert versehen
$jens->nachname = "Simon"; // Property 'nachname' wird mit einem Wert versehen 
//echo $jens->shrinkName($jens->vorname);

$nichts = new stdClass; 
$nichts->alter = 12;
//var_dump($nichts);

//shrinkName();