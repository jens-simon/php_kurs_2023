<?php
require_once "Autor.php";
require_once "Buch.php";


echo "Delegation";
$einBuch = new Buch("PHP-Buch", "1234-34-443", "Jens", "Simon");


echo "<br>Autor per Konstruktor: ".$einBuch->getAutorVorname(); // Jens , als Autor im Konstruktor festgelegt:

$einBuch->setAutorVorname("Tim"); // Neuer Autor Vorname per virtuellem Setter

echo "<br>Neuer Autor per virtuellem Setter: ".$einBuch->getAutorVorname();
