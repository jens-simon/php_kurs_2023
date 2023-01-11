<?php

class Person {
    protected $nachname;
    protected $vorname;

    /**
     * Get the value of nachname
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set the value of nachname
     */
    public function setNachname($nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get the value of vorname
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set the value of vorname
     */
    public function setVorname($vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }
}