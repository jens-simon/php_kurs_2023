<?php

class Tier
{
    public $name;
    public $beine;
    public $farbe;
    public $art;

    
}

function checkeBeinanzahl() {
    /*if($eingabe>4) 
    $bello->beine = 4;
else    
    $bello->beine = $eingabe ;*/

}

$eingabe = 99; // simulierte Fehleeingabe (zu gross)

$bello = new Tier; // Ein Speicherbereich name bello , mit 4 Fächern mit den Namen der Attribut 
$bello->art="Hund";

if($eingabe>4) 
    $bello->beine = 4;
else    
    $bello->beine = $eingabe ;

$bello->farbe = "rot";
$bello->name = "Bello";


var_dump($bello);


$eingabe2 = 99; // simulierte Fehleeingabe (zu gross)

$maunzi = new Tier; // Ein Speicherbereich name bello , mit 4 Fächern mit den Namen der Attribut 
$maunzi->art="Katze";

if($eingabe>4) 
    $maunzi->beine = 4;
else    
    $maunzi->beine = $eingabe ;

$maunzi->farbe = "schwarz";
$maunzi->name = "Maunzi";


var_dump($bello);


/*
Objekt Katze
Objekt Hund



class Gewürz
Ingwer
Pfeffer
Kümmel

class Fleischware
Salami
Schinken

class Farbe
rot
grün
gelb

class Stadt
München
Stuttgart
Hamburg
Berlin

*/