<?php class Tier
{
    // encapsulation/Datenkapselung
    // 1. Sichtbarkeit public und protected/private(nicht nutzbar im Haupprogramm)
    public $name;
    protected $beine; // nicht public
    protected $test;
    
    // getter 
    // setter
    public function getBeine()
    {
        return $this->beine;
    }

    public function setBeine($beine)
    {
        if ($beine > 4)
            $this->beine = 4;
        else
            $this->beine = $beine;
    }

  


  

    /**
     * Get the value of test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set the value of test
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }
}

// Hauptprogramm
$tier = new Tier();
$tier->name = "Tier"; // nicht Datenkapselung (negativ Beispiel)
echo $tier->name;

$tier->setBeine(99); // Datenkapselung ( positiv Beispiel)
echo $tier->getBeine();


$objekt = $tier->setTest(33);
echo $objekt->getTest();

echo $tier->setTest(44)->setBeine("Jens");