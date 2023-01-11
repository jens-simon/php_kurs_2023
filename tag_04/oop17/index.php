<?php

class Person
{
    protected $vorname;

    public function  __construct($vorname)
    {
        $this->vorname = $vorname;
    }

    public function __destruct()
    {
        echo "destruct !";  
        // andere Dinge können noch aufgeräumt werden oder gespeichert werden
        //
          
    }

    function __toString()
    {
        return "";
    }
}


$mensch = new Person("Jens");
echo "<br>nach new";

$mensch = null; // __destruct
//unset($mensch); // __destruct


echo "<br>Skriptende";
// Das Skriptende führt auch __destruct aus!!!!!
