<?php 

class Person 
{
    protected $vorname="kein Vorname";
    protected $nachname;
  

  

   
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

    public function __construct($vorname = "", $nachname = "")
    {
        // Der Konstruktor überträgt die übergebnen Parameter
        // in die Objekt Properties
        $this->vorname = $vorname; // ungeschützt , keine Validierung
        $this->setNachname($nachname); // Validierungsmöglichkeit , per Setter

    }
    

  
    /**
     * @return string
     */
    public function __toString() {
    	return "Vorname: {$this->getVorname()}, Nachname: {$this->nachname}";
    }

    
    

}