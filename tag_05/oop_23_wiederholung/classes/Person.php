<?php

// Klassen Welt

class Person
{
    // Initialwertvorgabe
    public $vorname = "unbekannte Person Vorname";
    //public $nachname;
    protected $nachname = "unbekannter Nachname";
    public $adresse;

    public function getNachname()
    {
        return $this->nachname;
    }

    public function __construct($vorname, $nachname, $adresse)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->adresse = $adresse;
    }
    /*public function werteSetzen($vorname,$nachname,$adresse){

    }*/
}
