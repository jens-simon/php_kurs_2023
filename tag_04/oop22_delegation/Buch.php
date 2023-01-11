<?php

class Buch
{
    protected string $isbn;
    protected string $titel;
    protected Autor $autor; // für Delegation !

    public function getTitel()
    {
        return $this->titel;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }


    public function getAutorVorname()
    {
        return $this->autor->getVorname(); // Delegation!
    }

    public function setAutorVorname($vorname)
    {
        $this->autor->setVorname($vorname); // Delegation!
    }

    public function __construct($titel, $isbn, $vorname, $nachname)
    {
        $this->titel = $titel;
        $this->isbn = $isbn;
        $this->autor = new Autor($vorname, $nachname); // Delegation zum Autor!
    }

    // es fehlen noch Getter und Setter, aber für das Delegation Pattern reichen diese Methoden aus!
}