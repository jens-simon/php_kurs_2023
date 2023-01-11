<?php
require_once(__DIR__ . "/inc/autoloader.inc.php");

// require_once "inc/classes/Getraenk.php";
// require_once "inc/traits/Schuettelbar.php";
// require_once ".."
// .. und alle anderen Klassen und Traits !!

// Hauptprogramm
// Objekt Welt

echo "new Wodka<br>";
$wodak = new Wodka();

echo "schuetteln<br>";
$wodak->schuetteln();

echo "new Apfelsaft<br>";
$apfelsaft = new Apfelsaft();

//$apfelsaft-> //keine Trait für Apfelsaft definiert!
