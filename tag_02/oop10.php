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

class Ding
{

    protected $merkmal;


    /**
     * Get the value of merkmal
     */
    public function getMerkmal()
    {
        return $this->merkmal;
    }

    /**
     * Set the value of merkmal
     */
    public function setMerkmal(Person $merkmal): self
    {
        $this->merkmal = $merkmal;

        return $this;
    }
}

$person = new Person;
$person->setVorname("Jens");
$person->setNachname("Simon");



$objekt = new Ding;
$objekt->setMerkmal($person);
echo $objekt->getMerkmal()->getNachname();

