<?php
require_once "Schuh.php";
require_once "Fernseher.php";


function gibInhaltAus($var){

    // Operator
    // +
    // ===
    // AND
    // instanceof zum Vergleichen einer Objketvariablen eienr Klasse mit  einen Klassenanmen 
    // boolsche Antwort true/false
    

    if (gettype($var) !== "object" ) // der Typ sagt nicht welche Klasse bei einem Objekt zugrunde liegt!
    {
        echo $var;
    } else {

        // für Objekte jetzt die Klasse rausfinden!
        if ($var instanceof Fernseher )
        {
            echo $var->getGroesse();
        }
    
        if ($var instanceof Schuh )
        {
            echo $var->getFarbe();
        }
        
    }

}


$schuh  = new Schuh();
$fernseher  = new Fernseher();



echo '$schuh hat den Typ: '.gettype($schuh)."<br>"; // object

echo '$fernseher hat den Typ: '.gettype($fernseher)."<br>"; // object

echo 'Inhalt von $schuh: ';
echo gibInhaltAus($schuh)."<br>"; // nur die Farbe

echo 'Inhalt von $fernseher: ';
echo gibInhaltAus($fernseher)."<br>"; // nur die Grösse

echo "Inhalt von 1:";
echo gibInhaltAus(1);  // das gibt 1 !
