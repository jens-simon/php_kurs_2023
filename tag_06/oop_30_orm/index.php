<?php

// ORM - Active Records

// Vererbung


class DatenbankMapper {

    public function save($person){
        // SQL INSERT

        // PDO - Object
        // PDO - exec/query
        // SQL-String
        $sqlString = "INSERT INTO ....." . $person->vorname;
    }

    public function rawSQL($sqlBefehl)
    {
    }
 
    public $vorname;
    public $nachname;
}

$person = new DatenbankMapper();
$person->vorname = "Jens";
$person->nachname = "Jens";
$person->save($person);
$person->rawSQL("INSERT ....");
