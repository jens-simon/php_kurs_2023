<?php

class Autor
{
    protected string $vorname;
    protected string $nachname;
    
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    public function getVorname()
    {
        return $this->vorname;
    }


    public function getNachname()
    {
        return $this->nachname;
    }


    public function setNachname(string $nachname)
    {
        $this->nachname = $nachname;
    }

    public function __construct($vorname, $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }
}
