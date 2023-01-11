<?php
require_once "Buch.php";

$buch = new Buch();
// Die klasssichen Setter aufrufen zur Wertbelegung
$buch->setTitel("PHP Buch");
$buch->setPreis(10.0);
$buch->setBruttoPreis(21.4); // das virtuelle Attribut wird gesetzt


echo "Titel: ".$buch->getTitel().PHP_EOL ;
echo "Nettopreis: ".$buch->getPreis().PHP_EOL ;

// Die Erzeugung des virtuellen Wertes im Hauptprogramm 
//echo "Bruttopreis: ".$buch->getPreis()*1.07; // keine gute Praxis!

// Das Abholen eines konkreten Wertes, ohne das Wissen, wie dieser Zustande kommt
echo "Bruttopreis: ".$buch->getBruttoPreis().PHP_EOL ; // best practice




