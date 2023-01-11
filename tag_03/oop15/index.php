<?php

require_once "Person.php";

$mensch = new Person("Jens","Simon"); // -> Aufruf der __construct-Methode


// Die klasssichen Setter aufrufen zur Wertbelegung
// Da wir ja einen Konstruktor haben, werden die klasischen Setter hier nicht mehr benötigt
//$mensch->setVorname("Jens");
//$mensch->setNachname("Simon");

//echo "Person:<br>";
//echo $mensch->getVorname(). " - ". $mensch->getNachname();
echo $mensch; // hier werden die Objekt-Daten über die __toString-Methode ausgegeben
