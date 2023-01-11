<?php

require_once "Person.php";
// 1. Datenbank Simulation - pdo
$arrayDaten = [];
$arrayDaten['vorname'] = "Jens";
$arrayDaten['nachname'] = "Simon";
$arrayDaten['alter'] = 18;//"Simon";
// 2. HTML-Formular
// $_POST/$_GET/$_REQUEST

$mensch = new Person($arrayDaten); // -> Aufruf der __construct-Methode

// Die klasssichen Setter aufrufen zur Wertbelegung
// Da wir ja einen Konstruktor haben, werden die klasischen Setter hier nicht mehr benötigt
//$mensch->setVorname("Jens");
//$mensch->setNachname("Simon");

//echo "Person:<br>";
//echo $mensch->getVorname(). " - ". $mensch->getNachname();

echo $mensch; // __toString wird genutzt!

