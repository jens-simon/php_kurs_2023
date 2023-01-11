<?php

// Einfachvererbung in PHP

class Eltern  
{
    // properties (Merkmale)

    // public
    
    // protected verhält sich in einer Kindklasse public
    // protected verhält sich im Hauptprogramm als geschützt
    
    // private


    //
    private $propEltern;

    // Methoden (getter/setter/magic)
    public function getPropEltern() {
    	return $this->propEltern;
    }

    /**
    * @param $propEltern
    */
    public function setPropEltern($propEltern) {
    	$this->propEltern = $propEltern;
    }
}

class Kind extends Eltern
{
    // properties (Merkmale)
    public $propKind;

    // Methoden (getter/setter/magic)
    public function zeigeAlleProp() {
        echo $this->getPropEltern(); // Fehler bei private bei Zugriff auf Attribut
        // Lösung getter/setter
        return $this->getPropEltern() . " , " . $this->propKind;
    }
 
}




$eltern = new Eltern;
//$eltern->propEltern = "Wert"; // hier gibt es einen Fehler
$eltern->setPropEltern("Wert");

$kind = new Kind;
$kind->propKind   = "Wert";
//$kind->propEltern = "Wert"; // Das property der Eltern-Klasse 
echo $kind->zeigeAlleProp();
// ist in der Kindklasse ansprechbar/nutzbar

var_dump($kind);

