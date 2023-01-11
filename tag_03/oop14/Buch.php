<?php
class Buch
{
    protected const STEUER = 1.07;
    protected $titel = "";
    protected $preis = 0.0; // Nettopreis wird gespeichert
    //protected $bruttoPreis; // Bruttopreis wird virtualisiert, er berechnet sich aus dem Nettopreis in direkter Abhängigkeit über die Steuer


    /**
     * Get the value of preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Set the value of preis
     */
    public function setPreis($preis): self
    {
        $this->preis = $preis;

        return $this;
    }


    public function setBruttoPreis($preis): self
    {
        $this->preis = $preis / self::STEUER;

        return $this;
    }

    /**
     * Get the value of bruttoPreis
     */
    public function getBruttoPreis()
    {
        return $this->preis * self::STEUER;
    }


    
    /**
     * Get the value of titel
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Set the value of titel
     */
    public function setTitel($titel): self
    {
        $this->titel = $titel;

        return $this;
    }
}
 