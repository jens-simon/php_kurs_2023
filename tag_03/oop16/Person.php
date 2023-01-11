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

    public function __construct($arrayDaten)
    {
        // Die manualle Übernahme in die Porperties wird jetzt automatisiert
        //$this->setVorname($arrayDaten['vorname']);
        //$this->setNachname($arrayDaten['nachname']);
        
        // Schleife für Array zur Automatisierung
        foreach($arrayDaten as $key => $element) 
        {
          
            $setter= "set".ucfirst($key) ;//  setVorname und setNachname werden als Methodennamen erzeugt
            if (method_exists($this,$setter)) // wenn diese Methode existiert, rufe sie auf
                $this->$setter($element); // Aufruf der gewünschten setter-Methde mit dem zugehörigen Wert
        }
    }
    

  
    /**
     * @return string
     */
    public function __toString() {
    	return "Vorname: {$this->getVorname()}, Nachname: {$this->nachname}";
    }

    
    

}