<?php

class Person
{
    public $vorname;
    protected $nachname;
    
    public function __set($attrName, $value)
    {
        echo "<br>__set : " . $attrName . " ";
        print_r($value);
    }

    public function __get($attrName)
    {
        echo "<br>__get : " . $attrName . " ";
    }
   
   
}

//echo "start<br>";
$mensch = new Person();

$mensch->vorname = "Jens"; // Sonderfall für public Attribut:   __set wird nicht aufgerufen!

// alle anderen Fälle rufen __set auf!
$mensch->nachname = "Simon"; // __set
$mensch->test = "Jens";   // __set
$wert = $mensch->test;    // __set
