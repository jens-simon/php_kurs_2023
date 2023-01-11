<?php
require_once(__DIR__ . "/inc/autoloader.inc.php");

//require_once "inc/classes/Apfelsaft.php";
//require_once "inc/traits/Apfelsaft.php";
// require_once ".."
// .. und alle anderen Klassen und Traits !!

// Hauptprogramm
// Objekt Welt




use traits\Apfelsaft;  // Abkürzen auf den Klassennamen

use classes\Apfelsaft as Apfelsaft2; // für 2te namensgleiche Klasse wird diese umgenannt

echo "new Apfelsaft<br>";
$apfelsaft_traits = new Apfelsaft(); // wegen use traits\Apfelsaft 
echo $apfelsaft_traits->beschreibung;

$apfelsaft_classes = new Apfelsaft2();
echo $apfelsaft_classes->name;

//echo $apfelsaft->name;

//$apfelsaft-> //keine Trait für Apfelsaft definiert!
