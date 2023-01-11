<?php
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

    public function zeigeDingAn() {
        $person = new Person;
        $person->setVorname("Jens");
        $person->setNachname("Simon");

        return $person->getVorname()." ".$person->getNachname();
    }
}
