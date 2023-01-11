<?php


// ACHTUNG: Ohne Getter ist keine Ausgabe der privaten Attribute moeglich!




class Fernseher
{
    protected $groesse = 40;

    /**
     * Get the value of groesse
     */
    public function getGroesse()
    {
        return $this->groesse;
    }

    /**
     * Set the value of groesse
     */
    public function setGroesse($groesse): self
    {
        $this->groesse = $groesse;

        return $this;
    }
}
