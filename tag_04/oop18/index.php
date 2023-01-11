<?php

class Person
{
    protected $vorname;

    public function  __construct($vorname)
    {
        $this->vorname = $vorname;
    }

    public function __call($methodName, $arguments)
    {
        echo "__call :.$methodName";
        print_r($arguments);

        if ($methodName === "tueEtwasAnderes") {
        }

        if ($methodName === "setNachname") {
        }

        if ($methodName === "setVorname") {
        }
    }
    public function tueEtwas()
    {
    }

    protected function tueEtwas2()
    {
    }
    function __toString()
    {
        return "";
    }
}

//echo "start<br>";
$mensch = new Person("Jens");
$mensch->tueEtwas(); // für existierende public functions wird __call nicht ausgelöst


// alle nachfolgenden Aufrufe aktivieren __call
$mensch->tueEtwas2();
$mensch->tueEtwasAnderes(1, "a", [1, 2, 3]);
$mensch->setNachname("Simon");
$mensch->setVorname("Jens");
