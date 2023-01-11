<?php


// ACHTUNG: Ohne Getter ist keine Ausgabe der privaten Attribute moeglich!

class Schuh
{
    protected $farbe = 'schwarz';
    protected $groesse = 8;
    protected $material = 'Leder';
    protected $typ = 'Halbschuh';




    /**
     * Get the value of farbe
     */
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * Set the value of farbe
     */
    public function setFarbe($farbe): self
    {
        $this->farbe = $farbe;

        return $this;
    }

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

        return $this->groesse; // integer
    }
}
