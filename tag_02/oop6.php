<?php

class Tier
{
    public $name;
    public $beine;
    public $farbe;
    public $art;

    public function zeigeNameAn(){
        
        echo $this->name;
    }
}

$tiere [0] = new Tier;
$tiere[0]->art="Katze";
$tiere[0]->beine = 4;
$tiere[0]->farbe = "rot";
$tiere[0]->name = "Bello";
$tiere[0]->zeigeNameAn();

var_dump($tiere [0] );

$tiere [1] = new Tier;
var_dump($tiere [1] );



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