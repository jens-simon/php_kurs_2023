<?php

class Person
{

    public $vorname = "Jens";
    protected $nachname = "Simon";

    public function __serialize() // ausgelöst!
    {
        echo "<br>__serialize";
        $arr            = array();
        $arr['vorname'] = $this->vorname; // nur der vorname, nicht der nachname!
        return $arr;
    }


}  
    //echo "start<br>";
$mensch = new Person();

echo serialize($mensch); // Auslöser ist die klassische serialize-Funktion, hier muss eine Objekt serialisert werden!
echo "<br>ohne die __serialize-Methode würde auch noch der Nachname mit serialisiert!";