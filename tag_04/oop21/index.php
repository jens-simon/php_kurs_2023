<?php

class Person
{

    public $vorname = "Jens";
    protected $nachname = "Simon";

    public function getNachname()
    {
        return $this->nachname;
    }
    public function __isset($arg)
    {
        echo "<br>__isset " . $arg;

        return true; // false; 
        // hier kann true oder false gewählt werden, um die gewohnte
        // isset-Funktionalität abzubilden
    }
}
//echo "start<br>";
$mensch = new Person();

// Auslöser ist der Aufruf von der isset-Funktion auf ein Attribut eines Objektes das nicht public ist
// oder sogar gar nicht deklariert ist

isset($mensch->attri); // nicht deklariert

isset($mensch->nachname); // protected

// public loest nicht aus!
isset($mensch->vorname);

